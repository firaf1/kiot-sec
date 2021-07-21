<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BooksController extends Controller
{
   public function index()
   {
       $books = Book::latest()->get();
      return Inertia::render('page/books', ['books'=>$books]);
   }
}
