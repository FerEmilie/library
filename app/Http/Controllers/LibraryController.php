<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Library;
use App\User;
use Auth;

class LibraryController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Display the wish list of the current user.
   *
   */
  public function showWishList(){
    $i = 1;
    $books = Book::join('book_library', 'book_library.book_id', '=', 'books.id')
       ->join('libraries', 'book_library.library_id', '=', 'libraries.id')
       ->where('libraries.user_id', '=', Auth::user()->id)
       ->where('do', '=', 0)
       ->select('books.*')
       ->get();
    return view('library.showWishList', ['books' => $books, 'i' => $i]);
  }

  /**
   * Display the list of books owned by the current user.
   *
   */
  public function showOwn(){
    $i = 1;
    $books = Book::join('book_library', 'book_library.book_id', '=', 'books.id')
       ->join('libraries', 'book_library.library_id', '=', 'libraries.id')
       ->where('libraries.user_id', '=', Auth::user()->id)
       ->where('do', '=', 1)
       ->select('books.*')
       ->get();
    return view('library.showOwn', ['books' => $books, 'i' => $i]);
  }

  /**
   * Add book on the wish list of the current user.
   *
   */
  public function changeShelfWish($id){
    $library = Library::find(Auth::user()->library->id);
    $do = ['do'=> 0];
    $library->books()->attach($id, $do);
    return redirect('/library/showWishList');
  }

  /**
   * Add book on the own list of the current user.
   *
   */
  public function changeShelfDo($id){
    $library = Library::find(Auth::user()->library->id);
    $do = ['do'=> 1];
    try {
        $library->books()->attach($id, $do);
    } catch (\Exception $e) {
        $library->books()->updateExistingPivot($id, $do);
    }
    return redirect('/library/showOwn');
  }

  /**
   * Delete the book on the library of the current user.
   *
   */
  public function delete($id){
      $library = Library::find(Auth::user()->library->id);
      $library->books()->detach($id);
      return redirect('/');
    }
}
