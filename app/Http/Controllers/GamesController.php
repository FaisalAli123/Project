<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GamesController extends Controller
{
public function index()
{
  $games = Game::all();
  return view ('games.index', compact('games'));
}
public function show(Game $game)
{
  $game->load('notes.user');

  return view('games.show', compact('game'));
}
}
