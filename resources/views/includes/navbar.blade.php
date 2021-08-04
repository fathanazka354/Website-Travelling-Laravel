<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
            <img src="{{url('frontend/images/brand.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mr-3">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">Paket Travel</a>
                </li>
                <li class="nav-item mr-3 dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                        Service
                    </a>
                    <div class="dropdown-menu" style="position: absolute;">
                        <div class="dropdown-item">Link 1</div>
                        <div class="dropdown-item">Link 2</div>
                        <div class="dropdown-item">Link 3</div>
                    </div>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">Testimonial</a>
                </li>

            </ul>

            @guest
            <!-- Mobile button -->
            <form action="" class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button"
                    onclick="event.preventDefault(); location.href=`{{ url('login') }}`;">
                    Login
                </button>
            </form>

            <!-- Desktop button -->
            <form action="" class="form-inline d-none d-sm-none my-2 my-lg-0 d-md-block">
                <button class="btn btn-navbar-right btn-login my-2 my-sm-0 px-4" type="button"
                    onclick="event.preventDefault(); location.href=`{{ url('login') }}`;">
                    Login
                </button>
            </form>
            @endguest

            @auth
            <!-- Mobile button -->
            <form action="{{url('logout')}}" class="form-inline d-sm-block d-md-none" method="POST">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="submit">
                    Logout
                </button>
            </form>

            <!-- Desktop button -->
            <form action="{{url('logout')}}" class="form-inline d-none d-sm-none my-2 my-lg-0 d-md-block" method="POST">
                @csrf
                <button class="btn btn-navbar-right btn-login my-2 my-sm-0 px-4" type="submit">
                    Logout
                </button>
            </form>
            @endauth









      
  </div>

        </ nav>
</div>