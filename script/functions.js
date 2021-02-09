function getFormData(form){ // valid
    var unindexed_array = $(form).serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}
//funcion para geolocalizar coordenadas
function micoord(){
    if (navigator.geolocation) {
        document.getElementById('coord_add').value="Buscando ubicación...";
    }else{
        document.getElementById('coord_add').value="Navegador no soporta! :";
    }
    function localizacion(posicion){
        var latitude =posicion.coords.latitude;
        var longitude =posicion.coords.longitude;

        document.getElementById('coord_add').value=""+latitude+","+longitude+"";    
    }
    function error(){
        document.getElementById('coord_add').value = "Reintentar...";
    }
    navigator.geolocation.getCurrentPosition(localizacion,error);
}