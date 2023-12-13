<?php
    include("../Config/conexion.php");
    $id=$_POST['idpedido'];
    $fp=$_POST['fechapedido'];
    $fe=$_POST['fechaentrega'];
    $estado=$_POST['estado'];

    $sql= "UPDATE pedidos SET FECHA_PEDIDO= '$fp', FECHA_ENTREGA= '$fe', ESTADO='$estado' WHERE NUM='$id'";
    mysqli_query($conexion, $sql);
    include("../Vista/ActualizarInv.php");
?>

