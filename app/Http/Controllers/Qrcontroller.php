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
    $bo = Book::where('book_id', $request->book_id)->first();
    $bo->available = $bo->available -1;
    $bo->save();
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
    public function ReturnBookIn()
    {
       return Inertia::render('page/borrow/returnBookIN');
    }
    public function returnPreview(Request $request)
    {
         
        $user = User::where('qr_data', $request->qr)->first();
        if($user){
            $borrow = Borrow::where('user_id', $user->id)->first();
            if($borrow){
        $book = Book::where('id', $borrow->book_id)->first();
 
    
            return Inertia::render('page/borrow/returnBookIN', ['scannedInfo'=>$user,'isUserExist'=>false, 'books'=>$book]);
        }
        }
        else {
            return Inertia::render('page/borrow/returnBookIN', ['isUserExist'=>true]);
        }
     
   
    }
    public function ReturnSubmited($id)
    {
  
       
        $borrow = Borrow::where('user_id', $id)->first();
        $book = Book::where('id', $borrow->book_id)->first();
        if(!$book){
            return Inertia::render('page/borrow/returnBookIN', ['isUserExist'=>true]);
        }
       
        $book->available = $book->available + 1;
        $book->save();
        $borrow->delete();
        return redirect(route('ReturnBookIn'));

    }

}
