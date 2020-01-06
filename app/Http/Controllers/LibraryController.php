<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibraryController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showWishList(){
    $i = 1;
    $books = Book::all();
    $book_id = Book::select('id')->get();
    $bookId_parsed = json_decode($book_id);
    $category = Book::find(intval($bookId_parsed))->category;
    return view('books.showAll', ['books' => $books, 'category' => $category, 'i' => $i]);
  }

  public function showOwn(){
    $i = 1;
    $books = Book::all();
    $book_id = Book::select('id')->get();
    $bookId_parsed = json_decode($book_id);
    $category = Book::find(intval($bookId_parsed))->category;
    return view('books.showAll', ['books' => $books, 'category' => $category, 'i' => $i]);
  }
  public function changeShelf(){

  }

  // public function delete($id){
  //     $book = Book::find($id);
  //     $book->libraries()->detach();
  //     $book->delete();
  //     return redirect('/');
  //   }
}
