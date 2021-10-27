<!--Header Section Start-->
<header id="header" class="header">
    <div class="header_top py_15 icon-default color_white white_hover">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="top_header_phone">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>Do you Need help? </span>
                        <span><a href="callto:+14569005789">+ 1-456-900-5789</a></span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="register_login float-right">
                        <ul>
                            @guest

                            <li>
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <a href="{{route('register')}}">Register</a>
                            </li>
                            <li>
                                <i class="fa fa-sign-in" aria-hidden="true"></i>
                                <span><a href="{{route('login')}}">Login</a></span>
                            </li>
                            @endguest
                            @auth
                            <li class="nav-item drop-head dropdown border-0 mb-0 p-0">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Bienvenue <strong class="text-capitalize">{{ Auth::user()->name }}</strong><i class="fa fa-sort-down mx-2"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item text-center text-dark" href="">
                                    <i class="fa fa-user-circle mr-3 " aria-hidden="true"></i>
                                    Profile
                                </a>
                                <hr class="m-0">
                                <a  class="dropdown-item text-dark text-center"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">

                                    <i class="fa fa-power-off mr-3 "></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </div>
                            </li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main_nav" class="navbar_one full-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="#"><img src="images/logo/logo.png" alt="logo"></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                 <li class="nav-item">
                                    <a class="nav-link text-uppercase " href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase " href="{{route('about')}}">About</a>
                                  </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase " href="{{route('trainers')}}">Trainners</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-uppercase " href="{{route('contact')}}">Contact</a>
                                  </li>
                            </ul>
                      </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--Header Section End-->
