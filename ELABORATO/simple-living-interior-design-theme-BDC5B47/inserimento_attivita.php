<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "connessione.php";

    $Nome_attivita = $_POST["Nome_attivita"];
    $Giorno_settimana = $_POST["Giorno_settimana"];
    $Ore_attivita = $_POST["Ore_attivita"];
    $id_brancaEs2 = $_POST["id_brancaEs2"];
    $spiegazione = $_POST["spiegazione"];

    echo "Nome_attivita: " . $Nome_attivita;
    echo "<br>";
    echo "Giorno_settimana: " . $Giorno_settimana;
    echo "<br>";
    echo "Ore_attivita: " . $Ore_attivita;
    echo "<br>";
    echo "id_brancaEs2: " . $id_brancaEs2;
    echo "<br>";
    echo "spiegazione: " . $spiegazione;
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $sql = "INSERT INTO `attivita` (`id_attivita`,`Nome_attivita`, `Giorno_settimana`, `Ore_attivita`, `id_brancaEs2`, `spiegazione`)
        VALUES (DEFAULT,'" . $Nome_attivita . "', '" . $Giorno_settimana . "', '" . $Ore_attivita . "', '" . $id_brancaEs2 . "', '" . $spiegazione . "');";

    //echo $sql;

    if ($conn->query($sql) === TRUE) {

        $sql = "SELECT * FROM `iscritti` WHERE
            `Nome_attivita` = '" . $Nome_attivita . "' AND
            `Giorno_settimana` = '" . $Giorno_settimana . "' AND
            `Ore_attivita` = '" . $Ore_attivita . "' AND
            `id_brancaEs2` = '" . $id_brancaEs2 . "' AND
            `spiegazione` = '" . $spiegazione . "';";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                header("Location: aggiungi_attivita.php?insertresult=success&id=" . $row["id_attivita"]);
            }
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            header("Location: aggiungi_attivita.php?insertresult=fail");
        }
    } else {
        //header("Location: Connection.php?insertresult=fail");

        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    exit();
}
?>