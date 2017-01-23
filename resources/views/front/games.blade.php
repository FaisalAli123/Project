@extends('layout.main')
@section('title','Platinum Games | Games')
@section('content')
  <!-- Portfolio Section -->
  <div class="container"
  <div class="row">

          <h2 class="page-header text-center">Games</h2>
      </div>
      <div class="col-md-4">

        @forelse ($games as $game)
              <a href="{{route('game')}}">
              <h3>{{$game->name}}</h3>
              <h5>{{$game->edition}}</h5>
              <h5>{{$game->description}}</h5>
              <h3>
                £{{$game->price}}
              </h3>
              <img style="width:300px; height:170px;" class="img-responsive img-portfolio img-hover" src="{{url('images',$game->image)}}" alt="">
              <a href="#" class="btn btn-default">Buy Now</a><br /><br />
          </a>
       </div>

     </div>
     </div>
    @empty
      <h3>No Games</h3>
    @endforelse


  <!-- /.row -->
@endsection
