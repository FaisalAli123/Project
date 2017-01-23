@extends('layout.main')
@section('title','Platinum Games | Games')
@section('content')
  <!-- Display Games Section -->
  <div class="row">
      <div class="col-lg-12">
        @forelse ($games as $game)
          <h2 class="page-header text-center">{{$game->name}}</h2>
      </div>
      <div class="col-md-6">

          <ul>
              <p><strong>Stock Status : IN STOCK</strong></p>
              <h5>{{$game->edition}}</h5>
            <h3>£{{$game->price}}</h3>
            <h3>Product Description</h3>
            <h5>{{$game->description}}</h5>
              <a href="#" class="btn btn-default">Buy Now</a><br /><br />

          </ul>
      </div>
      <div class="col-md-6">
          <br /><br /><img style="width:550px; height:300px;"class="img-responsive img-portfolio img-hover" src="{{url('images',$game->image)}}" alt="">
      </div>
  </div>
  <!-- End Section -->

  <hr>

@empty
  <h3>No Games</h3>
@endforelse

@endsection
