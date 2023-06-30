<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact_us(){
        return view('contactus');
    }
    
    public function about_us(){
        return view('aboutus');
    }
}
