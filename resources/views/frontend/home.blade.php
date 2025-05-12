@extends('frontend.master')
@section ('content')
    
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area auto-height banner-box text-default text-light">

        <div class="item">
            <div class="box-table bg-dark">
                <div class="box-cell">
                    <div class="container">
                        <div class="row item-flex center">
                            <div class="col-lg-5 thumb">
                                <img src="https://validthemes.net/site-template/examin/assets/img/thumb.png" alt="Thumb">
                            </div>
                            <div class="col-lg-7">
                                <div class="content">
                                    <h4>Own your future learning new skills online</h4>
                                    <h1>Learn from best online  course</h1>
                                    <a class="btn btn-light border btn-md" href="#">Learn more</a>
                                    <a class="btn btn-light effect btn-md" href="#">View Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
    <!-- End Banner -->
         <!-- Start Course Offer 
    ============================================= -->
    <div class="course-offer-area default-padding-top">
        <div class="container">
            <div class="offer-box">
                <div class="row">
                    <div class="col-lg-6 thumb">
                        <img src="https://validthemes.net/site-template/examin/assets/img/illustration/2.png" alt="Thumb">
                    </div>
                    <div class="col-lg-6 info">
                        <h2>Register today</h2>
                        <h4>Get 50s of online Courses For Free!</h4>
                        <!-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. A harum quibusdam sapiente nobis hic. Quaerat aperiam ad, fuga assumenda facere tempora? Amet quod debitis, sed, nam impedit eius ab atque.
                        </p> -->
                        
                        <a class="btn btn-theme effect btn-md smooth-menu" href="{{Route('s.register')}}">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Offer -->
         <!-- Start Top Category & Trending Courses 
    ============================================= -->
    <div id="category" class="top-cat-area inc-trending-courses about-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 top-cat-items text-light inc-bg-color text-center">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 equal-height">
                            <div class="item mariner" style="background-image: url(assets/img/category/1.jpg);">
                                <a href="#">
                                    <i class="flaticon-feature"></i>
                                    <div class="info">
                                        <h4>software engineering</h4>
                                        <span>(10) Topics</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 equal-height">
                            <div class="item java" style="background-image: url(assets/img/category/2.jpg);">
                                <a href="#">
                                    <i class="flaticon-interaction"></i>
                                    <div class="info">
                                        <h4>Interactive Program</h4>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 equal-height">
                            <div class="item malachite" style="background-image: url(assets/img/category/3.jpg);">
                                <a href="#">
                                    <i class="flaticon-conveyor"></i>
                                    <div class="info">
                                        <h4>Quantum Mechanics</h4>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 equal-height">
                            <div class="item brilliantrose" style="background-image: url(assets/img/category/4.jpg);">
                                <a href="#">
                                    <i class="flaticon-education"></i>
                                    <div class="info">
                                        <h4>Programming in java</h4>
                                        <span>(advance level) </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 equal-height">
                            <div class="item casablanca" style="background-image: url(assets/img/category/5.jpg);">
                                <a href="#">
                                    <i class="flaticon-potential"></i>
                                    <div class="info">
                                        <h4>Php-laravel</h4>
                                        <span>Basic to advance </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 equal-height">
                            <div class="item emerald" style="background-image: url(assets/img/category/6.jpg);">
                                <a href="#">
                                    <i class="flaticon-print"></i>
                                    <div class="info">
                                        <h4>Basic C++</h4>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- End Top Category -->

                <!-- End Home Sidebar -->
                <div class="col-lg-4 home-sidebar">
                    <!-- Start Trending Courses -->
                    <div class="sidebar-item trending-courses-box">
                        <h4>Trending Courses</h4>
                        <div class="trending-courses-items">
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#">Professional PHP-laravel learing</a>
                                        </h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Muhammad samiur</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="https://validthemes.net/site-template/examin/assets/img/courses/g2.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#">Profession paython learing</a>
                                        </h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 </span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="https://validthemes.net/site-template/examin/assets/img/courses/g3.jpg" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#">Profession Java learning</a>
                                        </h4>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span>4.5 (23,890)</span>
                                        </div>
                                        <div class="meta">
                                            <i class="fas fa-user"></i> By <a href="#">Touhidul islam faysal</a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="more">Browse All Crouses <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <!-- End Trending Courses -->
                </div> 
                <!-- End Home Sidebar -->

            </div>
        </div>
    </div>
    <!-- End Top Categories & Trending Courses -->
     
    <!-- Start Popular Courses  -->
    =============================================
    <div id="courses" class="popular-courses circle carousel-shadow bg-gray default-padding">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Popular Courses</h2>
                        <p>
                            Discourse assurance estimable applauded to so. Him everything melancholy uncommonly but solicitude inhabiting projection off. Connection stimulated estimating excellence an to impression. 
                        </p>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-12">
                    <div class="popular-courses-items bottom-price popular-courses-carousel owl-carousel owl-theme">
                        <!-- Single Item -->
                       @foreach ($course as $courses)
                        <div class="item"> 
                            <div class="thumb">
                                <a href=""> 
                                    <img src="{{'/uploads/course/'.$courses->image}}" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll Now
                                    </a>
                                </div>
                            </div>    
                                               
                            <div class="info">
                           
                                <div class="author-info">
                               
                                    <div class="">

                                        <a href="" ><img src="" alt=""></a> 
                                       
                                    </div>
                                 
                                
                                </div>
                              
                                <h4><a href=""></a> {{$courses->name}}</h4>
                                <div class="cats">
                                    <a href=""> {{ $courses->category->Name }}</a>
                                    <a href="#"></a>
                                </div>
                                <p>
                                {{$courses->outline}}
                                </p>
                                <div class="bottom-info">
                                
                                    <div class="price-btn">
                                    {{ $courses->price }}
                                    </div>
                                </div>
                            </div>
                         

                        </div>
                        @endforeach
                       
                        <!-- End Single Item -->

                        
                    </div>
                </div>
            <!-- </div> --> 
        </div>
     </div> 
    <!-- End Popular Courses

    // Start Fun Factor 
    ============================================= -->
    <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard" style="background-image: url(assets/img/banner/1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-contract"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="128" data-speed="5000"></span>
                            <span class="medium">Best Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-online"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="8970" data-speed="5000"></span>
                            <span class="medium">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-reading"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Fun Factor

    // Start instructors Area
    ============================================= -->
    <section id="instructor" class="instructor-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Experience Instructors</h2>
                        <p>
                           
                        </p>
                    </div>
                </div>
            </div>
            <div class="instructor-items text-center text-light">
                <div class="row">
                    
                    <!-- Single Item -->
                     @foreach ($instructor as $instructors)
                    
                    <div class="col-lg-4 col-md-6 single-item">
                        <div class="instructor-item">
                            <div class="info-box">
                                
                                <img src="{{'/uploads/instructor/'.$instructors->Image}}" style="height:200px;width:200px;" alt="Thumb">  
                                <div class="info-title">
                                    <h4> <a href="" style="color:#1f2937;" class="mt-1" alt="instructor's profile"> {{$instructors->Name}} </a></h4>
                                    
                                    <div class="social">
                                        <ul>
                                            <li class="facebook">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="#"><i class="fab fa-pinterest"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div> 
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--End instructor Area -->




    <!-- Start Testimonials 
    ============================================= -->
    <div id="testimonials" class="testimonials-area carousel-shadow default-padding bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-lg-8 offset-lg-2">
                        <h2>Students Review</h2>
                        <p>
                            Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. 
                        </p>
                    </div>
                </div>
            </div>
            <div class="clients-review-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-5 thumb">
                            <img src="assets/img/team/2.jpg" alt="Thumb">
                        </div>
                        <div class="col-lg-7 info">
                            <p>
                                Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                            </p>
                            <h4>Druna Patia</h4>
                            <span>Biology Student</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-5 thumb">
                            <img src="assets/img/team/3.jpg" alt="Thumb">
                        </div>
                        <div class="col-lg-7 info">
                            <p>
                                Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                            </p>
                            <h4>Astron Brun</h4>
                            <span>Science Student</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-5 thumb">
                            <img src="assets/img/team/4.jpg" alt="Thumb">
                        </div>
                        <div class="col-lg-7 info">
                            <p>
                                Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                            </p>
                            <h4>Paol Druva</h4>
                            <span>Development Student</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <!-- Single Item -->
                <div class="item">
                    <div class="row align-items-center">
                        <div class="col-lg-5 thumb">
                            <img src="assets/img/team/7.jpg" alt="Thumb">
                        </div>
                        <div class="col-lg-7 info">
                            <p>
                                Procuring continued suspicion its ten. Pursuit brother are had fifteen distant has. Early had add equal china quiet visit. Appear an manner as no limits either praise.. 
                            </p>
                            <h4>Druna Patia</h4>
                            <span>Biology Student</span>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
            </div>
        </div>
    </div>
    <!-- End Testimonials -->
    @endsection