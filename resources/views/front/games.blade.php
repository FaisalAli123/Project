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
          <a href="{{route('game')}}">
              <img class="img-responsive img-portfolio img-hover" src="http://media1.gameinformer.com/filestorage/CommunityServer.Components.SiteFiles/imagefeed/featured/electronic-arts/battlefield/battlefield1/GasMask610.jpg" alt="">
          </a>
      </div>
      <div class="col-md-4 col-sm-6">
          <a href="{{route('game')}}">
              <img class="img-responsive img-portfolio img-hover" src="https://ubistatic9-a.akamaihd.net/ubicomstatic/en-US/global/media/wd-media-ss06-FULL-marcus-beautiful-lies_254769.jpg" alt="">
          </a>
      </div>
      <div class="col-md-4 col-sm-6">
          <a href="{{route('game')}}">
              <img class="img-responsive img-portfolio img-hover" src="https://ubistatic9-a.akamaihd.net/ubicomstatic/en-US/global/media/FH-screenshot-05-FULL_255355.jpg" alt="">
          </a>
      </div>
      <div class="col-md-4 col-sm-6">
          <a href="{{route('game')}}">
              <img class="img-responsive img-portfolio img-hover" src="http://cdn2.alphr.com/sites/alphr/files/styles/gallery_adv/public/2016/05/gt_sport_gran_turismo_sport_release_date_1.jpg?itok=--NWfDkt" alt="">
          </a>
      </div>
      <div class="col-md-4 col-sm-6">
          <a href="{{route('game')}}">
              <img class="img-responsive img-portfolio img-hover" src="http://images2.mobilenapps.com/data/images/full/13801/spider-man-ps4-december-2017-release-date-not-happening-new-video-teases-in-game-footage.jpg" alt="">
          </a>
      </div>
      <div class="col-md-4 col-sm-6">
          <a href="{{route('game')}}">
              <img class="img-responsive img-portfolio img-hover" src="http://assets1.ignimgs.com/thumbs/userUploaded/2016/6/13/2704682829328e9c64a2bo-1465876092206_large.jpg" alt="">
          </a>
      </div>
  </div>
  </div>
  <!-- /.row -->
@endsection
