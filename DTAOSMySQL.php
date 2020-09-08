<?php
$nombre=$_REQUEST["nombre"];
$apellido=$_REQUEST["apellido"];
$edad=$_REQUEST["edad"];
$telefono=$_REQUEST["telefono"];
$correo=$_REQUEST["correo"];
//$corriculum
if($nombre!="" || $apellido!="" || $edad!="" || $telefono!="" || $correo!=""){
	$con =mysql_connect("localhost","root","") or die("Sin conexion")
	echo $sql = "INSERT INTO suario_new(nombre,apellido,fecha,telefono,email,usuario,contrasena
	values('$nombre','$apellido','$fecha','$telefono','$email','$usuario','$contrasena')";
	$result=mysql_query($sql,$con);
	echo $result;
}else{
	echo "-1";
}
?>