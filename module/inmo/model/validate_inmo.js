function validate_catastro(texto){
    if (texto.length > 0){
        var reg=/^[0-9]*$/;
        return reg.test(texto);
    }
    return false;
}

function validate_campo(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_tipo(texto){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_opcion(array){
    var i;
    var ok=0;
    for(i=0; i<array.length;i++){
        if(array[i].checked){
            ok=1
        }
    }
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_ascensor(array){
    var i;
    var ok=0;
    for(i=0; i<texto.length;i++){
        if(texto[i].checked){
            ok=1
        }
    }
 
    if(ok==1){
        return true;
    }
    if(ok==0){
        return false;
    }
}

function validate_fecha(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate(){
    // console.log('hola validate js');
    // return false;

    var check=true;
    
    var v_id_ref=document.getElementById('id_ref').value;
    // console.log(v_id_ref);
    // return false;
    var v_descripcion=document.getElementById('descripcion').value;
    var v_opcion=document.getElementById('opcion[]').value;
    var v_tipo=document.getElementById('tipo').value;
    var v_m2=document.getElementsByName('m2').value;
    var v_precio=document.getElementById('precio').value;
    var v_habs=document.getElementById('habs').value;
    var v_banys=document.getElementById('banys').value;
    var v_ascensor=document.getElementById('ascensor').value;
    var v_publicado=document.getElementsByName('publicado').value;
    
    var r_id_ref=validate_catastro(v_id_ref);
    // console.log(r_id_ref);
    // return false;
    var r_descripcion=validate_campo(v_descripcion);
    var r_opcion=validate_opcion(v_opcion);
    var r_tipo=validate_campo(v_tipo);
    var r_m2=validate_campo(v_m2);
    var r_precio=validate_campo(v_precio);
    var r_habs=validate_campo(v_habs);
    var r_banys=validate_campo(v_banys);
    var r_ascensor=validate_ascensor(v_ascensor);
    var r_publicado=validate_fecha(v_publicado);
    
    if(!r_id_ref){
        document.getElementById('error_id_ref').innerHTML = " * La referencia catastral introducida no es valida";
        // console.log(r_id_ref);
        // return false;
        check=false;
    }else{
        document.getElementById('error_id_ref').innerHTML = "";
    }
    if(!r_descripcion){
        document.getElementById('error_descripcion').innerHTML = " * La descripcion introducida no es valida";
        check=false;
    }else{
        document.getElementById('error_descripcion').innerHTML = "";
    }
    if(!r_opcion){
        document.getElementById('error_opcion').innerHTML = " * No has seleccionado ninguna opcion";
        check=false;
    }else{
        document.getElementById('error_opcion').innerHTML = "";
    }
    if(!r_tipo){
        document.getElementById('error_tipo').innerHTML = " * No has seleccionado ningun tipo";
        check=false;
    }else{
        document.getElementById('error_tipo').innerHTML = "";
    }
    if(!r_m2){
        document.getElementById('error_m2').innerHTML = " * Los metros cuadrados introducidos no son validos";
        check=false;
    }else{
        document.getElementById('error_sexo').innerHTML = "";
    }
    if(!r_precio){
        document.getElementById('error_precio').innerHTML = " * El precio introducido no es valido";
        check=false;
    }else{
        document.getElementById('error_precio').innerHTML = "";
    }
    if(!r_habs){
        document.getElementById('error_habs').innerHTML = " * Las habitaciones introducidas no es valida";
        check=false;
    }else{
        document.getElementById('error_habs').innerHTML = "";
    }
    if(!r_banys){
        document.getElementById('error_banys').innerHTML = " * Los banyos introducidos no es valido";
        check=false;
    }else{
        document.getElementById('error_banys').innerHTML = "";
    }
    if(!r_ascensor){
        document.getElementById('error_ascensor').innerHTML = " * No has seleccionado ningun campo";
        check=false;
    }else{
        document.getElementById('error_ascensor').innerHTML = "";
    }
    if(!r_publicado){
        document.getElementById('error_publicado').innerHTML = " * No has seleccionado ninguna fecha";
        check=false;
    }else{
        document.getElementById('error_publicado').innerHTML = "";
    }
    return check;
}