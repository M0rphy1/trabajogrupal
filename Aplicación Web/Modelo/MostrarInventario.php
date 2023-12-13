<?php
include("../Config/conexion.php");
$sql= "SELECT*from inventario";
$resultado=mysqli_query($conexion,$sql);
//Nombres de variables de BASE DE DATOS.
include("../Vista/TablaInventario.html");
?>
    <td>Eliminar</td>
    <td>Editar</td>
    </tr>
<?php
while($Mostrar=mysqli_fetch_array($resultado))
{
?>
    <tr>
    <td><?php echo $Mostrar['NOMBRE']?></td> 
    <td><?php echo $Mostrar['DESCRIPCION']?></td>
    <td><?php echo $Mostrar['VALOR_UNITARIO']?></td>
    <td><?php echo $Mostrar['STOCK']?></td>
    <td><a href="../Modelo/EliminarProducto.php?nombre=<?php echo $Mostrar['NOMBRE']?>">Eliminar</a></td>
    <td><a href="../Modelo/EditarP.php?nombre=<?php echo $Mostrar['NOMBRE']?>">Editar</a></td>
    <tr>
    <?php   
}
?>
</table>