<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

include_once('conexion.php');

$nombre = isset($_POST['txNombre']);
$usuario = isset($_POST['txUsuario']);
$contrasena = isset($_POST['txContrasena']);

var_dump($_POST);

//$consulta = "(INSERT INTO `registro` (`nombre`, `usuario`, `contraseña`)
//VALUES ($nombre, $usuario, $contrasena)";

//$resultado = mysqli_query($pdo, $consulta) or die("error de registro");
//echo "Registro exitoso";

//mysqli_close($pdo);

$consulta = 'INSERT INTO registro (nombre, usuario, contraseña) VALUES (?,?,?)';
$sql_sentencia = $pdo->prepare($consulta);
$sql_sentencia->execute(array($nombre,$usuario,$contrasena));
$sql_sentencia = null;
$pdo = null;
echo 'Registro exitoso';



