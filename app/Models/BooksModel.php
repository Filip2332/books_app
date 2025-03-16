<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BooksModel extends Model
{
    protected $table = 'books_app';
    protected $fillable = ["title", "author", "rating"];
}
