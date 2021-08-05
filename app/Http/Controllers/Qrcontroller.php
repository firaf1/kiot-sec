<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Borrow;
use Illuminate\Http\Request;

class Qrcontroller extends Controller
{
    //
    public function borrow(Request $request)
    {
        
      
        $qr = User::where('qr_data', $request->qr)->first();
        $books = Borrow::all();
        $books->load(['user']);
        $books->load(['book']);
        if($qr){
           
        //    dd($qr);
            return Inertia::render('page/borrow/bookborrow', ['scannedInfo'=>$qr,'isValid'=>true, 'books'=>$books]);
        }
        return Inertia::render('page/borrow/bookborrow', ['scannedInfo'=>$qr,'isValid'=>true, 'books'=>$books]);
    }
    public function borrowSubmit(Request $request){
$user_id = User::where('qr_data', $request->qr)->first();
$user_id = $user_id->id;
 
$book_id = Book::where('book_id', $request->book_id)->first();

$qr = User::where('qr_data', $request->qr)->first();
if(Book::where('book_id', $request->book_id)->exists()){
    $book_id = $book_id->id;
    $borrow = new Borrow();
    $borrow->user_id = $user_id;
    $borrow->book_id = $book_id;
    $borrow->day = "now()";
    $borrow->save();
    $qr = User::where('qr_data', $request->qr)->first();
    $books = Borrow::all();
    $books->load(['user']);
    $books->load(['book']);

    return Inertia::render('page/borrow/bookborrow', ['scannedInfo'=>$qr,'isValid'=>true, 'books'=>$books]);
  
}
else {
    $qr = User::where('qr_data', $request->qr)->first();
    $user = User::all();
    $books = Borrow::all();
    $books->load(['user']);
    $books->load(['book']);
    return Inertia::render('page/borrow/bookborrow', ['id_Book_id_Exit'=>$user,'scannedInfo'=>$qr, 'books'=>$books]);
}
    }

}
