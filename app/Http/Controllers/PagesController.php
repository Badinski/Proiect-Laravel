<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
      return view('home');
    }

    public function about(){
      return view('pages.about');
    }

    public function support(){
      return view('pages.support');
    }

    public function review(){
      return view('pages.review');
    }
}
