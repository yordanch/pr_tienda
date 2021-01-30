/*
function add(){
    var datos = new FormData($("#form_usuario")[0]);
    $.ajax({
        url:"consultas_msql/add_user.php",
        method:"POST",
        data:datos,
        contentType:false,
        processData:false,
        success:function(r){
           if (r==0) {
                alert("Ya existe registrado el correo!");
                $('#correo').css('border','1px solid red');
            }else{
                alert("Se registró correctamente");
            }  
        }
    });
}
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