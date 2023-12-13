<?php
$Vr= $_GET['var1'];
if($Vr==1){
    include("../Vista/RegistroCli.html");
}else{
    if($Vr==2){
        include("../Vista/InformacionCli.php");
    
    }else{
        if($Vr==3){
            include("../Vista/RegistroInv.html");
        
        } else{
            if($Vr==4){
                include("../Vista/ActualizarInv.php");
            
            } else{
                if($Vr==5){
                    include("../Vista/ListaPedidos.php");
                
                } 
             else{
                if($Vr==6){
                    include("../Vista/ActualizarPedido.php");
                
                } else{
                    if($Vr==7){
                        include("../Vista/IngresarPedido.html");
                    
                    } 
                }
            }
        }
    }
}
}
?>