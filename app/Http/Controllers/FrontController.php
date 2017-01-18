<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
class FrontController extends Controller
{
  public function index()
  {
     $games=Item::all();
     return view('front.home',compact('games'));
  }
  public function games()
  {
    $games=Item::all();
    return view('front.games',compact('games'));
  }
  public function game()
  {
    return view('front.game');
  }
}
