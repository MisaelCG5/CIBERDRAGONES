


<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");
// index.php 
header("Location: /CIBERDRAGONES/formulario.html");


$usuario = isset($_POST['usuario']) ?  $_POST['usuario']: '' ;
$password = isset($_POST['password']) ?  $_POST['password']: '' ;
$usuarioTabla = '';
$passwordTabla = '';

$con = new SQLite3("data.db");
$cs = $con ->  query ("INSERT INTO login(usuario, password) VALUES ('$usuario', '$password')");





// 'or '1' = '1 
//$password = $_POST['password']; sin el ISSET
//$ = isset($_POST[' ']) ? $_POST[' '] : '' ;
?>