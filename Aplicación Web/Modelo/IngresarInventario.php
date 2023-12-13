<?php
include('../Config/conexion.php');
$producto=$_POST['producto'];
$descripcion=$_POST['descripcion'];
$valor=$_POST['valor'];
$cantidad=$_POST['cantidad'];
$sql="INSERT into inventario(NOMBRE,DESCRIPCION,VALOR_UNITARIO,STOCK) values ('$producto','$descripcion','$valor','$cantidad')";
mysqli_query($conexion,$sql);
echo '<script language="javascript">alert("Se ha registrado exitosamente");</script>';
include("../Vista/RegistroInv.html");
?>
