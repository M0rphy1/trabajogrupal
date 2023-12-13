<?php
include('../Config/conexion.php');
//Nombres del identificador name, no el id.
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];
$subtotal=$_POST['subtotal'];
$iva=$_POST['iva'];
$total=$_POST['total'];
//Nombres de la BASE DE DATOS
$sql="INSERT into factura(CEDULA, NOMBRE, APELLIDO, DIRECCION,TELEFONO,FECHA,VALOR_SIN_IVA,IVA,PRECIO_TOTAL) values ('$cedula','$nombre','$apellido','$direccion','$telefono','$fecha','$subtotal','$iva','$total')";
mysqli_query($conexion,$sql);
echo '<script language="javascript">alert("Se ha registrado exitosamente");</script>';
include("../Vista/hola.html");
?>