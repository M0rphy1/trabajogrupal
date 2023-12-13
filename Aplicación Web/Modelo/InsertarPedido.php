<?php
include('../Config/conexion.php');
//Nombres del identificador name, no el id.
$id=$_POST['idpedido'];
$fp=$_POST['fechapedido'];
$fe=$_POST['fechaentrega'];
$estado=$_POST['estado'];
//Nombres de la BASE DE DATOS
$comprobacion = "SELECT NUM FROM pedidos WHERE NUM='$id'";
if($comprobacion != null){
    $sql="INSERT into pedidos(NUM,FECHA_PEDIDO,FECHA_ENTREGA,ESTADO) values ('$id','$fp','$fe','$estado')";
    mysqli_query($conexion,$sql);
    echo '<script language="javascript">alert("Se ha ingresado exitosamente");</script>';
    include("../Vista/IngresarPedido.html");
}else{
    echo '<script type="text/javascript">
            window.onload = function () { alert("Número del pedido ya registrado"); }
    </script>';
    include("../Vista/IngresarPedido.html");
}
?>

