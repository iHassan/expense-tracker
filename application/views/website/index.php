<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>The Expense</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- fav-icons -->
        <link rel="apple-touch-icon" sizes="76x76" href=<?php echo BASE_URL ?>apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL ?>favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL ?>favicon-16x16.png">
        <link rel="manifest" href="<?php echo BASE_URL ?>manifest.json">
        <link rel="mask-icon" href="<?php echo BASE_URL ?>safari-pinned-tab.svg" color="#5bbad5">
        <meta name="apple-mobile-web-app-title" content="Expense Tracker">
        <meta name="application-name" content="Expense Tracker">
        <meta name="theme-color" content="#ffffff">
        <!-- fav-icons -->

        <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/main.css">
        <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/style.css">
        <link href="<?php echo ASSETS_URL ?>css/animate.css" rel="stylesheet"/>
        <link href="<?php echo ASSETS_URL ?>css/waypoints.css" rel="stylesheet"/>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

        <script src="<?php echo ASSETS_URL ?>js/vendor/jquery-1.12.0.min.js"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script> 
        <script src="<?php echo ASSETS_URL ?>js/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo ASSETS_URL ?>js/waypoints.js" type="text/javascript"></script>
        <script src="<?php echo ASSETS_URL ?>js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
    <body  data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- ======================================
        Nav bar 
===========================================-->
    
<div id="navigation">

    <nav class="navbar navbar-default navbar-alt navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="<?php echo ASSETS_URL ?>images/logo.png" alt="logo" class="img-responsive logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#Home">Home</a></li>
            <li><a href="#About">About</a></li>
            <li><a href="#Features">Features</a></li>
            <li><a href="<?php echo BASE_URL ?>app/sign-up">Get Started</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

</div>   
 <!-- ======================================
        Nav bar 
===========================================-->

<!-- ======================================
        Banner
===========================================-->


<div id="banner">
    <div class="container" id="Home">
        <div class="row">
            <div class="col-md-6 padding">
                <h2 class="animatable slideInLeft">Online <b>Expense</b> Tracker</h2>
                <p class="animatable slideInLeft">Easily Manage Your Expenses</p>
                <a href="E:/Sublime/theexpense/login.html">Try Now</a>
            </div>
        </div>
    </div>
</div>





<!-- ======================================
        Banner 
===========================================-->


<!-- ======================================
        About Section 
===========================================-->


<div id="about">
    <div class="container">
        <div class="row margin">
            <div class="col-md-6 animatable slideInLeft">
                <h3>About Us</h3>
                <hr>
                <p>Tracking your expenses is one of the key factors in making your budget work for you. If you do not know how much you have spent each month, you cannot tell tell when you have overspent. Even the small expenses can cause you to blow your budget.</p>
            </div>
            <div class="col-md-6 animatable slideInRight">
                <img src="<?php echo ASSETS_URL ?>images/expense.png" class="img-responsive" alt="Tracking">
            </div>
        </div>
    </div>
</div>
       


<!-- ======================================
        About Section 
===========================================-->

<!-- ======================================
        Manage Section 
===========================================-->



<div id="manage">
    <div class="container" id="About">
        <div class="row margin">
            <div class="col-md-6 animatable slideInLeft">
                <img src="<?php echo ASSETS_URL ?>images/system.png" class="img-responsive" alt="Statistics">
            </div>
            <div class= "col-md-6 text-left animatable slideInRight">
                <h3>Manage Your Expenses</h3>
                <h6>Get Clear Overview on your expense</h6>
                <p>View reports every week to examine your expenses. Make adjustments as needed, especially when you notice that you are spending more than your budget allocations. </p>
                <a href="E:/Sublime/theexpense/login.html">Start Now</a>
            </div>
        </div>
    </div>
</div>


<!-- ======================================
        Manage Section 
===========================================-->



<!-- ======================================
        Features Section 
===========================================-->

<div id="feature">
    <div class="container">
        <div class="row"  id="Features">
            <div class="col-md-12 text-center">
                <h3>Explore the Features</h3>
                <hr>
                <p>Create budgets, track investments, discover new ways to save and more.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center">
                <span><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
                <h6>Record Expense</h6>
                <p>Track your expense, outings, traveling or anything you can think of.</p>
            </div>
            <div class="col-md-3 text-center">
                 <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                <h6>Scheduling</h6>
                <p>View upcoming expense, Income, as well as your transactions and Forecast all from the My Calendar page.</p>
            </div>
            <div class="col-md-3 text-center">
                 <span class="balance"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                <h6>Simple Budgeting</h6>
                <p>Budget your finances to know where your money is going. </p>
            </div>
            <div class="col-md-3 text-center">
                 <span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>
                <h6>Email Alerts</h6>
                <p>Receive reminders to your email when your expense are due. Get started!</p>
            </div>
        </div>
    </div>
</div>






<!-- ======================================
        Feature Section 
===========================================-->


<!-- ======================================
        Mobile Section 
===========================================-->


<div id="mobile">
    <div class="container skew">
        <div class="row move">
            <div class="col-md-6">
                <ul>
                    <li class="animatable slideInLeft os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s">Save Your Goals</li>
                    <li class="animatable slideInLeft os-animation" data-os-animation="slideInLeft" data-os-animation-delay=".1s">Get Your Budget In Control</li>
                    <li class="animatable slideInLeft os-animation" data-os-animation="slideInLeft" data-os-animation-delay=".2s">Track Your Spendings</li>
                    <li class="animatable slideInLeft os-animation" data-os-animation="slideInLeft" data-os-animation-delay=".3s">Set Expense Reminders</li>
                    <li class="animatable slideInLeft os-animation" data-os-animation="slideInLeft" data-os-animation-delay=".4s">Get Overview On Records</li>
                    <li class="animatable slideInLeft os-animation" data-os-animation="slideInLeft" data-os-animation-delay=".5s">Meet Your Goals</li>
                </ul>
            </div>
            <div class="col-md-6 text-center animatable slideInDown"><img src="<?php echo ASSETS_URL ?>images/iphone-6.png" alt="Mobile" class="img-responsive"></div>
        </div>
    </div>
</div>






<!-- ======================================
        Mobile Section 
===========================================-->


<!-- ======================================
        Access Section 
===========================================-->

<div id="access">
    <div class="container">
        <div class="row margin">
            <div class="col-md-12 text-center">
                <h3>Access Anywhere Anytime</h3>
                <hr>
                <img src="<?php echo ASSETS_URL ?>images/access.png" alt="Platform" class="img-responsive system animatable fadeInDown">
            </div>

        </div>
    </div>
</div>






<!-- ======================================
        Access Section 
===========================================-->




<!-- ======================================
        Saying Section 
===========================================-->

<div id="saying">
    <div class="container">
        <div class="row spacing">
            <div class="col-md-12 text-center">
                <h2>You must learn to save first and spend afterwards.</h2>
                <p>– John Poole</p>
            </div>           
        </div>
    </div>
</div>

<!-- ======================================
        Saying Section 
===========================================-->



<!-- ======================================
        Join Now Section 
===========================================-->

<div id="join">
    <div class="container">
        <div class="row spacing">
            <div class="col-md-12 text-center">
                <h3>Let's Get Started</h3>
                <p>Sign up For TheExpense</p>
                <a href="#" class="animatable slideInDown">SIGNUP</a>
            </div>
        </div>
    </div>
</div>




<!-- ======================================
        Join Now Section 
===========================================-->



<!-- ======================================
        Footer Section 
===========================================-->

<div id="footer">
    <div class="container">
        <div class="row">
            <footer class="footer-bs">
        <div class="row">
            <div class="col-md-4 footer-brand animatable slideInLeft">
                <img src="<?php echo ASSETS_URL ?>images/logo.png" alt="logo" class="img-responsive logo">
                <p>Tracking your expenses is one of the key factors in making your budget work for you. If you do not know how much you have spent each month, you cannot tell tell when you have overspent. Even the small expenses can cause you to blow your budget.</p>
                <p>© 2017, All rights reserved</p>
            </div>
            <div class="col-md-4 footer-nav animatable slideInLeft">
                <h4>Menu —</h4>
                <div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Manage</a></li>
                        <li><a href="#">Control</a></li>
                        <li><a href="#">Overview</a></li>
                        <li><a href="#">Report</a></li>
                        <li><a href="#">Get Alerts</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#Home">Home</a></li>
                        <li><a href="#About">About</a></li>
                        <li><a href="#Features">Features</a></li>
                        <li><a href="#Section1">Get Started</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 footer-social animatable slideInRight">
                <h4>Follow Us</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">RSS</a></li>
                </ul>
            </div>
      
        </div>
    </footer>
        </div>
    </div>
</div>




<!-- ======================================
        Footer Section 
===========================================-->

        <script src="<?php echo ASSETS_URL ?>js/plugins.js"></script>
        <script src="<?php echo ASSETS_URL ?>js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script> -->

        <script type="text/javascript">
            $(document).ready(function() {
            $(window).scroll(function() {
            if($(document).scrollTop() > 10) {
                $('nav').addClass('shrink');
            }
            else {
            $('nav').removeClass('shrink');
            }
          });
        });
        </script>





<script type="text/javascript">
    jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.size() == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
        $animatables.each(function(i) {
       var $animatable = $(this);
            if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
            }
    });

    };
  
  // Hook doAnimations on scroll, and trigger a scroll
    $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});</script>




    </body>
</html>
