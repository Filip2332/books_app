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
        return view('add.book');
    }
}
