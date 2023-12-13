<?php
include("../Config/conexion.php");
$nombre=$_REQUEST['nombre'];
$sql = "DELETE from inventario where NOMBRE='$nombre'";
$resultado = mysqli_query($conexion,$sql);
echo '<script language="javascript">alert("Se ha eliminado exitosamente");</script>';
include("../Vista/ActualizarInv.php");
?>