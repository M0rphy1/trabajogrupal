<?php
    include("../Config/conexion.php");
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $sql= "UPDATE cliente SET NOMBRE = '$nombre', APELLIDO= '$apellido', DIRECCION= '$direccion', TELEFONO='$telefono' WHERE CEDULA='$cedula'";
    mysqli_query($conexion, $sql);
    include("../Modelo/buscar_mostrar_cliente.php");
?>