<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Inertia\Inertia;
use App\Models\Borrow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return Inertia::render('page/books', ['books' => $books]);
    }
    public function AddBook(Request $request)
    {

        // dd($request->tumb);
        $request->validate([
          
            'amount' => 'required',
            'title' => 'required|unique:books',
            'desc' => 'required',

        ]);
        $image = $request->tumb; // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        // dd($image);
        $imageName = "KIOT_BOOKS" . time() . '.' . 'png';
        // $insert1 =  $request->tumb->move(public_path('Books'), $imageName);
        \File::put(public_path('KIOT_BOOKS/') . $imageName, base64_decode($image));

        $book = new Book();
        $book->title = $request->title;
        $book->user_id = Auth::user()->id;
        $book->tumb = $imageName;
        $book->description = $request->desc;
        $book->amount = $request->amount;
        $book->available =$request->amount;
        $book->status = "pending";
        $user = Book::all()->last();
        $temp_id = "000";
        if(!$user){
        $temp_id = "0001";
        }
        else if($user->id < 10){
            $temp_id = "000". $user->id + 1;
        }
        else if($user->id < 100){
            $temp_id = "00".$user->id + 1;
        }
        else{
            $temp_id =$user->id + 1;
        }
        $book->book_id ="KIOT/" .  $temp_id;
        // $book->book_id = "KIOT/". ;

        $book->save();

        return back();
    }
   
    public function unapproved($id)
    {
        $book = Book::where('id', $id)->first();
        $book->status = "Blocked";
        $book->save();
        return back();
    }

    public function approve($id)
    {
        $book = Book::where('id', $id)->first();
        $book->status = "Approved";
        $book->save();
        return back();
    }
    public function update(Request $request,$id)
    {
        // dd($id);
        // dd($request->tumb);
       $user = Book::where('id', $id)->first();
       $user->title = $request->title;
       $user->amount = $request->amount;
    




       $image = $request->tumb; // your base64 encoded
       $image = str_replace('data:image/png;base64,', '', $image);
       $image = str_replace(' ', '+', $image);
       // dd($image);
       $imageName = "KIOT_BOOKS" . time() . '.' . 'png';
       // $insert1 =  $request->tumb->move(public_path('Books'), $imageName);
       \File::put(public_path('KIOT_BOOKS/') . $imageName, base64_decode($image));





        
       $user->tumb = $imageName;
       $user->description = $request->desc;
       $user->save();
       return back();

    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        
return back();
    }
public function availablebook()
{
    
    $books = Book::where('status', 'Approved',)->where('available', '!=', 0)->get();

    return Inertia::render('page/borrow/availablebook', ['books'=>$books]);
}
public function borrow()
{
 
     $books = Borrow::all();
     $books->load(['user']);
     $books->load(['book']);
    return Inertia::render('page/borrow/bookborrow', ['books'=>$books]);
}
}
