<!DOCTYPE html>
<html>

<head>
    <title>Interior design - Home2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap Core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open%20Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Logo -->
    <div class="brand"><img src="images/logo.png" alt="logo" /></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php">Home-image</a>
                            </li>
                            <li>
                                <a href="index-video.php">Home-video</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li>
                        <a href="services.php">Attività</a>
                    </li>
                    <li>
                        <a href="registrarsi.php">Registrazione campo</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /navbar-collapse -->
        </div>
        <!-- /container -->
    </nav>
    <!-- End Header -->


    <!-- Intro text -->
    <div class="title bg-color-intro">
        <h1>SCOUT FIELD</h1>
        <h2>SII PREPARATO</h2>
        <div class="hr"></div>
    </div>
    <!-- /intro text -->



    <!-- Intro Video -->
    <header id="header-v">
        <video controls autoplay>
            <source src="video/townhouses.mp4" type="video/mp4">
            <source src="video/townhouses.webm" type="video/webm">
        </video>

    </header>
    <!-- /End Video -->


    <!-- Services section -->
    <div class="container">
        <div class="row padding-top">

            <!-- Services Panels -->
            <div class="col-md-40 col-sm-120">
                <div class="services1 services1-default text-center">
                    <div class="services1-body">
                        <h2> SPIEGAZIONE CAMPO </h2>
                        <p> QUI SCRIVERO' DIVERSE PARTICOLARITA' RITGUARDO QUESTO CAMPO COMPRESO DOVE SI FARA' E COME SARA' GESTITO
                        </p>
                        <!--<img src="images/photo1.jpg" alt="photo" class="zoom1-img" />-->
                    </div>
                </div>
            </div>

            <!-- /services panel 
            <div class="text-center">
                <a href="services.php" class="black-btn btn">View all services</a>
            </div> -->


        </div><!-- /row -->
    </div><!-- /container -->

    <!-- Gallery -->
    <!-- Gallery section -->
    <div class="title bg-color-gallery">
        <h1 id="gallery">SCORSI CAMPI</h1>
        <div class="hr"></div>
    </div>

    <!-- Gallery -->
    <div class="container-fluid gallery">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="gallery-inner">
                    <a href="">
                        <img src="images/gallery1.jpg" alt="#">
                        <div class="gallery-caption">
                            <div class="gallery-details">
                                <h3>EUROCAMP 2018</h3>
                                <p><small>Inghilterra</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="gallery-inner">
                    <a href="">
                        <img src="images/gallery2.jpg" alt="#">
                        <div class="gallery-caption">
                            <div class="gallery-details">
                                <h3>rovermoot 2017</h3>
                                <p><small>Belluno</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="gallery-inner">
                    <a href="">
                        <img src="images/gallery3.jpg" alt="#">
                        <div class="gallery-caption">
                            <div class="gallery-details">
                                <h3>campo di sezione 2019</h3>
                                <p><small>liguria</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="gallery-inner">
                    <a href="">
                        <img src="images/gallery4.jpg" alt="#">
                        <div class="gallery-caption">
                            <div class="gallery-details">
                                <h3>EUROCAMP 2014</h3>
                                <p><small>Roma</small></p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <!--<div class="text-center">
                <a href="portfolio.php" class="black1-btn btn">View all projects</a>
            </div>-->

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div id="footer">
        <div class="footerTop">
            <div class="container">
                <div class="row">
                    <!-- Footer Box1 -->
                    <div class="col-md-3 col-sm-3 col-xs-offset-2">
                        <h5>Contact info:</h5>
                        <p>Milano</p>
                        <p>Milano</p>
                        <p>Phone: 000-000-0000</p>
                        <p>Email: <a href="mailto:elia.colombo18@gmail.com">elia.colombo18@gmail.com</a></p>
                    </div>


                    <!-- Footer Box2 -->
                    <div class="col-md-3 col-sm-3">
                        <h5>Follow us:</h5>
                        <div class="footerLinkList">
                            <a href="#">Facebook</a>
                            <a href="#" class="icons"> Twitter</a>
                        </div><!-- /footerLinkList -->
                    </div>
                    <!-- Footer Box3 -->
                    <div class="col-md-3 col-sm-3">
                        <h5>© 2016 Simple living.</h5>

                    </div>


                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /footerTop -->
    </div><!-- /footer -->


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Boostrap JS -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Smooth scroll JS -->
    <script src="js/smoothscroll.js"></script>


</body>

</html>