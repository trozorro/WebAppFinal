<?php

require_once "config.php";
require_once "header.php";

echo "

<div id=\"main-slide\" class=\"carousel slide\" data-ride=\"carousel\">
   
    <table style\" width:100%; \" border=\"10 px\" cellspacing=\"10 px\">
    <tr class=\"carousel-indicators\">
    <td  class=\"slider\" data-target=\"#main-slide\" data-slide-to=\"0\"  style=\"width:25%;height:70px; margin:0 5px 0 0; border-radius:5px;  padding:5px 20px 10px 20px ; \" ><span style=\" font-size:20px; \">Start Your Business</span><br>Lowest Price in India


</td>
    <td  class=\"slider\" data-target=\"#main-slide\" data-slide-to=\"1\"  style=\"width:25%;height:70px;   margin:0 5px 0 0;  border-radius:5px; padding:5px 20px 10px 20px;  \" ><span style=\" font-size:20px; \"  >Register Your Brand</span><br>Guard against infringement


</td>
    <td  class=\"slider\"data-target=\"#main-slide\" data-slide-to=\"2\" style=\"width:25%;height:70px;   margin:0 5px 0 0;  border-radius:5px; padding:5px 20px 10px 20px; \" ><span style=\" font-size:20px; \" >Business Plan Pitch</span><br>Impress your investors


</td>
   
   <td  class=\"slider\"data-target=\"#main-slide\" data-slide-to=\"3\" style=\"width:25%;height:70px;   margin:0 5px 0 0;  border-radius:5px; padding:5px 20px 10px 20px; \" ><span style=\" font-size:20px; \" >Startup Solutions</span><br>Impress your investors


</td>
   
    </tr>
    
    
    
     <tr class=\"carousel-indicators\">
    <td  padding = '50px' data-target=\"#main-slide\" data-slide-to=\"0\"  style=\"width:30%;height:5px; background-color:red; margin:0 5px 0 0; border-radius:5px; \"></td>
    <td style=\"width:30%;height:5x;  background-color:orange;  margin:0 5px 0 0;  border-radius:5px;  \"></td>
    <td   style=\"width:30%;height:5px;   background-color:blue; margin:0 5px 0 0;  border-radius:5px;  \"></td>
    
    <td   style=\"width:30%;height:5px;   background-color:green; margin:0 5px 0 0;  border-radius:5px;  \"></td>
   
    </tr>
    
    
    
    
    
    
    
    </table>
    
    
    
    
    
    
    
    
    
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg1.jpg\" alt=\"First slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInDown hero-heading\" data-wow-delay=\".4s\">Company Registration</h1>
                <h5 class=\"animated fadeInUp wow hero-sub-heading\" data-wow-delay=\".6s\">Start your entrepreneurial journey with us.</h5>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-common\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-lightbulb-outline\"></i> Explore<div class=\"ripple-container\"></div></a>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg2.jpg\" alt=\"Second slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInLeft hero-heading\" data-wow-delay=\".7s\">Trademark Registration</h1>
                <h5 class=\"animated wow fadeInRight hero-sub-heading\" data-wow-delay=\".9s\">Gain exclusive rights to protect your brand from infringement</h5>
                
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-border\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-lightbulb-outline\"></i>Explore<div class=\"ripple-container\"></div></a>
            </div>
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg3.jpg\" alt=\"Third slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInDown hero-heading\" data-wow-delay=\".6s\">Business Plan</h1>
                <h5 class=\"animated fadeInUp wow hero-sub-heading\" data-wow-delay=\".8s\">Get the strategic business plan 
crafted by experts</h5>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-common\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-lightbulb-outline\"></i>Explore</a>
            </div>
        </div>



<div class=\"carousel-item\">
            <img class=\"d-block w-100\" src=\"assets/images/slider/slider-bg3.jpg\" alt=\"Third slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInDown hero-heading\" data-wow-delay=\".6s\">Business Plan</h1>
                <h5 class=\"animated fadeInUp wow hero-sub-heading\" data-wow-delay=\".8s\">Get the strategic business plan 
crafted by experts</h5>
                <a href=\"javascript:void(0)\" class=\"animated fadeInUp wow btn btn-common\" data-wow-delay=\".8s\"><i class=\"material-icons mdi mdi-lightbulb-outline\"></i>Explore</a>
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







<!-- Our Services Section -->";

require_once "home_elements/services_cards.php";

echo "<!-- Services Section End -->

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
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#startup\" role=\"tab\"><i class=\"mdi mdi-web\"></i></br>Web</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#agency\" role=\"tab\"><i class=\"mdi mdi-android\"></i></br>Android</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-toggle=\"tab\" href=\"#saas\" role=\"tab\"><i class=\"mdi mdi-cloud-outline\"></i></br>Hosting</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class=\"tab-content\">
                        <div class=\"tab-pane fade show active\" id=\"business\" role=\"tabpanel\">
                            <p>Thinking of starting a business?Consult with us and get the best free legal advice.</p>
                            <p>Get it done easily online with no hidden costs.</p>
                            <p>Also avail new service at best price.Expert legal advice on all the procedures guaranteed.</p>
                            <p>Showcase the potential of your business with trozorro strategic business plan.</p>
                            <p>Tie-up with experienced professionals to build   
   your roadmap to sucess.</p>
                        </div>
                        <div class=\"tab-pane fade\" id=\"startup\" role=\"tabpanel\" >
                            <p>Broaden your visibility on online platform with professional websites.</p>
                            <p>Fully functional and responsive websites which is suitable for all types of businesses.</p>
                            <p>We plan and design our web development packages as per the requirements of the clients which is ultimately beneficial for our clients.</p>
                            <p>We integrate the most essential features within the website that takes a responsible part in achieving the targeted objectives of the enterprise.</p>
                        </div>
                        <div  class=\"tab-pane fade\" id=\"agency\" role=\"tabpanel\">
                            <p>Mobile App Development Scales Up the Current Business Strategy Effectively!</p>
                            <p>Latest updated application at an affordable price but can also focus on your core business.</p>
                            <p>A smartphone app is an excellent way to perform almost all of your business functions. </p>
                            <p>All work can be done through smartphones and are facilitated with such kinds of applications using which, one can save a lot of time.</p>
                        </div>
                        <div class=\"tab-pane fade\" id=\"saas\" role=\"tabpanel\">
                            <p>Launching an attractive and scalable website quickly and affordably is important for business purpose.</p>
                            <p>cPanel-Hosting account management has never been easier with cPanel® – the industry’s leading web hosting control panel.</p>
                            <p>Premium servers-Exclusive hosting platform built to provide maximum performance.</p>
                            <p>Multi-site hosting
Host and manage multiple websites under single cPanel® account.</p>

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

<!-- Why choose us section -->";

require_once "home_elements/why_choose.php";

echo "<!-- why choose Section End -->


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
                <h1 class=\"section-title\">Our Best Offers</h1>
            </div>
        </div>
        <div class=\"row\">

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"single-team-widget\">
                    <img src=\"#\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Start-up Business</h2>
                        <p>Avail the best offers.</p>
                        
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"single-team-widget\">
                    <img src=\"#\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Android Development</h2>
                        <p>Apps at a suitable price.</p>
                      
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".5s\">
                <div class=\"single-team-widget\">
                    <img src=\"#\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Web Development</h2>
                        <p>Best pricing websites</p>
                       
                    </div>
                </div>
            </div>

            <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".6s\">
                <div class=\"single-team-widget\">
                    <img src=\"#\" class=\"img-fluid\" alt=\"\">
                    <div class=\"team-member-info\">
                        <div class=\"know-more\">
                            <a class=\"btn btn-round btn-fab btn-xs\" href=\"javascript:void(0)\"><i class=\"material-icons mdi mdi-arrow-right\"></i><div class=\"ripple-container\"></div></a>
                        </div>
                        <h2 class=\"subtitle\">Web Hosting</h2>
                        <p>Go online at cheaper rate.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Start Testimonial Section  -->";

require_once "home_elements/reviews_index.php";

echo "<!-- End Testimonial Section  -->

<!-- Start Client Section -->";

require_once "home_elements/clients.php";

echo "<!-- End Client Section -->



<!-- Contact Us Section End -->
";


require_once "footer.php";

?>