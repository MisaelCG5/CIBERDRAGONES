<?php
error_reporting(E_ALL ^ E_DEPRECATED);
header("content-Type: text/html; charset=UTF-8");


$usuario = isset($_POST['usuario']) ?  $_POST['usuario']: '' ;
$password = isset($_POST['password']) ?  $_POST['password']: '' ;
$usuarioTabla = '';
$passwordTabla = '';

$con = new SQLite3("data.db");
$cs = $con ->  query (" SELECT * FROM login WHERE usuario = '$usuario' AND password = '$password' ");
while ( $result = $cs -> fetchArray()) {

    $usuarioTabla = $result['usuario'];
    $passwordTabla = $result['password'];
   
}

if ($usuario == $usuarioTabla){
    if ($password == $passwordTabla){
echo 'USUARIO CORRECTO';
echo "<br>";
header("Location: /CIBERDRAGONES/index.php");
    }

} else {
   
    echo 'USUARIO INCORRECTO';
     echo "<br>";
}

// 'or '1' = '1 
//$password = $_POST['password']; sin el ISSET
//$ = isset($_POST[' ']) ? $_POST[' '] : '' ;
?>