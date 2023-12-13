<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infomación cliente</title>
    <link type="text/css" rel="stylesheet" href="../style.css" />
    <script src="../Public/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
</head>
<body>
    <div class="burbujas">
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
        <div class="burbuja"></div>
    </div>
    <div class="navbar-container">
        <div class="navbar">
            <div class="navbar-left">
                <div><a href="index.html"><img src="LogoPublicaciones.png" alt="" width="80px"></a></div>
                <div><a class="" href="../Clientes.html">Clientes</a></div>
                <div><a class="" href="../Inventario.html">Inventario</a></div>
                <div><a class="" href="../Pedidos.html">Pedidos</a></div>
                <div><a class="" href="../Facturacion.html">Facturación</a></div>
                <div><a class="" href="">Reportes</a></div>
                <div><a class="" href="">Ayuda</a></div>
            </div>
        </div>
    </div>
    <center><h1>CLIENTES</h1></center>
</body>
</html>
<?php
include("../Config/conexion.php");
$cedula= $_POST['cedula'];
$sql= "SELECT * FROM cliente where CEDULA='$cedula'";
$resultado=mysqli_query($conexion,$sql);
//Nombres de variables de BASE DE DATOS.
include("../Vista/TablaCliente.html");
while($Mostrar=mysqli_fetch_array($resultado))
{
    ?>
            <td>Eliminar</td>
            <td>Editar</td>
        </tr>
    <tr>
    <td><?php echo $Mostrar['CEDULA']?></td> 
    <td><?php echo $Mostrar['NOMBRE']?></td>
    <td><?php echo $Mostrar['APELLIDO']?></td>
    <td><?php echo $Mostrar['DIRECCION']?></td>
    <td><?php echo $Mostrar['TELEFONO']?></td>
    <td><a href="../Modelo/EliminarCliente.php?cedula=<?php echo $Mostrar['CEDULA']?>">Eliminar</a></td>
    <td><a href="../Modelo/EditarCli.php?cedula=<?php echo $Mostrar['CEDULA']?>">Editar</a></td>
    <tr>
</table>
</center>
    <?php   
}

?>