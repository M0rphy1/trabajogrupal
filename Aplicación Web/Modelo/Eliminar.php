<?php
include("../Config/conexion.php");
$idE=$_REQUEST['idpedido'];
$sql="DELETE from pedidos where NUM='$idE'";
$resultado=mysqli_query($conexion,$sql);
if($resultado){
header("location:../index.html");
}else{
echo "error al eliminar";
}
?>

