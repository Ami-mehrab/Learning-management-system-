<!-- Start Footer 
    ============================================= -->
<footer class="bg-dark default-padding-top text-light">
    <div class="container">
        <div class="f-items">
            <div class="row">
                <div class="col-lg-4 item">
                    <div class="f-item">
                        <img src="" alt="Logo">
                        <p>
                            Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing because sitting replied six. Had arose guest visit going off child she new.
                        </p>
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                           
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4>Links</h4>
                        <ul>

                            <li>
                                <a href="#">Gallery</a>
                            </li>

                            <li>
                                <a href="#">Instructors</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 item">
                    <div class="f-item link">
                        <h4>Support</h4>
                        <ul>
                            <li>
                                <a href="#">Documentation</a>
                            </li>
                            <li>
                                <a href="#">Forums</a>
                            </li>

                            <li>
                                <a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 item">

                    <div class="f-item recent-post">
                        <h4>Popular Courses</h4>
                        @foreach($course as $courses)
                        <ul>
                            <li>
                                <div class="thumb">

                                    <a href="#">
                                        <img src="{{'/uploads/course/'.$courses->image}}" alt="thumb">
                                    </a>
                                </div>
                                <!-- <div class="info">
                                    <a href="#"></a>
                                    <div class="meta-title">
                                        <span class="post-date"></span> - By <a href="#"></a>
                                    </div>
                                </div> -->
                            </li>
                            <li>


                            </li>
                        </ul>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <!-- <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2024. All Rights Reserved by <a href="#">validthemes</a></p>
                    </div>
                    <div class="col-lg-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->