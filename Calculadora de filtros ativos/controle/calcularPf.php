<?php 

require_once($_SERVER['DOCUMENT_ROOT'].
	"/controle/Calculadora.php");

$k = $_POST["k"];
$fc1 = $_POST["fc1"];
$fc2  = $_POST["fc2"];

$resultado=Calculadora::passaFaixa($k,$fc1,$fc2);

session_start();
$_SESSION["resultadoPf"] = serialize($resultado);

 header("location: ../index.php");
?>