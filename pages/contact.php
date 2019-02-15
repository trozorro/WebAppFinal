<?php
/**
 * Created by PhpStorm.
 * User: Debashis
 * Date: 14-02-2019
 * Time: 19:30
 */

$page = "web";
require_once "../config.php";
require_once "../header.php";

echo "<div id=\"main-slide3\" class=\"carousel slide\" data-ride=\"carousel\">
   
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100\" src=\"/assets/images/slider/bg.png\" alt=\"First slide\">
            <div class=\"carousel-caption d-md-block\">
                <h1 class=\"animated wow fadeInDown hero-heading\" data-wow-delay=\".4s\">Contact Us<br><br><br></h1>
               <!--Btns here-->
                </div>
        </div>
        
        
        <section class=\"material-tabs-section section-padding\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 material-title-section wow animated fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">Get In Touch</h1>
</div>
</div>
<div class=\"row mt-2 wow animated fadeInUp\" data-wow-delay=\".4s\">
<div class=\"col-md-12\">
<div class=\"Material-tab-default\">

<!--Registration process section -->


<div class=\"col-md-8\">
<p>Have a little something, something you Want to discuss your project with us? Well, give us a ring, send us an email, or fill out that nifty form below.</p>



</div>
</div>
</div>
</div>
</section>



<section class=\"Material-about-section section-padding\">
    <div class=\"container\">
    
    
    
        <div class=\"row\">
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <img src='/assets/images/contact7.png'/>
                    <h2 class=\"subtitle\">Ahmedabad, India</h2>
                    <p style='color: gray'> 418,Anandmangal-3, Near Ambawadi</p>
                   </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"about-single\">
                      <img src='/assets/images/contact8.png'/>
                    <h2 class=\"subtitle\">Call me f</h2>
                      <p style='color: gray'>Online support</p>
                     </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"about-single\">
                      <img src='/assets/images/contact9.png'/>
                    <h2 class=\"subtitle\">HR: 9737-882244</h2>
                      <p style='color: gray'>Mon-Fri 10am-6pm</p>
                    </div>
            </div>
            <!-- Single About -->
           
        </div>
        
        
         
            <!-- Single About -->
            
            <!-- Single About -->
           
        </div>
        </section>";
        
 

 






require_once "../page_elements/contact_form_design.php";

require_once "../footer.php";