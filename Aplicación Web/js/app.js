function calcular(){
    var iva = document.getElementById("iva").value;
    var b = 2;
    var g = 1.50;
    var p = 2.50;
    var cb = document.getElementById("cbote").value;
    var cg = document.getElementById("cgalo").value;
    var cp = document.getElementById("cpaque").value;
    iva = iva/100;
    var subtotal = ((b*cb)+(g*cg)+(p*cp));
    var total = ((b*cb)+(g*cg)+(p*cp))*iva + ((b*cb)+(g*cg)+(p*cp));
    document.getElementById("total").value = total;
    document.getElementById("subtotal").value = subtotal;
}

function comprobar(){
    var v1 = document.getElementById("cedula").value;
    var v2 = document.getElementById("nombre").value;
    var v3 = document.getElementById("apellido").value;
    var v4 = document.getElementById("direccion").value;
    var v5 = document.getElementById("telefono").value;
    var v6 = document.getElementById("fecha").value;
    var v7 = document.getElementById("iva").value;
    var v8 = document.getElementById("subtotal").value;
    var v9 = document.getElementById("total").value;
    if(v1 == "" || v2 == "" || v3 == "" || v4 == "" || v5 == "" || v6 == "" || v7 == "" || v8 == "" || v9 == ""){
        alert("Complete todos los campos");
    }else{
        alert("Información ingresada satisfactoriamente");
        location.href='Ingreso_PedidoFac.html';
    }
}