<header>
    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area address-one-lines bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 address-info">
                    <div class="info box">
                        <ul>
                            <li>
                                Have any question?
                            </li>
                            <li>
                                <i class="fas fa-envelope-open"></i>
                                Info@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="user-login text-right col-lg-2">
                    <a href="{{Route('s.login')}}"><i class="fas fa-edit"></i>LogIn</a>
                </div>
                <!-- <div class="user-login text-right col-lg-2">
                    <a href=""><i class="fas fa-edit"></i>LogIn</a>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Header Top -->
    <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">

        <div class="container d-flex justify-content-between align-items-center">


            <div class="navbar-brand-left">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="https://validthemes.net/site-template/examin/assets/img/logo.png" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">

                        </ul>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#">Category</a>
                    </li>

                    <li>
                        <a class="smooth-menu" href="#">Instructor</a>
                    </li>
                    <li class=""><a href="{{Route('cart.view')}}">  
                         
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
                                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708" />
                            </svg>

                            @if(Session::has('cart'))
                                         {{count(Session::get('cart')) }} items
                                    @else
                                    0 items
                                    @endif   
                          

                        </a>
                    </li>

                </ul>

            </div><!-- /.navbar-collapse -->

            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->

    </nav>
</header>