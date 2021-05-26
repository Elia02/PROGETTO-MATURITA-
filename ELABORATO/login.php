<?php
session_start();
include "connessione.php";

 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
     include "connessione.php";

     $email = $_POST["email"];
     $psw = $_POST["psw"];
     $psw = md5($psw);

     echo "email: ".$email;
     echo "<br>";
     echo "psw: ".$psw;


     $sql = "SELECT * FROM amministratore WHERE email ='$email' AND psw = '$psw'";
     $result = $conn->query($sql);
     echo $sql;

     if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
                $_SESSION["id_amministratore"] = $row["id_amministratore"];
            }
             header("Location: services.php");
         }else{
             header("Location: login_amministratore.php?insertresult=fail");
         }
     
     exit();
 }
?>