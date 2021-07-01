<?php 
session_start();
unset($_SESSION['resultadoPb']);
unset($_SESSION['resultadoPf']);
unset($_SESSION['resultadoRf']);
unset($_SESSION['resultadoRfComercial']);
header("location: ../index.php");
?>