<?php 

require_once($_SERVER['DOCUMENT_ROOT'].
	"/controle/Calculadora.php");


$k = $_POST["k"];
$fc = $_POST["fc"];
$filtro  = $_POST["filtro"];
$nFaixas  = $_POST["nFaixas"];
$fr  = $_POST["fr"];

$resultado=Calculadora::passaBaixa2($k,$fc,$filtro,$nFaixas,$fr);

session_start();
$_SESSION["resultadoPb"] = serialize($resultado);

 header("location: ../index.php");
?>