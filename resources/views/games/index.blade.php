@extends('layouts.app')

@section('content')

<h1>All Games</h1>

@foreach ($games as $game)
  <div>
  <a href="{{ $game->path() }}"> {{$game->title}}</a>
  </div>

@endforeach
@stop
