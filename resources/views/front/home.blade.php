@extends('layout.main')

@section('content')
  <!-- Start Container -->
  <div class="container">

      <!-- Start Info Section -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header text-center">
                  Welcome To Platinum Games
              </h1>
          </div>
          <div class="col-md-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4><i class="fa fa-fw fa-check"></i> About Us</h4>
                  </div>
                  <div class="panel-body">
                      <p>Orginally launched in 1998, Platinum Games is one of the longest-established online retailers of video games. In 2009 we were voted in the top 5 of UK online video game retailers. We despatch thousands of orders every week and hundreds of thousands of satisfied customers</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4><i class="fa fa-fw fa-gift"></i> What We Provide</h4>
                  </div>
                  <div class="panel-body">
                      <p>Platinum Games has a fantastic selection og console games to choose from, including Xbox 360 games, Playstation 3 games, Xbox One games, Playstation 4 games, Nitendo Wii U games, PC games and more. We also have a wide selection of games for older games consoles.</p>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4><i class="fa fa-fw fa-compass"></i> Delivery</h4>
                  </div>
                  <div class="panel-body">
                      <p>Subject to availability, we will use reasonable endeavours to deliver the products you have ordered as sson as possible after you place your order, any in any event within 30 days. You shall be given an estimated time for delivery at the time your order is placed.</p>

</div>
</div>
</div>
</div>
<!--End Info Section -->

<!-- Start Games Section -->
<h2 class="page-header text-center">Games</h2>
<div style="margin-left: 400px;" class="container">



<div class="row">

          <div class="col-md-4">

            @forelse ($games->chunk(4) as $chunk)
              @foreach($chunk as $game)
                  <a href="{{route('game')}}">
                  <h3 style="margin-left: -40px;"class="text-center">{{$game->name}}</h3>
                  <h5 style="margin-left:-50px;"class="text-center">
                    £{{$game->price}}
                  </h5>
                  <img style="width:300px; height:170px;" class="img-responsive img-portfolio img-hover" src="{{url('images',$game->image)}}" alt="">
              </a>


        @endforeach
        @empty
          <h3>No Games</h3>
        @endforelse
      </div>
      </div>
</div>

<!-- End Games Section -->
<!-- End Container -->
@endsection
