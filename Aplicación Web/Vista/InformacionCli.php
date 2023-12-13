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
    <center><h1>BUSQUEDA CLIENTE</h1>
    <form action="../Modelo/buscar_mostrar_cliente.php" method="post">
        <label for="">Ingrese la cédula</label>
        <input type="text" name="cedula" id="">
        <input type="submit" value="Buscar">
    </form>
    </center>
</body>
</html>