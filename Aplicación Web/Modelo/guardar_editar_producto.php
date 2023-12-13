<?php
    include("../Config/conexion.php");
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $valor = $_POST['valor'];
    $stock = $_POST['stock'];
    $sql= "UPDATE inventario SET DESCRIPCION= '$descripcion', VALOR_UNITARIO= '$valor', STOCK='$stock' WHERE NOMBRE='$nombre'";
    mysqli_query($conexion, $sql);
    include("../Vista/ActualizarInv.php");
?>