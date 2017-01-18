@extends('layout.main')
@section('title','Platinum Games | Games')
@section('content')
  <!-- Portfolio Section -->
  <div class="container">
  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header text-center">Games</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        @forelse ($games as $game)
              <a href="{{route('game')}}">
              <h3>{{$game->name}}</h3>
              <h5>
                £{{$game->price}}
              </h5>
              <p>

              </p>
              <img class="img-responsive img-portfolio img-hover" src="{{url('images',$game->image)}}" alt="">
          </a>
      </div>
    @empty
      <h3>No Games</h3>
    @endforelse

  </div>
  </div>
  <!-- /.row -->
@endsection
