<?php //session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Pixel Perfect Portfolio</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet">

    <!-- Favicon
    ================================================== -->
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="icon" sizes="16x16" href="assets/img/favicon.ico">
    <link rel="manifest" href="assets/img/manifest.json">
    <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheets
    ================================================== -->
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- Font Awesome core CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
     <!-- Header -->
     <header id="masthead" class="site-header">
        <nav id="primary-navigation" class="site-navigation" data-spy="affix">
            <div class="container">
                <div class="navbar-header page-scroll">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#portfolio-perfect-collapse" aria-expanded="false" >
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    <!-- Name -->
                    <div class="page-scroll site-logo">
                        <a href="#top">John</a>
                    </div>

                </div><!-- /.navbar-header -->

                <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">

                    <!-- Navigation -->
                    <ul class="nav navbar-nav navbar-right">

                        <li class="page-scroll"><a href="index.php">Home</a></li>
                        <li class="page-scroll"><a href="#intro">Intro</a></li>
                        <li class="page-scroll"><a href="#about">About</a></li>
                        <li class="page-scroll"><a href="#services">Services</a></li>
                        <li class="page-scroll"><a href="#team">Team</a></li>
                        <li class="page-scroll"><a href="#history">History</a></li>
                        <li class="page-scroll"><a href="#works">Works</a></li>
                        <li class="page-scroll"><a href="#contact">Contact</a></li>
                        
                    </ul><!-- /.navbar-nav -->

                </div><!-- /.navbar-collapse -->
            </div>
        </nav><!-- /.primary-navigation -->
    </header><!-- /#header -->
    <!-- End Header -->

   <!-- Contacts section --> 
   <section class="site-section section-contact" id="contact">
            <div class="container">
                <h2>CONTACT MiKE</h2>
                <p class="section-subtitle"><span>Here i am</span></p>
                <div class="row">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="col-md-4">
                            <input class="form-control" type="text" name= "name" placeholder="Name" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="email" name= "email" placeholder="Email" required>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" type="text" name= "subject" placeholder="Subject" required>
                        </div>
                        <div class="col-sm-12">
                            <textarea class="form-control" name= "message" placeholder="Your Message" required></textarea>
                        </div>

                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-inverted">Send Message</button>
                        </div>  
                    </form>
                </div>
            </div>
    </section><!-- /.section-contact-->
    <!-- End Contacts section --> 

    <?php 
        require dirname(__FILE__) . "/validation.php";
    ?>

     <!-- Social Networks section --> 
     <section class="section-networks blue-bg">
            <div class="container">
                <a href="#" class="rectangle">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-youtube-play"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="#" class="rectangle">
                    <i class="fa fa-dribbble"></i>
                </a>
            </div>
        </section><!-- /.section-networks-->
        <!-- End Social Networks section --> 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery core js | Do not Delete -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap core js | Do not Delete -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Bootstrap progressbar JS -->
    <script src="assets/js/bootstrap-progressbar.min.js"></script>

    <!-- Count To JS -->
    <script src="assets/js/jquery.countTo.min.js"></script>

    <!-- Easing JS -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Shuffle JS -->
    <script src="assets/js/jquery.shuffle.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="assets/js/slick.min.js"></script>

    <!-- Touchswipe JS -->
    <script src="assets/js/touchswipe.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
