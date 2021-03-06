<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
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
                    <li class="active">
                        <a href="about.php">About us</a>
                    </li>
                    <li>
                        <a href="services.php">Attivit??</a>
                    </li>
                    <li>
                        <a href="registrarsi.php">Registrazione campo</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                    <?php
            //controllo se ?? effeuttuato il login
            if (isset($_SESSION["id_amministratore"])) {
                echo " <a href=\"visualizzazioneUtenti.php\"> Controllo iscrizioni</a>";
            }
    ?>
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
        <h1>ASSORAIDER</h1>
        <h2></h2>
        <div class="hr"></div>
    </div>
    <!-- /intro text -->


    <!-- About us -->

    <div class="container">
        <div class="row padding-inner">

            <!-- Column1 -->
            <div class="col-md-6 col-sm-12">

                <h3> About us</h3>
                <p>The essence of interior design will always be about people and how they live. It is about the
                    realities of what makes for civilized, meaningful environment, not about fashion or what's in or
                    what's out.</p>
                <p class="block">The essence of interior design will always be about people and how they live. It is
                    about the realities of what makes for civilized, meaningful environment, not about fashion or what's
                    in or what's out.</p>

                <p><span class="text">The essence of interior design</span> will always be about people and how they
                    live. It is about the realities of what makes for civilized, meaningful environment, not about
                    fashion or what's in or what's out.
                    The essence of interior design will always be about people and how they live. It is about the
                    realities of what makes for civilized, meaningful environment, not about fashion or what's in or
                    what's out.</p>
                <p>The essence of interior design will always be about people and how they live. It is about the
                    realities of what makes for civilized, meaningful environment, not about fashion or what's in or
                    what's out.
                </p>
                <p><span class="text">The essence of interior design</span> will always be about people and how they
                    live. It is about the realities of what makes for civilized, meaningful environment, not about
                    fashion or what's in or what's out.
                </p>
            </div>
            <!-- /column1 -->

            <!-- Column2 -->
            <div class="col-md-6 col-sm-12">
                <img src="images/photo4.jpg" class="img-about" alt="photo" />
            </div>
            <!-- /column2 -->


        </div><!-- /row -->
    </div><!-- /container -->



    <!-- Team -->
    <div class="container team-top">
        <div class="border"></div>


        <h3> Our team</h3>
        <div class="row">

            <!-- Team Members -->
            <div class="col-md-4 col-sm-4 img-thumbnail-photo-top">
                <div class="thumbnail">
                    <img src="images/team1.jpg" alt="Jane Doe" />
                    <div class="caption">
                        <h3 class="our-team-names">Jane Doe<br>
                            <small class="job-title">Job Title</small>
                        </h3>
                        <p>The essence of interior design will always be about people and how they live. It is about the
                            realities of what makes for civilized, meaningful environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 img-thumbnail-photo-top">
                <div class="thumbnail">
                    <img src="images/team2.jpg" alt="Jane Doe" />
                    <div class="caption">
                        <h3 class="our-team-names">Jane Doe<br>
                            <small class="job-title">Job Title</small>
                        </h3>
                        <p>The essence of interior design will always be about people and how they live. It is about the
                            realities of what makes for civilized, meaningful environment.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 img-thumbnail-photo-top">
                <div class="thumbnail">
                    <img src="images/team3.jpg" alt="Jane Doe" />
                    <div class="caption">
                        <h3 class="our-team-names">Jane Doe<br>
                            <small class="job-title">Job Title</small>
                        </h3>
                        <p>The essence of interior design will always be about people and how they live. It is about the
                            realities of what makes for civilized, meaningful environment.
                    </div>
                </div>
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->



    <!-- Footer -->
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
                        <h5>?? 2016 Simple living.</h5>

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