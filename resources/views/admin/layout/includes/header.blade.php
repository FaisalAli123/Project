<div class="header">
  <!-- Start Container -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 pull-right">
              <!-- Start Navigation -->

                    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                              <!-- Start Dropdown Nav-->

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}} <b
                                            class="caret"></b></a>

                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{route('admin.index')}}">Home</a></li>
                                    <li><a href="{{url('/')}}">Platinum Games</a></li>
                                    <li><a href="{{url('/logout')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Dropdown Nav-->
                        <!-- Start Dropdown Nav-->
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b
                                            class="caret"></b></a>

                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{route('item.index')}}">Items</a></li>
                                    <li><a href="{{route('item.create')}}">Add Items</a></li>
                                    <li><a href="{{route('platform.index')}}">Plaforms</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Dropdown Nav-->
                    </nav>
                    <!-- Start Navigation -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Container -->
</div>
