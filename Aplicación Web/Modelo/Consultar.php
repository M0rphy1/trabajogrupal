<?php
include("../Config/conexion.php");
$sql= "SELECT*from pedidos";
$resultado=mysqli_query($conexion,$sql);

while($Mostrar=mysqli_fetch_array($resultado))
{
    ?>
    <tr>
    <td><?php echo $Mostrar['NUM']?></td> 
    <td><?php echo $Mostrar['FECHA_PEDIDO']?></td>
    <td><?php echo $Mostrar['FECHA_ENTREGA']?></td>
    <td><?php echo $Mostrar['ESTADO']?></td> 
    <tr>
    <?php   
}

?>