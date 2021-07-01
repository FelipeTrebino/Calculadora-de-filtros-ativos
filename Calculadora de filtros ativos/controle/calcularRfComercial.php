<?php 

require_once($_SERVER['DOCUMENT_ROOT'].
	"/controle/Calculadora.php");

$R1 = $_POST["r1"];
$R2  = $_POST["r2"];
$R3  = $_POST["r3"];
$C  = $_POST["c"];

$resultado=Calculadora::rejeitaFaixaReverso($R1,$R2,$R3,$C);
session_start();
$_SESSION["resultadoRfComercial"] = serialize($resultado);

 header("location: ../index.php");
?>