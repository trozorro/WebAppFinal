<?php
/**
 * Created by PhpStorm.
 * User: SatyaJit
 * Date: 14-02-2019
 * Time: 21:35
 */

echo "<section class=\"Material-contact-section section-padding section-dark\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">Love to Hear From You</h1>
</div>
</div>
<div class=\"row\">

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

<div class=\"col-md-6 wow animated fadeInRight\" data-wow-delay=\".2s\">
<form class=\"shake\" role=\"form\" method=\"post\" id=\"contactForm\" name=\"contact-form\" data-toggle=\"validator\">

<div class=\"form-group label-floating\">
 <label class=\"control-label\" for=\"name\">Name</label>
<input class=\"form-control\" id=\"name\" type=\"text\" name=\"name\" required data-error=\"Please enter your name\">
<div class=\"help-block with-errors\"></div>
</div>

<div class=\"form-group label-floating\">
<label class=\"control-label\" for=\"email\">Email</label>
<input class=\"form-control\" id=\"email\" type=\"email\" name=\"email\" required data-error=\"Please enter your Email\">
<div class=\"help-block with-errors\"></div>
</div>

<div class=\"form-group label-floating\">
<label class=\"control-label\">Subject</label>
<input class=\"form-control\" id=\"msg_subject\" type=\"text\" name=\"subject\" required data-error=\"Please enter your message subject\">
<div class=\"help-block with-errors\"></div>
</div>

<div class=\"form-group label-floating\">
<label for=\"message\" class=\"control-label\">Message</label>
<textarea class=\"form-control\" rows=\"3\" id=\"message\" name=\"message\" required data-error=\"Write your message\"></textarea>
<div class=\"help-block with-errors\"></div>
</div>

<div class=\"form-submit mt-5\">
<button class=\"btn btn-common\" type=\"submit\" id=\"form-submit\"><i class=\"material-icons mdi mdi-message-outline\"></i> Send Message</button>
<div id=\"msgSubmit\" class=\"h3 text-center hidden\"></div>
<div class=\"clearfix\"></div>
</div>
</form>
</div>
</div>
</div>
</section>";


?>