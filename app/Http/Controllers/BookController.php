<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function viewPage(){
        $books = Book::all();

        // return view('Book.View', compact('books'));
        return view('Book.View')->with('book', $books);
    }

    public function addPage(){
        return view('Book.Add');
    }

    public function store(Request $request){
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'release_date' => $request->release_date,
            'page' => $request->page,
            'stock' => $request->stock
        ]);

        return redirect(route('viewPage'));
    }

    public function editPage($id){
        $book = Book::findOrFail($id);

        return view('Book.Edit')->with('book', $book);
    }

    public function updateBook($id, Request $request){
        $request->validate([
            'title' => 'required|min:5|max:40',
            'author' => 'required'
        ]);

        Book::findOrFail($id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'release_date' => $request->release_date,
            'page' => $request->page,
            'stock' => $request->stock
        ]);

        return redirect(route('viewPage'));
    }

    public function deleteBook($id){
        Book::destroy($id);

        return redirect(route('viewPage'));
    }
}
