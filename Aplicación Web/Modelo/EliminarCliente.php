<?php
include("../Config/conexion.php");
$id=$_REQUEST['cedula'];
$sql = "DELETE from cliente where CEDULA='$id'";
$resultado = mysqli_query($conexion,$sql);
include("../Vista/InformacionCli.php");
?>