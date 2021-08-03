<?php

namespace App\Http\Controllers;

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
}
