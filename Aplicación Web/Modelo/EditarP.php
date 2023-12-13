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
    <center><h1>ACTUALIZAR</h1></center>
</body>
</html>
<?php
    include("../Config/conexion.php");
    $nombre= $_GET ['nombre'];
    $sql = "SELECT * FROM inventario WHERE NOMBRE='$nombre'";
    $resultado = mysqli_query($conexion, $sql);
    ?>
    <?php

    while($mostrar = mysqli_fetch_array($resultado)){
        ?>
                <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Document</title>
                </head>
                <body>
                    <Form action="../Modelo/guardar_editar_producto.php" method="post">
                    <?php
                    include("../Vista/TablaInventario.html");
                    ?>
                    <tr>
                    <td><input type="text" value="<?php echo $mostrar['NOMBRE']?>" name="nombre"></td>
                    <td><input type="text" value="<?php echo $mostrar['DESCRIPCION']?>" name="descripcion"></td>
                    <td><input type="text" value="<?php echo $mostrar['VALOR_UNITARIO']?>" name="valor"></td>
                    <td><input type="text" value="<?php echo $mostrar['STOCK']?>" name="stock"></td>
                    </tr>
                    </table>
                    <center><input type="submit" value="Guardar"></center>
                    </Form>
                </body>
                </html>
        <?php
        }
?>