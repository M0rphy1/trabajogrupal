<?php
include("../Config/conexion.php");
$id= $_POST['idpedido'];
$sql="SELECT * from pedidos where NUM='$id'";
$resultado=mysqli_query($conexion,$sql);
include("../Vista/Tabla.html");

while($Mostrar=mysqli_fetch_array($resultado))
{
    
    ?>
    <table border="1"  cellpadding="10" bgcolor=dddddd width="700px" align="center" textalign="cent">
    <tr>
    <td><?php echo $Mostrar['NUM']?></td> 
    <td><?php echo $Mostrar['FECHA_PEDIDO']?></td>
    <td><?php echo $Mostrar['FECHA_ENTREGA']?></td>
    <td><?php echo $Mostrar['ESTADO']?></td> 
    <td><a href="Eliminar.php?idpedido=
    <?php echo $Mostrar['NUM']?>">Eliminar</a></td>
    <td><a href="Editar.php?idpedido=
    <?php echo $Mostrar['NUM']?>">Editar</a></td>
    <tr>
    </table>
    <?php   
}
?>


