<?php   
        
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include "connessione.php";

        $codice_persona = $_POST["codice_persona"];
        $sede_appartenenza = $_POST["sede_appartenenza"];
        $id_brancaEs = $_POST["id_brancaEs"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $codice_fiscale = $_POST["codice_fiscale"];
        $patologie = $_POST["patologie"];
        $email = $_POST["email"];

        echo "codice_persona: ".$codice_persona;
        echo "<br>";        
        echo "sede_appartenenza: ".$sede_appartenenza;
        echo "<br>";
        echo "id_brancaEs: ".$id_brancaEs;
        echo "<br>";
        echo "nome: ".$nome;
        echo "<br>";
        echo "cognome: ".$cognome;
        echo "<br>";
        echo "codice_fiscale: ".$codice_fiscale;
        echo "<br>";
        echo "patologie: ".$patologie;
        echo "<br>";
        echo "email: ".$email;
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        $sql = "INSERT INTO `iscritti` (`id_iscritti`,`codice_persona`, `sede_appartenenza`, `id_brancaEs`, `nome`, `cognome`, `codice_fiscale`,`patologie`, `email`)
        VALUES (DEFAULT,'".$codice_persona."', '".$sede_appartenenza."', '".$id_brancaEs."', '".$nome."', '".$cognome."', '".$codice_fiscale."','".$patologie."', '".$email."');";
        
        //echo $sql;
        
        if ($conn->query($sql) === TRUE)
        {
            
            $sql = "SELECT * FROM `iscritti` WHERE
            `codice_persona` = '".$codice_persona."' AND
            `sede_appartenenza` = '".$sede_appartenenza."' AND
            `id_brancaEs` = '".$id_brancaEs."' AND
            `nome` = '".$nome."' AND
            `cognome` = '".$cognome."' AND
            `codice_fiscale` = '".$codice_fiscale."' AND
            `patologie` = '".$patologie."' AND
            `email` = '".$email."';";
            
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                  
                header("Location: registrarsi.php?insertresult=success&id=".$row["id_iscritti"]);
              }
            }
            else
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location: registrarsi.php?insertresult=fail");
            }
        }
        else
        {
            //header("Location: Connection.php?insertresult=fail");
            
  echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        exit();
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        include "connessione.php";

        $email = $_GET["email"];
        $psw = $_GET["psw"];
        $psw = md5($psw);

        echo "email: ".$email;
        echo "<br>";
        echo "psw: ".$psw;


        $sql = "SELECT * FROM amministratore WHERE email ='$email' AND psw = '$psw'";
        $result = $conn->query($sql);
        echo $sql;

        if ($result->num_rows > 0) {
                header("Location: aggiungi_attivita.php?");
            }else{
                header("Location: login_amministratore.php?insertresult=fail");
            }
        
        exit();
    }
?>