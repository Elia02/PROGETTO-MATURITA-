<?php
session_start();
include "connessione.php";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Scout</title>
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
                    <li>
                        <a href="services.php">Attività</a>
                    </li>
                    <li>
                        <a href="registrarsi.php">Registrazione campo</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                    <?php
            //controllo se è effeuttuato il login
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

<!--filtri da poter inserire -->
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <form action="filtri.php" method="POST">
                            <h3 class="text-center text-info">Filtra Per:</h3>
                            <div class="form-group">
                            <h4>
                            <label for="id_brancaEs" class="text-info">il numero degli iscritti è:</label> 
                            <?php
                            $sql = "SELECT count(id_iscritti) as contato FROM iscritti";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo $row["contato"];
                                }
                            }
                            ?>
                            </h4>
                            </div>

                            <div class="form-group">
                                <div class="form-group">
                                    <label for="id_brancaEs" class="text-info">in che branca vuoi inserire l'attività:</label><br>
                                    <select name="id_brancaEs">
                                        <?php
                                        //query per prendere tutte le branche
                                        $sql = "SELECT id_branca, Nome_branca FROM branca";
                                        $result = $conn->query($sql);
                                        //ciclo per ogni sede
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            echo '<option value="' . "0" . '">' . "" . '</option>';
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row["id_branca"] . '">' . $row["Nome_branca"] . '</option>';
                                                //echo "id_branca: " . $row["id_branca"]. " - Nome_branca: " . $row["Nome_branca"]. "<br>";
                                            }
                                        }
                                        ?>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="sede_appartenenza" class="text-info">SEDE APPARTENENZA:</label><br>
                                    <select name="sede_appartenenza">
                                    <?php
                                    //query per prendere tutte le sedi
                                    $sql = "SELECT id, Sede FROM sedi_scout";
                                    $result = $conn->query($sql);
                                    //ciclo per ogni sede
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        echo '<option value="' . "0" . '">' . "" . '</option>';
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row["id"] . '">' . $row["Sede"] . '</option>';
                                            //echo "id: " . $row["id"]. " - Sede: " . $row["Sede"]. "<br>";
                                        }
                                    }
                                    //echo '<option value="$ID_SEDE"'>$NOME</option>';
                                    ?>
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
                                <label for="email" class="text-info">email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                                </div>


                                <input type="submit" name="inserire" value="inserire" class="btn btn-info btn-md">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br> <br>
<?php
            $risultatiperpage = 25;

            if (isset($_GET['page'])) {
                if ($_GET['page'] > 1) {
                    $start = ($_GET['page'] - 1) * $risultatiperpage;
                } else {
                    $start = 0;
                }
            } else {
                $start = 0;
            }
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $sql = $conn->query("SELECT COUNT(*) as conteggio from iscritti");
            $array = $sql->fetch_assoc();
            $totalerighe = $array['conteggio'];
            $pages = ceil($totalerighe / $risultatiperpage);
            $query = $conn->query("SELECT * FROM iscritti LIMIT " . $start . "," . $risultatiperpage);
            $Previous = $page - 1;
            $Next = $page + 1;
    //tabella per visualizzare i dati degli iscritti

    echo "<table align=" . '"' . "center" . '"' . ">
                          <tr>
                            <th>id_iscritti</th>
                            <th>codice_persona</th>
                            <th>sede_appartentenza/th>
                            <th>id_brancaEs</th>
                            <th>nome</th>
                            <th>cognome</th>
                            <th>codice_fiscale</th>
                            <th>patologie</th>
                            <th>email</th>
                          </tr>";


                for ($i = $start; $i < $risultatiperpage + $start; $i++) {

                    if (array_key_exists($i, $_SESSION["result"])) {
                        $row = $_SESSION["result"][$i];
                        echo "<tr>";

                        echo "<td>" . $row['id_iscritti'] . "</td>";
                        echo "<td>" . $row['codice_persona'] . "</td>";
                        echo "<td>" . $row['sede_appartenenza'] . "</td>";
                        echo "<td>" . $row['id_brancaEs'] . "</td>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['cognome'] . "</td>";
                        echo "<td>" . $row['codice_fiscale'] . "</td>";
                        echo "<td>" . $row['patologie'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "</tr>";
                    }
                }

                echo "</table>";
                ?>

<nav aria-label="Page navigation">
                <ul class="pagination">
                    
                        <a href="visualizzazioneUtenti.php?page=<?= $Previous; ?>" aria-label="Previous">
                            <span aria-hidden="true">&laquo; Precedente </span>
                        </a>
                    
                        &nbsp;
                        &nbsp;
                        
                    
                        <a href="visualizzazioneUtenti.php?page=<?= $Next; ?>" aria-label="Next">
                            <span aria-hidden="true"> Successiva &raquo;</span>
                        </a>
                    
                </ul>
            </nav>
</body>
</html>