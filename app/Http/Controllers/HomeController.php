<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
     return view('front.home');
  }
  public function games()
  {
    return view('front.games');
  }
  public function game()
  {
    return view('front.game');
  }
}
