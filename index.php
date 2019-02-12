<?php


require_once "header.php";

echo "

<div id=\"main-slide\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        <li data-target=\"#main-slide\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#main-slide\" data-slide-to=\"1\"></li>
        <li data-target=\"#main-slide\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg1.jpg\" alt=\"First slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInDown hero-heading\" data-wow-delay=\".4s\">Crafted with Bootstrap 4</h1>
                <h5 class=\"animated fadeInUp wow hero-sub-heading\" data-wow-delay=\".6s\">Material Design Meets With The Power of Bootstrap 4</h5>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-common\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-lightbulb-outline\"></i> Explore<div class=\"ripple-container\"></div></a>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg2.jpg\" alt=\"Second slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInLeft hero-heading\" data-wow-delay=\".7s\">Refreshing Material Design</h1>
                <h5 class=\"animated wow fadeInRight hero-sub-heading\" data-wow-delay=\".9s\">Extensively Customizable Tons of UI Elements</h5>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-common\" data-wow-delay=\".6s\"><i class=\"material-icons mdi mdi-cart-outline\"></i> Purchase</a>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-border\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-lightbulb-outline\"></i> Learn More <div class=\"ripple-container\"></div></a>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg3.jpg\" alt=\"Third slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInDown hero-heading\" data-wow-delay=\".6s\">UI Kit + Multi-purpose Template</h1>
                <h5 class=\"animated fadeInUp wow hero-sub-heading\" data-wow-delay=\".8s\">Ready to Use for Business, Agency, Startup, Portfolio Sites and More...</h5>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-common\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-arrow-collapse-down\"></i> Download Now</a>
            </div>
        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#main-slide\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control\" aria-hidden=\"true\"><i class=\"mdi mdi-arrow-left\" data-ripple-color=\"#F0F0F0\"></i></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#main-slide\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control\" aria-hidden=\"true\"><i class=\"mdi mdi-arrow-right\" data-ripple-color=\"#F0F0F0\"></i></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>







<!-- About Section -->
<section class=\"Material-about-section section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-layers\"></i>
                    <h2 class=\"subtitle\">Bootstrap 4</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-cards-playing-outline\"></i>
                    <h2 class=\"subtitle\">Material Design</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-alarm-check\"></i>
                    <h2 class=\"subtitle\">Fast and Clean</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".5s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-responsive\"></i>
                    <h2 class=\"subtitle\">Fully Responsive</h2>
                    <p>Excepteur sint occaecat cupidatat non proidt, sunt in culpa qui.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Welcome Section Start -->
<section class=\"welcome-section section-padding section-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-7 col-xs-12\">
                <div class=\"Material-tab\">
                    <!-- Nav tabs -->
                    <ul class=\"nav nav-tabs justify-content-center\" id=\"myTab\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#business\" role=\"tab\"><i class=\"mdi mdi-account-multiple-outline\"></i></br>Business</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#startup\" role=\"tab\"><i class=\"mdi mdi-flash-outline\"></i></br>Startup</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#agency\" role=\"tab\"><i class=\"mdi mdi-all-inclusive\"></i></br>Agency</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#saas\" role=\"tab\"><i class=\"mdi mdi-cloud-outline\"></i></br>SaaS</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"business\" role=\"tabpanel\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio mollitia, expedita, omnis? Quasi.</p>
                        </div>
                        <div class=\"tab-pane fade\" id=\"startup\" role=\"tabpanel\" >
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio mollitia, expedita, omnis? Quasi.</p>
                        </div>
                        <div  class=\"tab-pane fade\" id=\"agency\" role=\"tabpanel\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio mollitia, expedita, omnis? Quasi.</p>
                        </div>
                        <div class=\"tab-pane fade\" id=\"saas\" role=\"tabpanel\">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam nesciunt dolores quibusdam, officia sed mollitia, illo, quis, vel veniam officiis qui repellendus. Perferendis et, veritatis enim voluptatem libero consequuntur eveniet alias nesciunt fugit doloremque tempora id Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, aut ut totam quam inventore suscipit ullam nostrum quisquam corrupti nesciunt voluptas necessitatibus, ab porro cupiditate optio mollitia, expedita, omnis? Quasi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-12 col-lg-5 col-xs-12 welcome-column\">
                <div class=\"video-gallery\">
                    <img class=\"img-fluid\" src=\"assets/images/about/video.jpg\" alt=\"\">
                    <div class=\"overlay-gallery\">
                        <div class=\"icon-holder\">
                            <div class=\"icon\">
                                <a href=\"https://www.youtube.com/watch?v=r44RKWyfcFw\" class=\"video-popup wow fadeInUp\" data-wow-duration=\"1000ms\" data-wow-delay=\"0.3s\"><i class=\"mdi mdi-play-circle-outline\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Welcome Section End -->

<!-- Services Section -->
<section class=\"Material-service-section section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Section Titile -->
            <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <h1 class=\"section-title\">Why Choose</h1>
            </div>
        </div>
        <!-- Services Widget Section -->
        <div class=\"row\">
            <!-- Service Widgets -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <i class=\"material-icons pulse-shrink mdi mdi-arrange-send-backward\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"subtitle\"><a href=\"#\">Refreshing Design</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <i class=\"material-icons pulse-shrink mdi mdi-code-tags-check\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"subtitle\"><a href=\"#\">Solid Bootstrap 4</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp\" data-wow-delay=\".5s\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <i class=\"material-icons pulse-shrink mdi mdi-grid\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"subtitle\"><a href=\"#\">100+ Components</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp\" data-wow-delay=\".6s\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <i class=\"material-icons pulse-shrink mdi mdi-update\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"subtitle\"><a href=\"#\">Regular Updates</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp\" data-wow-delay=\".7s\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <i class=\"material-icons pulse-shrink mdi mdi-speedometer\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"subtitle\"><a href=\"#\">Speed Optimized</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
            <!-- Service Widgets -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 single-service-widget wow animated fadeInUp\" data-wow-delay=\".8s\">
                <div class=\"media\">
                    <div class=\"media-left\">
                        <i class=\"material-icons pulse-shrink mdi mdi-shape-plus\"></i>
                    </div>
                    <div class=\"media-body\">
                        <h2 class=\"subtitle\"><a href=\"#\">Fully Customizable</a></h2>
                        <p>Excepteur sint occaecat cupi datat non proidt, sunt in culpa qui offi cia deserunt</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->


<!-- work-counter area -->
<section class=\"work-counter-section section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Counter -->
            <div class=\"col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"counter\">
                    <div class=\"icon\"><i class=\"material-icons mdi mdi-check-all\"></i></div>
                    <div class=\"timer\">347</div>
                    <p>Projects Done</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class=\"col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"counter\">
                    <div class=\"icon\"><i class=\"material-icons mdi mdi-clock\"></i></div>
                    <div class=\"timer\">8896</div>
                    <p>Working Hours</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class=\"col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"counter\">
                    <div class=\"icon\"><i class=\"material-icons mdi mdi-account-multiple-outline\"></i></div>
                    <div class=\"timer\">35</div>
                    <p>Team Members</p>
                </div>
            </div>
            <!-- Single Counter -->
            <div class=\"col-md-3 col-sm-6 work-counter-widget text-center wow animated fadeInUp\" data-wow-delay=\".5s\">
                <div class=\"counter\">
                    <div class=\"icon\"><i class=\"material-icons mdi mdi-sticker-emoji\"></i></div>
                    <div class=\"timer\">233</div>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-counter area end -->





<section class=\"team section-padding section-dark\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <h1 class=\"section-title\">Meet The Team</h1>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"single-team-widget\">
                    <img src=\"assets/images/team/team1.jpg\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Rob Percy</h2>
                        <p>Co-Founder</p>
                        <div class=\"social-profiles\">
                            <a href=\"#\"><i class=\"mdi mdi-twitter\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-facebook\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-linkedin\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"single-team-widget\">
                    <img src=\"assets/images/team/team2.jpg\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Jennifer L.</h2>
                        <p>Graphic Designer</p>
                        <div class=\"social-profiles\">
                            <a href=\"#\"><i class=\"mdi mdi-twitter\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-facebook\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-linkedin\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".5s\">
                <div class=\"single-team-widget\">
                    <img src=\"assets/images/team/team3.jpg\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Tom Hanks.</h2>
                        <p>SEO Speacialist</p>
                        <div class=\"social-profiles\">
                            <a href=\"#\"><i class=\"mdi mdi-twitter\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-facebook\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-linkedin\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".6s\">
                <div class=\"single-team-widget\">
                    <img src=\"assets/images/team/team4.jpg\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Emma Watson</h2>
                        <p>Head Of Ideas</p>
                        <div class=\"social-profiles\">
                            <a href=\"#\"><i class=\"mdi mdi-twitter\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-facebook\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-dribbble\"></i></a>
                            <a href=\"#\"><i class=\"mdi mdi-linkedin\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Call to action Section End -->

<!-- Start Testimonial Section  -->
<div class=\"testimonial section-padding\">
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"testimonials-carousel owl-carousel\">
                <div class=\"item\">
                    <div class=\"testimonial-item\">
                        <div class=\"datils\">
                            <h5>Adam Schwartz</h5>
                            <span>Software Articulate, Google</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.</p>
                        </div>
                        <div class=\"img\">
                            <a href=\"#\"><img class=\"img-fluid\" src=\"assets/images/testimonial/author1.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"testimonial-item\">
                        <div class=\"datils\">
                            <h5>Clark Brown</h5>
                            <span>Brand Managerr</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.</p>
                        </div>
                        <div class=\"img\">
                            <a href=\"#\"><img class=\"img-fluid\" src=\"assets/images/testimonial/author2.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
                <div class=\"item\">
                    <div class=\"testimonial-item\">
                        <div class=\"datils\">
                            <h5>Ana Blunt</h5>
                            <span>Creative Director</span>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's <br> standard dummy text ever since the 1500s Lorem Ipsum.</p>
                        </div>
                        <div class=\"img\">
                            <a href=\"#\"><img class=\"img-fluid\" src=\"assets/images/testimonial/author3.jpg\" alt=\"\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Testimonial Section  -->

<!-- Start Client Section -->
<div class=\"client section-padding section-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"client-logo\" class=\"owl-carousel\">
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client1.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client2.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client3.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client4.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client1.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client2.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client3.png\" alt=\"\" />
                    </a>
                </div>
                <div class=\"client-logo item\">
                    <a href=\"#\">
                        <img class=\"img-fluid\" src=\"assets/images/clients/client4.png\" alt=\"\" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Client Section -->

<!-- Our BLog Section -->
<section class=\"Material-blog-section section-padding\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Section Titile -->
            <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <h1 class=\"section-title\">From The Blog</h1>
            </div>
        </div>

        <div class=\"row\">
            <!-- Single Article -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <article class=\"single-blog-post\">
                    <!-- Featured Image -->
                    <div class=\"featured-image\">
                        <a href=\"#\">
                            <img src=\"assets/images/blog/featured1.jpg\" alt=\"\">
                        </a>
                    </div>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <!-- Title -->
                        <a href=\"blog-single.html\"><h2 class=\"subtitle\">12+ Amazing Growth Hacking Tips and Tricks</h2></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis assumenda ipsum maiores dolorum similique obcaecati perspiciatis.</p>
                    </div>
                    <div class=\"meta-tags\">
                        <span class=\"comments\"><a href=\"#\"><i class=\"mdi mdi-comment-outline\"></i> 24 Comments</a></span>
                        <!-- Read More -->
                        <a class=\"btn btn-round btn-fab\" href=\"blog-single.html\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                    </div>
                </article>
            </div>
            <!-- Single Article -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <article class=\"single-blog-post\">
                    <!-- Featured Image -->
                    <div class=\"featured-image\">
                        <a href=\"#\">
                            <img src=\"assets/images/blog/featured2.jpg\" alt=\"\">
                        </a>
                    </div>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <!-- Title -->
                        <a href=\"blog-single.html\"><h2 class=\"subtitle\">10 Tips to Validate Your Next Startup Idea</h2></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis assumenda ipsum maiores dolorum similique obcaecati perspiciatis.</p>
                    </div>
                    <div class=\"meta-tags\">
                        <span class=\"comments\"><a href=\"#\"><i class=\"mdi mdi-comment-outline\"></i> 24 Comments</a></span>
                        <!-- Read More -->
                        <a class=\"btn btn-round btn-fab\" href=\"blog-single.html\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                    </div>
                </article>
            </div>
            <!-- Single Article -->
            <div class=\"col-md-6 col-lg-4 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".5s\">
                <article class=\"single-blog-post\">
                    <!-- Featured Image -->
                    <div class=\"featured-image\">
                        <a href=\"#\">
                            <img src=\"assets/images/blog/featured3.jpg\" alt=\"\">
                        </a>
                    </div>
                    <!-- Post Meta -->
                    <div class=\"post-meta\">
                        <!-- Title -->
                        <a href=\"blog-single.html\"><h2 class=\"subtitle\">How to Create Successful Website for Your Agency</h2></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio perferendis assumenda ipsum maiores dolorum similique obcaecati perspiciatis.</p>
                    </div>
                    <div class=\"meta-tags\">
                        <span class=\"comments\"><a href=\"#\"><i class=\"mdi mdi-comment-outline\"></i> 24 Comments</a></span>
                        <!-- Read More -->
                        <a class=\"btn btn-round btn-fab\" href=\"blog-single.html\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                    </div>
                </article>
            </div>
        </div>
        <div class=\"row mt-5 wow animated fadeInUp\" data-wow-delay=\".6s\">
            <!-- Button -->
            <div class=\"col-md-12 text-center\">
                <a href=\"blog.html\" class=\"animated4 btn btn-common\" data-ripple-color=\"#000\"><i class=\"material-icons mdi mdi-library-books\"></i> Explore More on Blog<div class=\"ripple-container\"></div></a>
            </div>
        </div>
    </div>
</section>
<!-- Our BLog Section End -->

<!-- Contact Us Section -->
<section class=\"Material-contact-section section-padding section-dark\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Section Titile -->
            <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <h1 class=\"section-title\">Love to Hear From You</h1>
            </div>
        </div>
        <div class=\"row\">
            <!-- Section Titile -->
            <div class=\"col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content.</p>

                <div class=\"find-widget\">
                    <a href=\"#\"><i class=\"material-icons mdi mdi-map-marker\"></i>4435 Berkshire Circle Knoxville</a>
                </div>
                <div class=\"find-widget\">
                    <a href=\"#\"><i class=\"material-icons mdi mdi-phone\"></i> + 879-890-9767</a>
                </div>
                <div class=\"find-widget\">
                    <a href=\"#\"><i class=\"material-icons mdi mdi-email-open mr-3\"></i> support@Material.com</a>
                </div>
                <div class=\"find-widget\">
                    <a href=\"#\"><i class=\"material-icons mdi mdi-clock\"></i> Mon to Sat: 09:30 AM - 10.30 PM</a>
                </div>
            </div>
            <!-- contact form -->
            <div class=\"col-md-6 wow animated fadeInRight\" data-wow-delay=\".2s\">
                <form class=\"shake\" role=\"form\" method=\"post\" id=\"contactForm\" name=\"contact-form\" data-toggle=\"validator\">
                    <!-- Name -->
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\" for=\"name\">Name</label>
                        <input class=\"form-control\" id=\"name\" type=\"text\" name=\"name\" required data-error=\"Please enter your name\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <!-- email -->
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\" for=\"email\">Email</label>
                        <input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" required data-error=\"Please enter your Email\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <!-- Subject -->
                    <div class=\"form-group label-floating\">
                        <label class=\"control-label\">Subject</label>
                        <input class=\"form-control\" id=\"msg_subject\" type=\"text\" name=\"subject\" required data-error=\"Please enter your message subject\">
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <!-- Message -->
                    <div class=\"form-group label-floating\">
                        <label for=\"message\" class=\"control-label\">Message</label>
                        <textarea class=\"form-control\" rows=\"3\" id=\"message\" name=\"message\" required data-error=\"Write your message\"></textarea>
                        <div class=\"help-block with-errors\"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class=\"form-submit mt-5\">
                        <button class=\"btn btn-common\" type=\"submit\" id=\"form-submit\"><i class=\"material-icons mdi mdi-message-outline\"></i> Send Message</button>
                        <div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Section End -->
";


require_once "footer.php";

?>