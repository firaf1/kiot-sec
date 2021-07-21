<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index()
   {
    return Inertia::render('page/student/dashboard');
   }
}
