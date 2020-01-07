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

  public function changeShelfWish($id){
    $book = Book::find($id)->libraries()->where('libraries.user_id', '=', Auth::user()->id);
    $library = Library::find('id')->where('libraries.user_id', '=', Auth::user()->id);
    $library_id_parsed = intval(json_decode($library));
    dd($library_id_parsed);
    $book->book_id = $id;
    $book->library_id = $library_id_parsed ;

    $book->do = 0;
    $book->save();
    return redirect('/books');
  }

  public function changeShelfDo($id){
    $book = Book::find($id);
    $book->do = 1;
    $book->save();
    return redirect('/books');
  }

  // public function delete($id){
  //     $book = Book::find($id);
  //     $book->libraries()->detach();
  //     $book->delete();
  //     return redirect('/');
  //   }
}
