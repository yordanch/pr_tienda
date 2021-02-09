<a href="javascript:micoord()">Mi ubicación</a>
<input type="text" class="form-control" id="coord_add" name="coord_add" placeholder="Ingresar coordenadas">
<script type="text/javascript">
	 function micoord(){
    var coordenadas = document.getElementById('coord_add');
    if (navigator.geolocation) {
        coordenadas.innerHTML="<p> Navegador soporta</p>";
    }else{
        coordenadas.innerHTML="<p> Navegador no soporta</p>";
    }
    function localizacion(posicion){
        var latitude =posicion.coords.latitude;
        var longitude =posicion.coords.longitude;

        coordenadas.innerHTML="<p>Latitud: "+latitude+"<br>Longitud: "+longitude+"</p>";    
    }
    function error(){
        coordenadas.innerHTML = "<p>No se pudo obtener la ubicación</p>";
    }
    navigator.geolocation.getCurrentPosition(localizacion,error);
}
</script>