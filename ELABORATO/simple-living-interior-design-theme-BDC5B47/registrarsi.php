<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>login-form - Bootsnipp.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap Core CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open%20Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

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
                        <a href="services.php">Attività</a>
                    </li>
                    <li class="active">
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

    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form action="connection.php" method="POST">
                            <h3 class="text-center text-info">Register</h3>
                            <div class="form-group">
                                <label for="sede_appartenenza" class="text-info">SEDE APPARTENENZA:</label><br>
                                <select name="sede_appartenenza">
                                <?php

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbName = "elaborato";

                                $conn = new mysqli($servername, $username, $password, $dbName);
                                if ($conn->connect_error)
                                {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                

                                    //query per prendere tutte le sedi
                                    $sql = "SELECT id, Sede FROM sedi_scout";
                                    $result = $conn->query($sql);
                                    //ciclo per ogni sede
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        echo '<option value="'."0".'">'."".'</option>';
                                        while($row = $result->fetch_assoc()) {
                                            echo '<option value="'.$row["id"].'">'.$row["Sede"].'</option>';
                                            //echo "id: " . $row["id"]. " - Sede: " . $row["Sede"]. "<br>";
                                        }
                                    }
                                        //echo '<option value="$ID_SEDE"'>$NOME</option>';
                                ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="branca" class="text-info">branca:</label><br>
                                <select name="branca">
                                    <option value=""></option>
                                    <option value="Branco">Branco</option>
                                    <option value="Reparto">Reparto</option>
                                    <option value="Compagnia">Compagnia</option>
                                    <!--<option value="Capi">Capi</option>-->
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nome" class="text-info">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="cognome" class="text-info">Cognome:</label><br>
                                <input type="text" name="cognome" id="cognome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="eta" class="text-info">Età:</label><br>
                                <input type="Number" name="eta" id="eta" class="form-control" min="5">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-info">email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                            <input type="submit" name="registrarsi" value="registrarsi" class="btn btn-info btn-md">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["insertresult"])) {
        echo "<br>";
        switch ($_GET["insertresult"]) {
            case "success":
                echo "<p style=" . '"' . "color:green" . '"' . ">&nbsp;&nbsp;&nbsp; ISCRIZIONE CONFERMATA";
                break;
            case "fail":
                echo "<p style=" . '"' . "color:red" . '"' . ">errore comunicazione col server<p>";
                break;
        }
    }
    ?>

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

    <script type="text/javascript">

    </script>
</body>

</html>