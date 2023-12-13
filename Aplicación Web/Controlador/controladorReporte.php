<?php
$Vr= $_GET['var1'];
if($Vr==1){
    include("../Modelo/Reporte.php");
}else{
    if($Vr==2){
        include("../Modelo/Reporte1.php");
    
    }else{
        if($Vr==3){
            include("../Modelo/Reporte2.php");
        
        } else{
            if($Vr==4){
                include("../Modelo/Reporte3.php");
            
            } else{
                if($Vr==5){
                    include("../Modelo/Reporte4.php");
                } 
             else{
                if($Vr==6){
                    include("../Modelo/Reporte5.php");
                } 
             else{
               echo("Ninguna opción válida");
             }          
                        
                
            }
            }
        }
    }
}

?>