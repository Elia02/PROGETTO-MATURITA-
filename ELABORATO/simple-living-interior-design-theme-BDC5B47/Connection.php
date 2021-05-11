<?php   

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "elaborato";

        $conn = new mysqli($servername, $username, $password, $dbName);
        if ($conn->connect_error)
        {
          die("Connection failed: " . $conn->connect_error);
        }

        $sede_appartenenza = $_POST["sede_appartenenza"];
        $branca = $_POST["branca"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $eta = $_POST["eta"];
        $email = $_POST["email"];

        echo "sede_appartenenza: ".$sede_appartenenza;
        echo "<br>";
        echo "branca: ".$branca;
        echo "<br>";
        echo "nome: ".$nome;
        echo "<br>";
        echo "cognome: ".$cognome;
        echo "<br>";
        echo "eta: ".$eta;
        echo "<br>";
        echo "email: ".$email;
        echo "<br>";
        echo "<br>";
        echo "<br>";
        
        $sql = "INSERT INTO `iscritti` (`id_iscritti`, `sede_appartenenza`, `branca`, `nome`, `cognome`, `eta`, `email`)
        VALUES (DEFAULT, '".$sede_appartenenza."', '".$branca."', '".$nome."', '".$cognome."', '".$eta."', '".$email."');";
        

        
        if ($conn->query($sql) === TRUE)
        {
            
            $sql = "SELECT * FROM `iscritti` WHERE
            `sede_appartenenza` = '".$sede_appartenenza."' AND
            `branca` = '".$branca."' AND
            `nome` = '".$nome."' AND
            `cognome` = '".$cognome."' AND
            `eta` = '".$eta."' AND
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
                //header("Location: index.php?insertresult=fail");
            }
        }
        else
        {
            header("Location: registrarsi.php?insertresult=fail");
        }
        
        exit();
    }
?>