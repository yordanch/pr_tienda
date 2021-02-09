
function add(doc = ""){
    var frmData = getFormData(doc);

    var d = {
        tb: $("#option_form").val(),
        type: $("#type_form").val(),
        data: frmData
    };

    // modificar
    var link = "../../../serv/server/call_categoria.php";
    if (frmData.nombre_add == "" || frmData.correo_add == "") {
        swal.fire({
            title: "Advertencia",
            text: "No hay datos suficientes",
            icon: "warning"
        });
        return false;
    }
    // fin modificar

    $.ajax({
        method: "POST",
        url: link,
        data: d,
        dataType: "json"
    }).done(function(_data) {
        if (_data.r == "Exito") {
            swal.fire({
                title: "\u00e9xito",
                text: "Categoria agregado",
                icon: "success"
            });
            //getAll();
            $(doc)[0].reset();
        } else {
            swal.fire({
                title: "Ocurrio un error",
                text: "Intente m\u00e1s tarde",
                icon: "error" //"warning", "error", "success" and "info".
            });
        }
    });
    return false;
}
/*
function u(){
   var datos = new FormData($("#form_usuario")[0]);
    $.ajax({
        url:"consultas_msql/u_user.php",
        method:"POST",
        data:datos,
        contentType:false,
        processData:false,
        success:function(r){
           if (r==0) {
                alert("Ocurrió un problema!");
                $('#div').css('border','1px solid red');
            }else{
                alert("Se actualizó correctamente");
            }  
        }
    });
}
function d(idusuario){
    $.ajax({
        url:"consultas_msql/d_user.php",
        method:"POST",
        data:datos,
        contentType:false,
        processData:false,
        success:function(r){
           if (r==0) {
                alert("Ocurrió un problema!");
                $('#div').css('border','1px solid red');
            }else{
                alert("Se eliminó correctamente");
            }  
        }
    });
}
function getAll(){
    
}*/