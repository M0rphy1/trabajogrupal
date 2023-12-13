<?php
include('../Config/conexion.php');
//Nombres del identificador name, no el id.
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
//Nombres de la BASE DE DATOS
$comprobacion = "SELECT CEDULA FROM cliente WHERE CEDULA='$cedula'";
if($comprobacion != null){
    $sql="INSERT into cliente(CEDULA, NOMBRE, APELLIDO, DIRECCION,TELEFONO ) values ('$cedula','$nombre','$apellido','$direccion','$telefono')";
    mysqli_query($conexion,$sql);
    echo '<script language="javascript">alert("Se ha registrado exitosamente");</script>';
    include("../Vista/RegistroCli.html");
}else{
    echo '<script type="text/javascript">
            window.onload = function () { alert("Cédula de cliente ya registrada"); }
    </script>';
    include("../Vista/RegistroCli.html");
}
?>

