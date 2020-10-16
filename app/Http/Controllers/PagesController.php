<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function home(){
      return view('pages.home');
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

    public function userControl(){
      $users = User::all();
      return view('pages.userControl')->with('users', $users);
    }

    public function myPosts(){
      $user_id = auth()->user()->id;
      $user = User::find($user_id);

      return view('pages.myPosts')->with('posts', $user->posts);
    }
}
