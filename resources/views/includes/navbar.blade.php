<!-- header -->
<header class="sticky">
    <div class="container-full">

        <!-- Logo -->
        <div class="logo"> <a href="index.html"><img class="img-responsive" src="images/logo.svg" alt=""></a> </div>
        <nav class="navbar ownmenu navbar-expand-lg">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span></span> </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav">
                    <li class="{{Request::is('/')? "active":""}}">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li class="dropdown"> <a href="index.html" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <ul class="dropdown-menu">
                            <li> <a href="shop_02.html">Shop Full Left Sidebar</a> </li>
                        </ul>
                    </li>
                    <li class="{{Request::is('advertises')? "active":""}}"> <a href="{{route('advertises.index')}}">Advertises</a> </li>

                    <li class="{{Request::is('contact')? "active":""}}"> <a href="{{route('contact')}}"> contact</a> </li>
                </ul>
            </div>
            <!-- Nav Right -->
            <div class="nav-right">
                @auth
                <ul class="navbar-right">
                    <!-- USER INFO -->
                    <li> <a href="#"><i class="lnr lnr-user"></i> </a></li>
                    <!-- USER BASKET -->
                    <li> <a id="cd-menu-trigger" href="#0"><i class="lnr lnr-cart"></i><span class="c-no">2</span> </a>
                    </li>
                    <!-- SEARCH BAR -->
                    <li> <a href="javascript:void(0);" class="search-open"><i class="lnr lnr-magnifier"></i></a>
                        <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                            <div class="search-overlay"></div>
                            <div class="position-center-center">
                                <div class="search">
                                    <form>
                                        <input type="search" placeholder="Search Shop">
                                        <button type="submit"><i class="icon-"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa fa-door-open">logout</i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
                @else
                <li> <a href="{{route('login')}}">Login </a> </li>
                <li> <a href="{{route('register')}}">Register </a> </li>
                @endauth
            </div>

        </nav>
    </div>
    <div class="clearfix"></div>
</header>
