<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Interior design - Contact us</title>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Boostrap Core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">


    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open%20Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>

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
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li>
                        <a href="services.php">Attivit??</a>
                    </li>
                    <li>
                        <a href="registrarsi.php">Registrazione campo</a>
                    </li>
                    <li class="active">
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
        <h2>Contattaci per qualsiasi dubbio</h2>
        <div class="hr"></div>
    </div>
    <!-- /intro text -->


    <!-- About us -->

    <div class="container">
        <div class="row padding-inner  col-xs-offset-1">

            <!-- Column1 -->
            <div class="col-md-6 col-sm-12">

                <h3> Contact us </h3>


                <form method="post" action="contact/contactengine.php">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="contact-btn btn">Send Message</button>
                </form>




            </div>
            <!-- /column1 -->


            <!-- Column2 -->
            <div class="col-md-4 col-sm-12">
                <h3> Contact info </h3>
                <div class="contact-info">
                    <span class="more"><strong>Adress:</strong> 22 Milano, Milano</span>
                    <span class="more"><strong>Phone:</strong> 000-000-0000</span>
                    <span class="more"><strong>Email:</strong> elia.colombo18@gmail.com</span>
                </div>

                <div class="working-hours">
                    <div class="heading">
                        Working hours
                    </div>
                    <div class="hours"> Monday - Friday: 9:00 am - 5:00 pm</div>
                    <div class="hours"> Saturday: 11:00 am - 3:00 pm</div>
                    <div class="hours"> Sunday - closed</div>
                </div>

            </div>
            <!-- /column2 -->


        </div><!-- /row -->
    </div><!-- /container -->


    <!-- Google Map (adress on map can be changed in app.js file) -->
    <div id="map-canvas"></div>
    <!-- End Google Map -->



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

    <!-- Js app  -->
    <script src="js/app.js"></script>

    <!-- Smooth scroll JS -->
    <script src="js/smoothscroll.js"></script>


</body>

</html>