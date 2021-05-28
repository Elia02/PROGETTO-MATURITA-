<?php   
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        include "connessione.php";

        $sede_appartenenza = $_POST["sede_appartenenza"];
        $id_brancaEs = $_POST["id_brancaEs"];
        $nome = $_POST["nome"];
        $cognome = $_POST["cognome"];
        $email = $_POST["email"];

     
        echo "sede_appartenenza: ".$sede_appartenenza;
        echo "<br>";
        echo "id_brancaEs: ".$id_brancaEs;
        echo "<br>";
        echo "nome: ".$nome;
        echo "<br>";
        echo "cognome: ".$cognome;
        echo "<br>";
        echo "email: ".$email;
        echo "<br>";
        echo "<br>";
        echo "<br>";


            $sql = "SELECT * FROM `iscritti`";
            
            $id_brancaEs = $_POST["id_brancaEs"];
            $sede_appartenenza = $_POST["sede_appartenenza"];
            $nome = $_POST["nome"];
            $cognome = $_POST["cognome"];
            $params = [];
            
            if(!empty($id_brancaEs))
            {
                $params[] = "id_brancaEs = '".$id_brancaEs."'";
            }
    
            if(!empty($sede_appartenenza))
            {
                $params[] = "sede_appartenenza = '".$sede_appartenenza."'";
            }
    
            if(!empty($nome))
            {
                $params[] = "nome LIKE '%".$nome."%'";
            }
    
            if(!empty($cognome))
            {
                $params[] = "cognome LIKE '%".$cognome."%'";
            }
    
            
            
            foreach($params as $i)
            {
                echo $i;
            }
            
            if (count($params) > 0)
            {
                $sql = "SELECT * FROM `iscritti` WHERE ";
                
                foreach($params as $param)
                {
                    $sql .= $param." AND ";
                }
                
                $sql = substr($sql,0,-4);
            }
            $result = $conn->query($sql);
            
            if ($result === TRUE) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $rows = [];
            
            while($row = $result->fetch_assoc())
            {
                $rows[] = $row;
            }
            
            $_SESSION["result"] = $rows;
            
            header("Location: visualizzazioneUtenti.php");
        exit();
    }
?>