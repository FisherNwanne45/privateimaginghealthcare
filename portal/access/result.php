<?php session_start(); 

require_once 'config.php';
include_once ('session.php');

        $result = $conn->query("SELECT * FROM site");
        if(!$result->num_rows > 0){ echo '<h2 style="text-align:center;">No Data Found</h2>'; }
        while($row = $result->fetch_assoc())
        {
      ?>
<!DOCTYPE html>
<!-- saved from url=(0026)../ -->
<html class="js" lang="en"><!--
<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
 
 
<link rel="stylesheet" media="all" href="../index_files/application-eff437341fbd4c673685a296bd2df1d8.css">
<link rel="stylesheet" media="all" href="../index_files/style.css">
<title>Application Result | <?php echo $row['name']; ?> | An Online Lender, Giving You the Flexibility to Move Forward</title>
 
<link href="../" rel="canonical">

 

<meta content="<?php echo $row['name']; ?> offers fast and trustworthy online loans to help you move forward financially. Check your eligibility for up to $1,000,000 without affecting your credit score." name="description">
<meta content="width=device-width, initial-scale=1" name="viewport">
 
 
<link rel="shortcut icon" type="image/x-icon" href="../index_files/favicon.png">
 
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../index_files/favicon.png">
<meta name="theme-color" content="#ffffff">


<script src="../index_files/19422970450.js.download"></script>
 


 
<body class="c-pages a-show l-home">

       

<header class="guest_header_2020">
<nav class="nc_navbar">
<div class="navbar__container">
<div class="navbar__brand">
<button aria-controls="offcanvas-menu" aria-haspopup="true" aria-label="Offcanvas Navigation" class="navbar__burger">
<div></div>
<div></div>
<div></div>
</button>
<a href="../"><img alt="<?php echo $row['name']; ?>" class="brand-logo" src="../index_files/logo.png">
</a></div>
<div class="navbar-navs">
<ul class="navbar__nav nav-show-mobile">
<li class="nav-item">
<a role="button" class="button button--primary-outline-signin" href="../apply.php">Apply Now</a>
</li>
</ul>
<ul class="navbar__nav">
    

<li class="nav-item">
<a class="dropdown-menu-item nav-link" href="../about-us.php">About Us</a></li>
<li class="nav-item">
<a class="dropdown-menu-item nav-link" href="../how-it-works.php">How It Works</a></li>
     <li class="nav-item">
<a class="dropdown-menu-item nav-link" href="../faq.php">FAQ</a></li>
 <li class="nav-item">
<a class="dropdown-menu-item nav-link" href="../contact-us.php">Contact Us</a>
 </li>
    
 
<li class="nav-item">
<a aria-expanded="false" aria-haspopup="true" class="nav-link nav-link--dropdown nav-link--dropdown-arrow" href="#">More</a>
<div class="nav-item__dropdown-menu mainmenu">
<a class="dropdown-menu-item nav-link" href="../personal-loans.php">Personal Loans</a>
<a class="dropdown-menu-item nav-link" href="../line-of-credit.php">Lines of Credit</a>
 
</div>
</li>
<li class="nav-item">
<a role="button" class="button button--primary" href="../check.php">Check Your Application</a>
</li>
<li class="nav-item nav-item--dropdown">
<a aria-expanded="false" aria-haspopup="true" class="button button--primary-outline " href="../apply.php">Apply Now</a>
<div class="signin-bubble nav-item__dropdown-menu">
<div class="speech-bubble">
<form class="simple_form login-form panel-body" id="signin_dropdown" novalidate="novalidate" action="../resources" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="B+BhERTogWufACGAIs7T+J0dujRKxIuJihz+Y0ZeZGN9XQNfdZD63/fkAyOL5KgRawKVkLmebIhy1WCeiOP6hg=="><input type="hidden" name="client_has_javascript_enabled" id="client_has_javascript_enabled" value="true">
<div class="redesign">
<div class="row email-field">
<div class="form-group email optional signin_user_email floating-label"><input class="string email optional form-control floating-label__input" required="required" type="email" value="" name="signin_user[email]" id="signin_user_email" data-hj-masked="" aria-required="true">
<label class="email optional floating-label__label navbar-signin__label" for="signin_user_email">Email Address</label>
</div></div>
<div class="row password-field js-toggle-mask toggle-mask toggle-mask">
<div class="form-group password optional signin_user_password floating-label"><input class="password optional form-control floating-label__input js-toggle-mask-input toggle-mask__input" autocomplete="off" type="password" original_type="text" required="required" name="signin_user[password]" id="signin_user_password" aria-required="true">
<label class="password optional floating-label__label navbar-signin__label" for="signin_user_password">Password</label>
</div></div>
<div class="row">
<div class="col-sm-12">
  
</div>
</div>
<div class="text-center navbar-signin__submit">
<input type="submit" name="commit" value="Sign In" class="btn-continue navbar-signin__submit-btn">
</div>
<br>
<div class="text-center">
<a class="navbar__forgot-password" href="../password_resets/new">Forgot password?</a>
</div>
</div>
</form>
</div>
</div>
</li>
</ul>
</div>
</div>
</nav>
<div class="offcanvas" id="offcanvas-menu">
<div class="offcanvas__top">
<div class="offcanvas__header">
<div class="header-dismiss">
<img alt="" class="dismiss-icon" src="../index_files/nav_mobileClose.svg">
</div>
<a href="../"><img alt="<?php echo $row['name']; ?>" class="offcanvas-logo" src="../index_files/logo-white.png">
</a></div>
<ul class="offcanvas__nav">
<li class="nav-item">
<a class="nav-link" href="../personal-loans.php">Personal Loans</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../line-of-credit.php">Lines of Credit</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../faq.php">FAQ</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about-us.php">About Us</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../how-it-works.php">How It Works</a>
</li>
 
<li class="nav-item">
<a class="nav-link" href="../contact-us.php">Contact Us</a>
</li>
 
</ul>
</div>
<div class="offcanvas__bottom">
<div class="offcanvas__actions">
<div class="actions-phone">
<svg height="24" style=" fill:#000000;" viewBox="0 0 172 172" width="24" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
<g fill-rule="nonzero" fill="none" font-family="none" font-size="none" font-weight="none" stroke-dasharray="" stroke-dashoffset="0" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-width="1" stroke="none" style="mix-blend-mode: normal" text-anchor="none">
<path d="M0,172v-172h172v172z" fill="none"></path>
<g fill="#ffffff" id="original-icon">
<path d="M57.33333,17.18881c0.72787,0 0.72787,0 1.42774,0.72786c0.72786,0.72787 2.88347,2.85547 2.88347,4.3112c0,1.42773 0,5.01106 0.69987,7.86653c1.42774,3.58333 2.88347,12.9056 5.01107,17.91667c2.1556,5.01107 2.88346,7.89453 0.72786,10.75c-2.1556,3.58333 -15.76107,17.2168 -15.76107,17.2168c0,0 3.58333,7.16667 7.86654,11.44987c3.58333,5.01107 9.32226,12.17774 16.48893,17.91667c7.16667,6.4668 15.06119,12.17774 22.92774,15.76107c7.89453,-7.86654 14.33333,-14.33333 16.48893,-15.76107c2.1556,-1.42774 2.1556,-2.1556 5.73893,-0.69987c3.58333,1.42773 8.5944,3.58333 14.33333,4.2832c5.01107,0.72786 10.75,1.42774 14.33333,2.1556c3.58333,0.72787 3.58333,0.72787 4.3112,2.1556c1.42773,1.42774 2.1276,3.58333 2.1276,4.28321c0,0.72786 0,2.88346 0,10.05012c0,7.16667 0,17.18881 0,19.3444c0,2.1556 0,2.1556 -0.69988,3.58333c-0.72786,1.42774 -1.42773,5.01107 -1.42773,5.01107c0,0.72786 -3.58333,2.1556 -5.73894,2.1556c-2.1556,0 -10.05012,0 -15.06119,-0.72786c-5.01107,-0.69988 -18.61653,-3.58333 -23.6556,-5.71094c-5.01107,-1.45573 -21.5,-7.16667 -41.54427,-22.22787c-18.64453,-14.33333 -32.25,-33.67774 -40.14453,-49.4388c-7.89453,-15.78906 -12.17774,-32.97787 -12.9056,-41.57227c-1.42774,-8.5944 -1.42774,-12.17773 -1.42774,-14.33333c0.72787,-2.1556 2.85547,-4.31119 4.3112,-5.01106c1.42773,-0.72787 3.58333,-1.45573 5.71094,-1.45573c2.1556,0 7.89453,0 15.78906,0c7.86653,0 17.1888,0 17.1888,0z"></path>
</g>
</g>
</svg>
<a class="nav-link" href="tel:<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a>
</div>
<div class="action-button">
<a role="button" class="button button--primary button--block" href="../check.php">Check Your Application</a>
</div>
</div>
</div>
</div>
</header>


<div class="home-page">
    <div class="alert covid19 alert-warning alert-dismissible">
  <div class="container">
   
  <!--    <p align="left" class="body">We're here for you.   <a href="../faq.html#coronavirus" class="alert-link">COVID-19 Customer Support Center</a>.</p>-->  <div align="right" id="google_translate_element"></div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 
'es,en,fr,de,nl', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
} </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
  <style type="text/css">
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS BEGIN */
      

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
            text-decoration: none;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span {
            color: #007EB1;
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover {
            color: #007EB1;
        }
        
        .goog-te-gadget-icon {
            display: none !important;
            /*background: url("url for the icon") 0 0 no-repeat !important;*/
        }

        /* Remove the down arrow */
        /* when dropdown open */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(213, 213, 213);"] {
            display: none;
        }
        /* after clicked/touched */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(118, 118, 118);"] {
            display: none;
        }
        /* on page load (not yet touched or clicked) */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(155, 155, 155);"] {
            display: none;
        }

        /* Remove span with left border line | (next to the arrow) in Chrome & Firefox */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left: 1px solid rgb(187, 187, 187);"] {
            display: none;
        }
        /* Remove span with left border line | (next to the arrow) in Edge & IE11 */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"] {
            display: none;
        }
        /* HIDE the google translate toolbar */
        .goog-te-banner-frame.skiptranslate {
            display: none !important;
        }
        body {
            top: 0px !important;
        }
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
    </style>
   <!-- Google Translate Element end -->
  </div>
</div>
<style>
/**
 * Body
 **/
body {
  font-family: "Open Sans", Arial, sans-serif !important;
}
@media (max-width: 480px) {
  body {
    margin-bottom: 0px !important;
  }
}
/**
 * Sections
 **/
.section {
  padding-top: 50px;
  padding-bottom: 50px;
}
.section--secondary {
  background: #eeeeee;  
}
.section--blue-triangles {
  background-color: #184464;
  background-image: url(https://d3f13ngfxdbmur.cloudfront.net/production/acquisition/assets/DrkBluTexture.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.section--green-triangles {
  background-color: #286E66;
  background-image: url(https://d3f13ngfxdbmur.cloudfront.net/production/acquisition/assets/bg_greenPattern.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.section--green-triangles h2 {
  color: #ffffff;  
}
.section--trust-pilot {
  padding-top: 30px;
  padding-bottom: 30px;
}
.section--footer {
  background: #073f60;
  color: #ffffff;
  padding-top: 0;
  padding-bottom: 0;  
}
/**
 * Headings
 **/
h1,
h2,
h3 {
  font-family: "Open Sans", Arial, sans-serif;
}
h1 {
  font-size: 30px;
  font-weight: 700;
  text-align: left;
  margin-top: 2rem;
  line-height: 1.4;
}
@media(min-width: 992px) {
h1 {
    font-size: 40px;
    font-weight: 700;
    text-align: left;    
  }
}
h2 {
  text-align: center;
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 25px;
  line-height: 1.4;
}
@media(min-width: 768px) {
  h2 {
    font-size: 36px;
    font-weight: 600;
    margin-bottom: 50px;
  }
}
h3,
.h3{
 font-size: 20px;
 font-weight: 600;
 line-height: 1.4; 
}
@media(min-width: 768px) {
  h3,
  .h3 {
   font-size: 25px;
   margin-bottom: 2rem;
   font-weight: 600;
  }
}
h4 {
  line-height: 1.2;  
}
/**
 * Paragraph
 **/
p {
  font-size: 16px;  
}
@media(min-width: 768px) {
  p {
    font-size: 18px;  
  }  
}
/**
 * Links
 **/
.link {
  color: #007EB1;
  font-weight: 700;
}
.link:hover,
.link:focus {
  color: #007EB1;
  text-decoration: underline;
}
/**
 * CTA Button
 **/
.btn--cta {
  padding-top: 12px;
  padding-bottom: 12px;
  background-color: #007EB1;
  border: 1px solid #006c98;
  font-size: 20px;
  color: #ffffff;
  display: block;
}
.btn--cta:hover,
.btn--cta:focus {
  background-color: #006c98;
  border: 1px solid #006c98;
  text-decoration: none;
  color: #ffffff;
}
@media(min-width: 768px) {
  .btn--cta {
    font-size: 26px;
  }
}
.btn--cta-max-width {
  max-width: 360px;
  margin: auto;
}
/**
 * Footer
 **/
.footer-copy {
  padding-top: 25px;
  padding-bottom: 25px;
  margin-bottom: 0;
  font-size: 14px
}
.footer-border {
  border-bottom: 1px solid #ffffff;
}
.footer-content p {
  font-size: 14px !important;
}
@media (max-width: 767px) {
  .trustpilot-widget {
      margin-top: 0 !important;
  }
}
@media (max-width: 767px) {
  .footer-content {
   margin-top: 0;
   padding-top: 15px;
  }
}
/**
 * utility
 **/
.d-flex--img {
  display: flex;
  justify-content: center;
}
.pt-0 {
  padding-top: 0rem !important;
}
.pb-0 {
  padding-bottom: 0rem !important;  
}
.pt-1 {
  padding-top: 1rem !important;
}
.pb-1 {
  padding-bottom: 1rem !important;  
}
.pt-2 {
  padding-top: 2rem !important;
}
.pb-2 {
  padding-bottom: 2rem !important;  
}
.pt-3 {
  padding-top: 3rem !important;
}
.pb-3 {
  padding-bottom: 3rem !important;  
}
.pt-4 {
  padding-top: 4rem !important;
}
.pb-4 {
  padding-bottom: 4rem !important;  
}
.pt-5 {
  padding-top: 5rem !important;
}
.pb-5 {
  padding-bottom: 5rem !important;  
}
.pt-6 {
  padding-top: 6rem !important;
}
.pb-6 {
  padding-bottom: 6rem !important;  
}
.mt-0 {
  margin-top: 0rem !important;
}
.mb-0 {
  margin-bottom: 0rem !important;  
}
.mt-1 {
  margin-top: 1rem !important;
}
.mb-1 {
  margin-bottom: 1rem !important;  
}
.mt-2 {
  margin-top: 2rem !important;
}
.mb-2 {
  margin-bottom: 2rem !important;  
}
.mt-3 {
  margin-top: 3rem !important;
}
.mb-3 {
  margin-bottom: 3rem !important;  
}
.mt-4 {
  margin-top: 4rem !important;
}
.mb-4 {
  margin-bottom: 4rem !important;  
}
.mt-5 {
  margin-top: 5rem !important;
}
.mb-5 {
  margin-bottom: 5rem !important;  
}
.mt-sm-0-md-5 {
  margin-top: 0 !important;
}
.mt-sm-0-md-5 {
  margin-bottom: 0 !important;  
}
@media(min-width: 768px) {
  .mt-sm-0-md-5 {
    margin-top: 5rem !important;
  }
  .mt-sm-0-md-5 {
    margin-bottom: 5rem !important;  
  }
}
.pb-0 {
  padding-bottom: 0 !important;  
}
.mt-0 {
  margin-top: 0 !important;  
}
.mb--sm-md-2-10 {
  margin-bottom: 2rem;  
}
@media(min-width: 768px) {
  .mb--sm-md-2-10 {
    margin-bottom: 10rem;  
  }
}
.text-center-sm-left-md {
  text-align: center !important;  
}
@media(min-width: 768px) {
  .text-center-sm-left-md {
    text-align: left !important;  
  }
}
.home-page {
  padding-bottom: 0;  
}
</style>
<style>
body {
  font-family: "Open Sans", Arial, sans-serif !important;
}

.home-page {
  padding-bottom: 0;
}

@media (max-width: 480px) {
  body {
    margin-bottom: 0px !important;
  }
} 
h1,
h2,
h3 {
  font-family: "Open Sans", Arial, sans-serif;
}
h1 {
  font-size: 30px;
  font-weight: 700;
  text-align: center;
  margin-top: 2rem;
  line-height: 1.4;
}
@media(min-width: 768px) {
h1 {
    font-size: 40px;
    font-weight: 700;    
  }
}
h2 {
  font-size: 20px;
  font-weight: 700;
  margin:0;
  padding-bottom: 20px;
  text-align: left;
}
@media(min-width: 768px) {
  h2 {
    font-size: 24px;
    font-weight: 600;
  }
}

h3 {
 font-size: 20px;
 font-weight: 600;
 line-height: 1.4;
}
@media(min-width: 768px) {
  h3 {
   font-size: 25px;
   margin-bottom: 1rem;
  font-weight: 600;
  }
}
h4 {
  line-height: 1.2;  
}

.section {
  padding-top: 35px;
  padding-bottom: 50px;
}
.section--secondary {
  background: #eeeeee;  
}
.section--green-triangles {
  background-color: #286E66;
  background-image: url(https://d3f13ngfxdbmur.cloudfront.net/production/acquisition/assets/bg_greenPattern.jpg);
  background-repeat: no-repeat;
  background-size: cover;
}
.section--green-triangles h2 {
  color: #ffffff;  
}
.section--light-blue-triangles {
  background: url(https://d3f13ngfxdbmur.cloudfront.net/production/acquisition/assets/bg_lightBluePattern.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.section--trust-pilot {
  padding-top: 2rem;
  padding-bottom: 2rem;
  border-top: 1px solid #eeeeee;
}
@media(min-width: 768px) {
  .section--trust-pilot {    
    border-top: none;
  }  
}

.header {
  padding-top: 5rem;
  padding-bottom: 5rem;
  color: #ffffff;
}
@media(min-width: 768px) {
  .header {
    padding-top: 10rem;
    padding-bottom: 10rem;
  }  
}
.header p {
  font-size: 20px;
  font-weight: 300;
  text-align: center;
}
@media(min-width: 768px) {
  .header p {    
    font-size: 25px;
    line-height: 35px;
  }
}

.header a{
  color:#fff;
}

.header a:hover{
  color:#fff;
}

.border-bottom {
  font-size:16px;
  border-bottom:2px solid #aaa;
  padding-bottom: 30px;
  padding-top: 30px;
}

.remove-border-bottom {
  font-size:16px;
  border-bottom:0;
  padding-top: 30px;
}

@media(min-width: 768px) {
  .border-bottom{
  font-size:18px;
  padding-bottom: 50px;
  padding-top: 50px;
  }
  
  .remove-border-bottom {
    font-size:18px;
    border-bottom:0;
    padding-top: 50px;
}
}

.link {
  color: #007EB1;
  font-weight: 700;
}

.link:hover {
  color: #007EB1;
  text-decoration: underline;
}

.link-white {
  color: #fff;
  font-weight: 700;
  text-decoration: underline;
}

.address {
  line-height: 2;
}

.mt-2 {
  margin-top: 2rem !important;
}


/* injects a line break between department title and email address on mobile */
@media (max-width: 768px) {
  .contact-title span::before {
  content: "\A";
  white-space: pre;
  }
}

@media(min-width: 768px) {
  .desktop-only {display: inline;}
  .mobile-only {display: none;} 
}

@media(max-width: 767px) {
  .desktop-only {display: none;}
  .mobile-only {display: inline;} 
}
/**utility**/

.p-2 {
  padding: 2rem !important;
}
.pt-0 {
  padding-top: 0rem !important;
}
.pb-0 {
  padding-bottom: 0rem !important;  
}
.pt-1 {
  padding-top: 1rem !important;
}
.pb-1 {
  padding-bottom: 1rem !important;  
}
.pt-2 {
  padding-top: 2rem !important;
}
.pb-2 {
  padding-bottom: 2rem !important;  
}
.pt-3 {
  padding-top: 3rem !important;
}
.pb-3 {
  padding-bottom: 3rem !important;  
}
.mt-0 {
  margin-top: 0rem !important;
}
.mb-0 {
  margin-bottom: 0rem !important;  
}
.mt-1 {
  margin-top: 1rem !important;
}
.mb-1 {
  margin-bottom: 1rem !important;  
}
.mt-2 {
  margin-top: 2rem !important;
}
.mb-2 {
  margin-bottom: 2rem !important;  
}
.mt-3 {
  margin-top: 3rem !important;
}
.mb-3 {
  margin-bottom: 3rem !important;  
}
.mt-4 {
  margin-top: 4rem !important;
}
.mb-4 {
  margin-bottom: 4rem !important;  
}
.mt-5 {
  margin-top: 5rem !important;
}
.mt-10 {
  margin-top: 10rem !important;
}
.mb-5 {
  margin-bottom: 5rem !important;  
}
.mb-8 {
  margin-bottom: 5rem !important;  
}
.mt-sm-0-md-5 {
  margin-top: 0 !important;
}
.mt-sm-0-md-5 {
  margin-bottom: 0 !important;  
}
p {
  font-size: 16px;
}
@media (min-width: 768px) {
  p {
    font-size: 18px;
  }
}
</style>

<style>
.link {
  color: #007EB1;
  font-weight: 700;
  text-decoration: underline;
}
.link:hover,
.link:focus {
  color: #007EB1;
  text-decoration: none;
}
.footer a {
  text-decoration: underline;  
}
.footer a:hover,
.footer a:focus {  
  text-decoration: none;
}
@media(min-width: 768px) {
  .link {
    color: #007EB1;
    font-weight: 700;
    text-decoration: none;
  }  
  .link:hover,
  .link:focus {
    color: #007EB1;
    text-decoration: underline;
  }
  .footer a {
    text-decoration: none;  
  }
  .footer a:hover,
  .footer a:focus {  
    text-decoration: underline;
  }
}
</style>


<main>
<header class="section section--green-triangles header">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <h1 class="mb-3">Loan Application Status</h1>  
        <p class="mt-2">Find details of your loan application below.</p>
      </div>
    </div>
  </div>    
</header>
  <?php

error_reporting(E_ALL); 
if (!isset($_POST['Submit'])) { 
// form not submitted 
?>
<H3>Search Records Application</H3>
<form   method="post"> 
Search <input type="text" name="search"> 
<select size="1" name="dropdown"> 
<option value="" selected>Search By...</option> 
<option value="cid">Batch No.</option> 
<option value="name">Name</option>
</select> 
<input type="Submit" value="Submit" name="Submit"> 
</form>

<?php 
}

else {

// form submitted 
// set server access variables 
 
$search = empty($_POST['search'])? die ("ERROR: Enter Search Criteria") : mysql_escape_string($_POST['search']); 
$dropdown = empty($_POST['dropdown'])? die ("ERROR: Select from dropdown") : mysql_escape_string($_POST['dropdown']);

// Open Connection

 
//Select Database

mysql_select_db($dbname) or die ("Unable to connect to database");

//Create Query

$query = "SELECT * FROM user WHERE $dropdown='$search'" or die (mysql_error());

$result = mysql_query($query) or die (mysql_error());

$num=mysql_numrows($result);

mysql_close($conn);




$i=0; 
while ($i < $num) {

$cid=mysql_result($result,$i,"cid"); 
$name=mysql_result($result,$i,"name");
$rank=mysql_result($result,$i,"rank");
$image=mysql_result($result,$i,"image");
$phone=mysql_result($result,$i,"phone");
$type=mysql_result($result,$i,"type");
$amt=mysql_result($result,$i,"amt");
$rate=mysql_result($result,$i,"rate");
$dur=mysql_result($result,$i,"dur");
$coldate=mysql_result($result,$i,"coldate");
$paydate=mysql_result($result,$i,"paydate");
$status=mysql_result($result,$i,"status");
$remark=mysql_result($result,$i,"remark");

 

echo ("<section class=section>
   <div class=container>
      <div class=row>
         <div class=col-md-10 col-md-offset-1>
            <div class=border-bottom>
               <div class=row>
                  <div class=col-md-5>
                     <h2>Identity Document:</h2>
                  </div>
                  <div class=col-md-7>
                     <img align=center width='300' src='img/".$image."' />
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=row>
         <div class=col-md-10 col-md-offset-1>
            <div class=border-bottom>
               <div class=row>
                  <div class=col-md-5>
                     <h2>Applicant Information:</h2>
                  </div>
                  <div class=col-md-7>
                     <p><strong>Applicant name:</strong>  ".$name." </p>
                     <p><strong>Phone Number:</strong> ".$phone."</p>
                     <p><strong>Home Address:</strong> ".$rank."</p>
                     <p><strong>Country:</strong> ".$coldate." </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class=row>
         <div class=col-md-10 col-md-offset-1>
            <div class=border-bottom>
               <div class=row>
                  <div class=col-md-5>
                     <h2>Loan Information:</h2>
                  </div>
                  <div class=col-md-7>
                 
                     <p><strong>Application Number:</strong>  ".$cid."</p>
                     <p><strong>Loan Type:</strong>  ".$type."</p>
                     
                     
                     <p><strong>Loan Amount:</strong>    ".$amt." </p>
                     <p><strong>Interest Rate:</strong>  ".$rate." </p>
                      
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      
       <div class=row>
         <div class=col-md-10 col-md-offset-1>
            <div class=border-bottom>
               <div class=row>
                  <div class=col-md-5>
                     <h2>Repayment Information:</h2>
                  </div>
                  <div class=col-md-7>
                 
                     <p><strong>Payback Duration:</strong>  ".$dur."</p>
                     <p><strong>Final Repayment Date:</strong>  ".$paydate."</p>
                     
                     
                     <p><strong>Loan Status:</strong>    ".$status." </p>
                     
                      
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class=row>
         <div class=col-md-10 col-md-offset-1>
            <div class=border-bottom>
               <div class=row>
                  <div class=col-md-5>
                     <h2>Remarks:</h2>
                  </div>
                  <div class=col-md-7>
                 
                     
                     <p>  ".$remark." </p>
                      
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
     
</section>");

$i++;

} 
} 
 
 if ($i ==0) {
    echo " <br><br> <hr><h4 class='title-1' align=center>No Results Found</h4>
    
    <br> <a href='../check.php' ><p  align=center>&#x1F50D; Try a New Search</p></a>   <hr><br> <br>";
    
}
?>
</main>
</div>
<footer class=" ">
<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
<p class="footer-content">
<a class="footer-brand" href="../"><img alt="<?php echo $row['name']; ?> Footer Logo" src="../index_files/logo-white.png"></a>
</p>
<span class="glyphicon glyphicon-earphone"></span>
<a href="tel:<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a>
<p>
<span class="glyphicon glyphicon-envelope"></span>
<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
</p>
<div class="row" style="margin-top: 20px;">
<div class="col-xs-12" style="width: 100%;">
<a target="_blank" href="https://www.facebook.com/<?php echo $row['name']; ?>"><img alt="Facebook" style="margin-bottom:30px;" src="../index_files/fb.png"></a>
<a target="_blank" href="https://twitter.com/<?php echo $row['name']; ?>"><img alt="Twitter" style="margin-bottom:30px;" src="../index_files/twitter.png"></a>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
<p class="footer-content">
<a href="../how-it-works.php">How It Works</a>
<br>
<a href="../faq.php">FAQ</a>
<br>

</p>
</div>
<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
<p class="footer-content">
<a href="../about-us.php">About Us</a>
<br>
<a href="../contact-us.php">Contact Us</a>
<br>

</p>
</div>
<div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
<p class="footer-content">
<a href="../personal-loans.php">Personal Loans</a>
<br>
<a href="../line-of-credit.php">Line of Credit</a>
 
</p>
</div>
<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
<p class="footer-content">
<a href="../check.php">Check Application</a>
<br>
<a href="../apply.php">Apply Now</a>
<br>
 
</p>
</div>

</div>
<div class="row">
<div class="footer-disclaimer">
<div class="col-xs-12 col-sm-10">
<p>
 
Approved applications are typically funded the next business day. Applicants who submit an application
before 7:00 a.m. CT Monday – Friday may receive their funds the same business day. Approval subject to additional verification.
Failure to provide additional documentation promptly may delay funding.
</p><br>
<p>
All <?php echo $row['name']; ?> loans and lines of credit are underwritten by,
approved by and funded by Key Bank &amp; Trust Company, Member FDIC. All loans and lines of credit will be serviced by <?php echo $row['name']; ?>.
</p><br>
<p>
<?php echo $row['name']; ?>
is licensed by the Department of Financial Protection and Innovation.

</p><br><br>
<p class="copyright">
© 2021 <?php echo $row['name']; ?>
</p>
</div>

<div class="col-sm-2 col-xs-12 clearfix">
<a href="#" ><img border="0" alt="McAfee SECURE sites help keep you safe from identity theft, credit card fraud, spyware, spam, viruses and online scams" oncontextmenu="alert(&#39;Copying Prohibited by Law - McAfee SECURE is a Trademark of McAfee, Inc.&#39;); return false;" src="../index_files/13.gif"></a>
<br>
<script src="../index_files/getseal"></script>
</div>

</div>
</div>
</div>
</footer> 
 </div>
 
 <script>
 
var slideshows = document.querySelectorAll('[data-component="slideshow"]');
slideshows.forEach(initSlideShow);

function initSlideShow(slideshow) {

	var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);

	var index = 0, time = 5000;
	slides[index].classList.add('active');

	setInterval( () => {
		slides[index].classList.remove('active');
		
		index++;
		if (index === slides.length) index = 0;

		slides[index].classList.add('active');

	}, time);
}
 </script>
 
 

<script type="text/javascript">
$(document).ready(function () {
    $.fn.digits = function () {
        return this.each(function () {
            $(this).text($(this).text().replace(/(d)(?=(ddd)+(?!d))/g, "$1,"));
        });
    };
    var label = $('<span class="max-draw">$<span class="value">5,000</span></span>'), element = $('#slider-c'), input = $('#loan-draw-amount'), default_value = 5000;
    element.slider({
        min: 1000,
        max: 10000,
        step: 100,
        range: 'min',
        value: default_value,
        create: function (event, ui) {
            element.find('.ui-slider-handle').append("<img src='https:\/\/d3f13ngfxdbmur.cloudfront.net/production/acquisition/assets/slider-arrows.png' />");
            element.after(label);
            input.val(default_value);
            label.children('.value').html(default_value);
        },
        slide: function (event, ui) {
            label.children('.value').html(ui.value);
            input.val(ui.value);
            $("span.value").digits();
        }
    });
    $("span.value").digits();
    $('#slider-c').draggable()




    $('#icon1').click(function () {

        $('#icon1').addClass('active-icon');
        $('.attachment').addClass('first-position');
        $('.attachment').removeClass('second-position');
        $('.attachment').removeClass('third-position');
        $('#icon2').removeClass('active-icon');
        $('#icon3').removeClass('active-icon');
        $('#HIW1').show('slow');
        $('#HIW2').hide('slow');
        $('#HIW3').hide('slow');
        $('#trust-dot-1').addClass('active-dots');
        $('#trust-dot-2').removeClass('active-dots');
        $('#trust-dot-3').removeClass('active-dots');
    });
    $('#icon2').click(function () {
        $('#icon2').addClass('active-icon');
        $('.attachment').addClass('second-position');
        $('.attachment').removeClass('first-position');
        $('.attachment').removeClass('third-position');
        $('#icon1').removeClass('active-icon');
        $('#icon3').removeClass('active-icon');
        $('#HIW2').show('slow');
        $('#HIW1').hide('slow');
        $('#HIW3').hide('slow');
        $('#trust-dot-2').addClass('active-dots');
        $('#trust-dot-1').removeClass('active-dots');
        $('#trust-dot-3').removeClass('active-dots');
    });
    $('#icon3').click(function () {
        $('#icon3').addClass('active-icon');
        $('.attachment').addClass('third-position');
        $('.attachment').removeClass('first-position');
        $('.attachment').removeClass('second-position');
        $('#icon2').removeClass('active-icon');
        $('#icon1').removeClass('active-icon');
        $('#HIW3').show('slow');
        $('#HIW1').hide('slow');
        $('#HIW2').hide('slow');
        $('#trust-dot-3').addClass('active-dots');
        $('#trust-dot-1').removeClass('active-dots');
        $('#trust-dot-2').removeClass('active-dots');
    });
    $('#trust-dot-1').click(function () {
        $('#trust-dot-1').addClass('active-dots');
        $('#trust-dot-2').removeClass('active-dots');
        $('#trust-dot-3').removeClass('active-dots');
        $('#icon1').addClass('active-icon');
        $('.attachment').addClass('first-position');
        $('.attachment').removeClass('second-position');
        $('.attachment').removeClass('third-position');
        $('#icon2').removeClass('active-icon');
        $('#icon3').removeClass('active-icon');
        $('#HIW1').show('slow');
        $('#HIW2').hide('slow');
        $('#HIW3').hide('slow');
    });
    $('#trust-dot-2').click(function () {
        $('#trust-dot-2').addClass('active-dots');
        $('#trust-dot-1').removeClass('active-dots');
        $('#trust-dot-3').removeClass('active-dots');
        $('#icon2').addClass('active-icon');
        $('.attachment').addClass('second-position');
        $('.attachment').removeClass('first-position');
        $('.attachment').removeClass('third-position');
        $('#icon1').removeClass('active-icon');
        $('#icon3').removeClass('active-icon');
        $('#HIW2').show('slow');
        $('#HIW1').hide('slow');
        $('#HIW3').hide('slow');
    });
    $('#trust-dot-3').click(function () {
        $('#trust-dot-3').addClass('active-dots');
        $('#trust-dot-1').removeClass('active-dots');
        $('#trust-dot-2').removeClass('active-dots');
        $('#icon3').addClass('active-icon');
        $('.attachment').addClass('third-position');
        $('.attachment').removeClass('second-position');
        $('.attachment').removeClass('first-position');
        $('#icon2').removeClass('active-icon');
        $('#icon1').removeClass('active-icon');
        $('#HIW3').show('slow');
        $('#HIW2').hide('slow');
        $('#HIW1').hide('slow');
    });

    $('.eligibility h5').click(function () {
        $('.eligibility div:nth-child(2)').addClass('mobile-show-brand');
        $('.review div:nth-child(2)').removeClass('mobile-show-brand');
        $('.accomplish div:nth-child(2)').removeClass('mobile-show-brand');
        $('.eligibility div:first-child').removeClass('forced-arrow');
    });

    $('.review h5').click(function () {
        $('.review div:nth-child(2)').addClass('mobile-show-brand');
        $('.eligibility div:nth-child(2)').removeClass('mobile-show-brand');
        $('.accomplish div:nth-child(2)').removeClass('mobile-show-brand');
        $('.eligibility div:first-child').removeClass('forced-arrow');
    });

    $('.accomplish h5').click(function () {
        $('.accomplish div:nth-child(2)').addClass('mobile-show-brand');
        $('.review div:nth-child(2)').removeClass('mobile-show-brand');
        $('.eligibility div:nth-child(2)').removeClass('mobile-show-brand');
        $('.eligibility div:first-child').removeClass('forced-arrow');
    });

    $('#check-button').click(function () {

        var slideramount = $('.value').html();
        slideramount = "/apply?amount=" + slideramount;
        $('#check-button').attr("href", slideramount);
    });
});
</script>

 
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo $row['tawk']; ?>';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script--></body> <?php echo $tawk ?>

<!-- Mirrored from <?php echo $row['url']; ?>/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Sep 2021 16:26:18 GMT -->
</html>
<?php } ?>



 