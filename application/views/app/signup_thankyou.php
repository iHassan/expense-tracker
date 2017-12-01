<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
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
        <link rel="stylesheet" href="<?php echo ASSETS_URL ?>css/log.css">
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

<body>

     <!-- ======================================
        Nav bar 
===========================================-->

    <div id="navigation">

            <nav class="navbar navbar-default">
              <div class="container">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="#">
                        <img alt="Logo" src="<?php echo ASSETS_URL ?>images/logo.png">
                      </a>
                    </div>
                    <!-- <div class="navbar-left">
                        <button type="button" class="btn btn-default navbar-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign up</button>
                    </div> -->
                </div>
            </nav>

    </div>
 <!-- ======================================
        Nav bar 
===========================================-->






    <div id="loginform">
        <div class="container">
            <div class="row margin">
                <div class="col-md-12 text-center">

                    <h1>
                      <a href="#" class="typewrite" data-period="2000" data-type='[ "Welcome!", "Hi, Im The Expense.", "I am Creative.", "I Love to Manage.", "I Love to Schedule." ]'>
                        <span class="wrap"></span>
                      </a>
                    </h1>


                    <div class="form-signin animated zoomIn">
                      <h3>Thank You For Registering.</h3>
                      <br>
                      <p>An email has been sent to your email address with the instructions to activate your account.</p>
                    </div>

            </div>
        </div>
    </div>
</div>







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


<!-- ========== TypeWrite.js ========== -->

        <script type="text/javascript">
            
            var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
  </script>

       </body>
</html>