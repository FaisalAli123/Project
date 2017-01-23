@extends('layout.main')

@section('title','Platinum Games | Games')

@section('content')
<!-- Display G Section -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header text-center">Battlefield 1</h2>
    </div>
    <div class="col-md-6">

        <ul>
          <h3>Product Description</h3><br />
            <p><strong>Stock Status : IN STOCK</strong></p><br />
            <h4>Price: £40.00</h4><br />
            <label>
                          Select Edition
                          <select>
                              <option value="gameoftheyearedition">
                                  Game Of The Year Edition
                              </option>
                              <option value="deluxeedition">
                                  Deluxe Edition
                              </option>
                              <option value="hardenededition">
                                  Hardened Edition
                              </option>

                          </select>
            </label>
            <a href="#" class="btn btn-default">Buy Now</a><br /><br />
            <p>Key Features</p>
            <li>Epic 64-Player Multiplayer Battles - Team up with friends and join in the most epic multiplayer battles in FPS history with up to 64 players fighting as infantry or piloting vehicles ranging from tanks bikes on the ground to biplanes and gigantic battleships.</li>
            <li>Experience the Dawn of All-out War - Be a part of the greatest battles ever known to man. From the heavily defended Alps to the scorching deserts of Arabia, waar is raging on an epic scale on land, air and sea as you witness the birth of modern warfare.</li>
            <li>Earth-shattering Intuituve Destruction - With intuitive destruction, no battle is ever the same. Destroy vechicles big and small and demolish entire buildings. From tiny wooden houses to massive stone forts, even the grouds on which you're fighting can be blasted apart.</li>
        </ul>
    </div>
    <div class="col-md-6">
        <br /><br /><br /><br /><img class="img-responsive" src="http://media1.gameinformer.com/filestorage/CommunityServer.Components.SiteFiles/imagefeed/featured/electronic-arts/battlefield/battlefield1/GasMask610.jpg" alt="">
    </div>
</div>
<!-- /.row -->

<hr>
@endsection
