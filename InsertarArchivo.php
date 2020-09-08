<?php
require("ConexionNoSegura.php");
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$query="INSERT INTO usuario_new (nombre , apellido) VALUES ('$nombre', '$apellido')";
mysqlite_query($conexion,$query) or die(mysql_error());
mysql_close($conexion);