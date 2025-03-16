<?php

namespace App\Http\Controllers;

use App\Models\BooksModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = BooksModel::all();
        return view('welcome', compact('books'));
    }
    public function create(){
        return view('add-book');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'rating' => 'required|numeric',
        ]);
        BooksModel::create([
            'title' => $request->title,
            'author' => $request->author,
            'rating' => $request->rating
        ]);
        return redirect('/welcome');
    }
    public function edit($id){
        $book = BooksModel::findorFail($id);
        return view('edit-book',compact('book'));
    }
    public function update(Request $request, $id){
        $book = BooksModel::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'rating' => 'required|numeric',
        ]);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'rating' => $request->rating
        ]);
        return redirect('/welcome');
    }
    public function destroy($id){
        $book = BooksModel::findorFail($id);
        $book->delete();
        return redirect('/welcome');
    }
}
