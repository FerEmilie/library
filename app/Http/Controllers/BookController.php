<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Book;
use App\Category;

class BookController extends Controller
{

  public function create(){
  $categories = Category::all();
  return view('books.create', ['categories' => $categories]);
 }

  public function save(Request $request){
    $this->validate($request, [
        'title' => 'required|max:55',
        'author' => 'required|max:55',
        'abstract' => 'required|max:500',
        'category' => 'required',
        'isbn' => 'required',
    ]);
    $book = new Book();
    $book->title = $request->input('title');
    $book->author = $request->input('author');
    $book->abstract = $request->input('abstract');
    $category = new Category();
    $category->id = $request->input('category');
    $category_parsed = json_decode($category);
    $book->category_id = $category_parsed->{'id'};
    $book->isbn = $request->input('isbn');
    $book->save();

    return redirect('/books/showAll');
  }

  public function showAll(){
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
