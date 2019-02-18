<?php
/**
 * Created by PhpStorm.
 * User: Debashis
 * Date: 14-02-2019
 * Time: 19:30
 */

$page = "pvt_ltd";
require_once "../config.php";
require_once "../header.php";

echo "

<style>

.ui-form-01{max-width:280px;margin:auto;display:block;margin-top:40px;overflow:auto;}
.ui-form-01-wraper{background:#272b37;background-size:100% 100%;padding:10px 15px;text-align:center;color:#fff;box-shadow:0px 0px 18px rgba(0,0,0,.5);}
.ui-form-01-wraper p{font-size:18px;font-weight:100;margin-bottom:20px;font-size:16px;color:#fcc813}
.ui-form-01-wraper p span{margin-bottom:0;display:block;}
.ui-form-01 form{display:block;position:relative;}
.ui-form-01 button:hover{background:#ffffff;color:#4c4c4c;border-bottom:2px solid #4c4c4c;}
.input-icon{margin-bottom:15px;position:relative;overflow:hidden}
.ui-form-01 input{width:100%;height:35px;padding:10px;font-size:13.5px;font-weight:600;color:#222;border-radius:2px;border:1px solid #4c4c4c;background:#fff;overflow:hidden;}
.card-back .ui-form-01-wraper{box-shadow:none !important;}
.card-back .ui-form-01{margin-top:15px;}
.input-icon{margin-bottom:15px;position:relative;overflow:hidden}
.ui-form-01 input{width:100%;height:35px;padding:10px;font-size:13.5px;font-weight:600;color:#222;border-radius:2px;border:1px solid #4c4c4c;background:#fff;overflow:hidden;}
.input-icon i{color:#4c4c4c;position:absolute;top:0;right:0;font-size:20px;bottom:0;padding:6px;transition:all 300ms linear;max-height:34px;}
.input-icon input:focus ~ i{color:#ffffff;font-size:20px;background:#4c4c4c;}
.template-header-01 img{margin:auto;}
.template-header-01 {
    margin-bottom: 40px;
}
.template-header-01-box{border:1px solid #ccc;padding:15px;text-align:center;}
.template-header-01-box h4{background:#fcc813;margin:-15px -15px 15px -15px;padding:15px 0;}
.template-header-01-box input{width:100%;margin-bottom:10px;height:36px;border:1px solid #ccc;padding:0 10px;border-radius:1px;}
.template-header-01-box button{margin:0 auto;padding:8px 23px;}
.template-header-01{background:rgba(212,228,239,1);background:-moz-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);background:-webkit-gradient(left top, right top, color-stop(0%, rgba(212,228,239,1)), color-stop(100%, rgba(134,174,204,1)));background:-webkit-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);background:-o-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);background:-ms-linear-gradient(left, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);background:linear-gradient(to right, rgba(212,228,239,1) 0%, rgba(134,174,204,1) 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d4e4ef', endColorstr='#86aecc', GradientType=1);padding-top:15px;}
.template-header-02-box{padding:15px;border:1px solid transparent;margin-top:30%;text-align:center;box-shadow:0px 0px 11px rgba(0,0,0,.5);}
.marginT20{margin-top:20px;}
.img-responsive{display:block;max-width:100%;height:auto}
</style>";

echo "<section class=\"template-header-01\" id=\"home\" style=\"margin-top: 15px;\">
    <div class=\"container\">
        <div class=\"row\">";
           echo "<div class=\"col-sm-4\">
			    <div class=\"template-header-02-box\" >
                    <h1>Private Limited Company</h1>
                    <p class=\"marginT20\">We help you to register your private limited company within 14 working days while you sitting at home. Call us for inquiry at 8881069069</p>                </div>
               
            </div>
            <div class=\"col-sm-4\" style=\"margin-top: 15px; padding-top: 15px;\">
                <img src=\"https://www.e-startupindia.com/images/596cc267edef31500299880.png\" class=\"img-responsive\">
            </div>
            <div class=\"col-sm-4\">
                                    <div class=\"ui-form-01\">                   
                    <form method=\"post\" name=\"frmHeaderSection\" action=\"\">
                         <div class=\"ui-form-01-wraper\">
                            <p><a>Get Inbox Now<br> Documents Required for Company Incorporation</a></p>
                            <div class=\"input-icon\">
                                <input type=\"hidden\" name=\"position\" value=\"1\">
                                <input type=\"text\" placeholder=\"Name\" name=\"client_name\" maxlength=\"50\">";
                           echo    " <i class=\"mdi mdi-\"></i>
                            </div>
                            <div class=\"input-icon\">
                                <input type=\"email\" placeholder=\"Email Address\" name=\"client_email_address\" maxlength=\"50\">
                                <i class=\"icofont icofont-email\"></i>
                            </div>
                            <div class=\"input-icon\">
                                <input type=\"tel\" placeholder=\"Mobile No\" name=\"client_mobile_number\" maxlength=\"50\">
                                <i class=\"icofont icofont-mobile-phone\"></i>
                            </div>";
                        echo "</div>
                        <button type=\"submit\" id=\"header_contactform\" class=\"btn btn-common\" name=\"HeaderContactForm\" value=\"Header Contact\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
        
        
        <section class=\"material-tabs-section section-padding\">
<div class=\"container\">
<div class=\"row\">

<div class=\"col-md-12 material-title-section wow animated fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">COMPANY REGISTRATION PROCESS</h1>
</div>
</div>
<div class=\"row mt-2 wow animated fadeInUp\" data-wow-delay=\".4s\">
<div class=\"col-md-12\">
<div class=\"Material-tab-default\">

<!--Registration process section -->


<div class=\"col-md-8\">

<p style='text-align: justify;'>The private limited company registration process is completely online, so you don't even need to leave your home to get your entity registered within 14 working days. At Vakilsearch, we are continuously available to help you understand how to register a private limited company. Company Registration in India can be done through VakilSearch in all major cities, including Hyderabad, Mumbai, and New Delhi, Chennai, Kolkata & all other Indian cities.</p>

<p>A detailed explanation of the procedure now follows, along with expected timelines and charges involved.</p>
</div>
<div class=\"col-md-8\">
<a href=\"#\"><i class=\"material-icons mdi mdi-bookmark-outline\"></i>Obtaining DSC and DIN</a>
<p>Only a single director needs to have a Class-2 Digital Signature Certificate (DSC), which is needed to sign electronic documents. To get one, all you need is a self-attested copy of the director's PAN card and address proof (latest utility bill, passport, driver's license of voter's ID). This can be completed in 2 days.</p>
</div>
<div class=\"col-md-8\">
<a href=\"#\"><i class=\"material-icons mdi mdi-bookmark-outline\"></i>Application for Company Name</a>
<p>You need to now ensure that your name has not already been taken. This can be done by running a company name search. If you are disappointed that a preferred name is taken, do remember that the name of your company doesn't have to be your brand name. However, if you're going to register the brand name, also check if it has already been trademarked at http://www.ipindia.gov.in/. If it has been trademarked, you would need a no-objection certificate from its owner to have it approved as your company's name.</p>
<p>Secondly, you need to comply with the MCA guidelines. You can do so by ensuring that the name has a unique component and a descriptive component.</p>
</div>
<div class=\"col-md-8\">
<a href=\"#\"><i class=\"material-icons mdi mdi-bookmark-outline\"></i>Company Registration Form & MoA & AoA Submission</a>
<p>Once you have your name, you need to get the Memorandum & Articles of Association approved. Here are all the other documents you'll need in order:</p>
<p> <ul> <li>Copy of Rental Agreement (along with NOC from owner)/Sale Deed</li> <li>Latest Utility Bill</li> <li>Affidavit from director and shareholders</li> <li>Copy of PAN card, Identity and Address Proof for DIN for 2 directors</li> </ul> </p>
<p>With these ready, you can submit the company registration form INC-32 (also known as Spice).</p>
</div>
<div class=\"col-md-8\">
<a href=\"#\"><i class=\"material-icons mdi mdi-bookmark-outline\"></i>Company Incorporation Certificate</a>
<p>Once your MoA and AoA are approved, you’re almost there. You can now get your company incorporation certificate by submitting all the above-mentioned documents to the RoC. This can take anywhere from 48 hours to even two weeks. On arrival of the company incorporation certificate, your company is registered.</p>
</div>
<div class=\"col-md-8\">
<a href=\"#\"><i class=\"material-icons mdi mdi-bookmark-outline\"></i>Apply for PAN & TAN & Bank Account</a>
<p>The moment your company is incorporated, you need to apply for a PAN & TAN with NSDL. It costs under Rs. 200, but will take up to three weeks to get done.</p>
<p><small><strong>Note:</strong> Always be prepared for a longer wait, particularly if the Registrar of Companies (RoC) has a heavy workload at the time or your proposed company's name is rejected on first attempt.</small></p>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Highlight section -->
<section class=\"Material-about-section section-padding\">
    <div class=\"container\">
    
    <div class=\"row\">
            <!-- Section Title -->
            <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <h1 class=\"section-title\">HIGHLIGHTS</h1>
            </div>
        </div>
    
        <div class=\"row\">
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-pen\"></i>
                    <h2 class=\"subtitle\">Limited Liability</h2>
                    <p>Shareholder enjoys limited liability to the extent of capital invested. Shareholder's personal assets protected in the event of the company's insolvency.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-pen\"></i>
                    <h2 class=\"subtitle\">Separation of Mangement & Shareholders</h2>
                    <p>Management & shareholders can be separated. A shareholder can invest the fund in fruitful business without managing & Management can operate their business without frequent interruption of investors.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-pen\"></i>
                    <h2 class=\"subtitle\">Separate Legal Entity</h2>
                    <p>A company is a Separate legal entity from its Owners and Management in the eyes of law.</p>
                </div>
            </div>
            <!-- Single About -->
           
        </div>
        
        
         <div class=\"row\">
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-pen\"></i>
                    <h2 class=\"subtitle\">Easy Equity Funding</h2>
                    <p>Startups businesses can easily raise funds from investors on an equity basis.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".3s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-pen\"></i>
                    <h2 class=\"subtitle\">Taxation</h2>
                    <p>Every Pvt Ltd Company enjoys for recently announced start-up tax exemption, if meets eligibility criteria.</p>
                </div>
            </div>
            <!-- Single About -->
            <div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".4s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-pen\"></i>
                    <h2 class=\"subtitle\">Perpetual Succession</h2>
                    <p>A business of the Company will not affect if there is any change in the ownership of the company.</p>
                </div>
            </div>
            <!-- Single About -->
           
        </div>
        </section>
        
 <section  class=\"Material-about-section section-padding\">
<div class=\"container\">
<div class=\"row\">
 <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">Our Process</h1>
</div>

</div>

<div class=\"row\">

<div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">

<div class=\"about-single\"><img src=\"/assets/images/ourprocess/1.png\" />
<p>Upload the Required Documents &amp; Information to our web portal</p>
</div>
</div>

<div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\"><img src=\"/assets/images/ourprocess/2.png\" />
<p>Choose Package and Pay online with different payments modes available</p>
</div>
</div>

<div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\"><img src=\"/assets/images/ourprocess/3.png\" />
<p>We will apply for Digital Signature and Director Identification Number of proposed directors</p>
</div>
</div>

<div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\"><img src=\"/assets/images/ourprocess/4.png\" />
<p>Check for Company&rsquo;s Name availability, apply for Name Approval.</p>
</div>
</div>

<div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\"><img src=\"/assets/images/ourprocess/5.png\" />
<p>Prepare MOA, AOA and other necessary incorporation documents.</p>
</div>
</div>

<div class=\"col-md-6 col-lg-12 col-xl-4 wow animated fadeInUp\" data-wow-delay=\".2s\">
<div class=\"about-single\"><img src=\"/assets/images/ourprocess/6.png\" />
<p>File incorporation documents &amp; obtain Certificate of Incorporation, PAN &amp; TAN.</p>
</div>
</div>


</div>

</div>
</div>
</div>
</section>



<section class=\"Material-about-section section-padding\">
    <div class=\"container\">
    
    <div class=\"row\">
            <!-- Section Title -->
            <div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
                <h1 class=\"section-title\">DOCUMENTS REQUIRED</h1>
            </div>
        </div>
    
        <div class=\"row\">
            <!-- Single About -->
            ";
            echo"<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-account-card-details\"></i>
                    <h2 class=\"subtitle\">Identity Proof</h2>
                    <p>Aaadhar Card , Driving License , Election Id , Card Passport</p>
                </div>
            </div>";
            echo "


<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-account\"></i>
                    <h2 class=\"subtitle\">Passport Size Photograph</h2>
                    
                </div>
            </div>


<div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-map-marker\"></i>
                    <h2 class=\"subtitle\">Address Proof of Business</h2>
                    <p>Electricity Bill , Rent Agreement + NOC</p>
                </div>
            </div>";
            
          echo "  
  
  
  
  
  <div class=\"col-md-6 col-lg-3 col-xl-3 wow animated fadeInUp\" data-wow-delay=\".2s\">
                <div class=\"about-single\">
                    <i class=\"material-icons mdi mdi-file-document-box\"></i>
                    <h2 class=\"subtitle\">PAN Card</h2>
                    
                </div>
            </div>
            
            
            
            
           </div> 
           
           </div>
           </section>
           
           
           <section class=\"Material-pricing-table-section section-padding\">
<div class='container'>
<div class=\"row\">
<div class=\"col-md-12 wow animated fadeInLeft\" data-wow-delay=\".2s\">
<h1 class=\"section-title\">Our Pricing</h1>
</div>
</div>
<div class=\"row gg-pricing-table icon-table\">

<div class=\"col-md-4 wow fadeInUp animated\" data-wow-delay=\".3s\">
<div class=\"single-pricing-table text-center clearfix\">

<div class=\"pricing-table-heading\">
<div class=\"pricing-icon\">
<img src=\"/assets/images/bicycle.png\" alt=\"\" class=\"center-block img-fluid\">
</div>
<h2>Basic</h2>
</div>

<div class=\"price\">
<span>₹500</span>
</div>

<div class=\"pricing-item\">
<ul>
<li><p><strong>1</strong> User</p></li>
<li><p><strong>Limited</strong> Projects</p></li>
<li><p><strong>2GB</strong> Storage</p></li>
</ul>
</div>

<div class=\"pricing-button\">
<a href=\"javascript:void(0)\" class=\"btn btn-common\"><i class=\"fa fa-check\"></i> Buy Now<div class=\"ripple-container\"></div></a>
</div>
</div>
</div>

<div class=\"col-md-4 wow fadeInUp animated\" data-wow-delay=\".4s\">
<div class=\"single-pricing-table text-center clearfix\">

<div class=\"pricing-table-heading\">
<div class=\"pricing-icon\">
<img src=\"/assets/images/vespa-1.png\" alt=\"\" class=\"center-block img-fluid\">
</div>
<h2>Standard</h2>
</div>

<div class=\"price\">
<span>₹1000</span>
</div>

<div class=\"pricing-item\">
<ul>
<li><p><strong>2</strong> User</p></li>
<li><p><strong>Unlimited</strong> Projects</p></li>
<li><p><strong>20GB</strong> Storage</p></li>
</ul>
</div>

<div class=\"pricing-button\">
<a href=\"javascript:void(0)\" class=\"btn btn-common\"><i class=\"fa fa-check\"></i> Buy Now<div class=\"ripple-container\"></div></a>
</div>
</div>
</div>

<div class=\"col-md-4 wow fadeInUp animated\" data-wow-delay=\".5s\">
<div class=\"single-pricing-table text-center clearfix\">

<div class=\"pricing-table-heading\">
<div class=\"pricing-icon\">
<img src=\"/assets/images/car.png\" alt=\"\" class=\"center-block img-fluid\">
</div>
<h2>Premium</h2>
</div>

<div class=\"price\">
<span>₹5000</span>
</div>

<div class=\"pricing-item\">
<ul>
<li><p><strong>20</strong> User</p></li>
<li><p><strong>Unlimited</strong> Projects</p></li>
<li><p><strong>200GB</strong> Storage</p></li>
</ul>
</div>

<div class=\"pricing-button\">
<a href=\"javascript:void(0)\" class=\"btn btn-common\"><i class=\"fa fa-check\"></i> Buy Now<div class=\"ripple-container\"></div></a>
</div>
</div>
</div>
</div>
</div>
</section>


";















require_once "../faq_pages/faq_handler.php";

require_once "../page_elements/compare_design.php";

require_once "../page_elements/contact_form_design.php";

require_once "../footer.php";