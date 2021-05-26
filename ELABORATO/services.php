<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>attività</title>

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
                    <li>
                        <a href="about.php">About us</a>
                    </li>
                    <li class="active">
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
    <?php
            //controllo se è effeuttuato il login
            if (isset($_SESSION["id_amministratore"])) {
                echo " <a href=\"logout.php\" id=\"movimento_login\"> LOGOUT </a>";
            }else{
               echo " <a href=\"login_amministratore.php\" id=\"movimento_login\"> LOGIN </a>";
            }
            
?>
        
        <ul class="nav navbar-nav">
            <li>
                <a href="Branco.php">Branco</a>
            </li>
            <li class="active">
                <a href="Reparto.php">Reparto</a>
            </li>
            <li>
                <a href="Compagnia.php">Compagnia</a>
            </li>
        </ul>
        <div class="hr"></div>
    </div>
    <!-- /intro text -->

<?php
            //controllo se è effeuttuato il login
            if (isset($_SESSION["id_amministratore"])) {
    echo "<div class=\"organizzatori\">
        <input type=\"button\" name=\"inserimento\" value=\"inserisci attività\" class=\"btn btn-info btn-md\" onclick=\"window.location.href='aggiungi_attivita.php'\">
    </div>";
}           
?>

    <div id="footer">
        <div class="footerTop">
            <div class="container">
                <div class="row">
                    <!-- Footer Box1 -->
                    <div class="col-md-3 col-sm-3 col-xs-offset-2">
                        <h5>Contact info:</h5>
                        <p>22 Central Park South</p>
                        <p> NY 10019</p>
                        <p>Phone: 212-222-4000</p>
                        <p>Email: <a href="mailto:simpleliving@office.com">simpleliving@office.com</a></p>
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