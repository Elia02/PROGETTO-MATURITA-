<?php
session_start();

$_SESSION["id_amministratore"] = null;
header("Location: services.php");
?>