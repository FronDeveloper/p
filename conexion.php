<?php

//$conexion = mysqli_connect("localhost", "root", "", "crud") or die("error conexion");
//echo "Conectado";
$conexion = 'mysql:host=localhost;dbname=crud';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($conexion,$user,$pass);
    //echo "Conectado";
} catch (PDOException $e) {
    echo "Conexión fallida" .$e->getMessage();
}
    

