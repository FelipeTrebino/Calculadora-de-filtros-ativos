<?php 

require_once($_SERVER['DOCUMENT_ROOT'].
	"/controle/Calculadora.php");

$fc1 = $_POST["fc1"];
$fc2  = $_POST["fc2"];

$resultado=Calculadora::rejeitaFaixa($fc1,$fc2);

session_start();
$_SESSION["resultadoRf"] = serialize($resultado);

 header("location: ../index.php");
?>