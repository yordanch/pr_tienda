<?php 
	class Tienda
	{
		var $ruc;
		var $direccion;
		var $nombre;
		var $telefono;
		var $coordinadas;
		var $fechareg;
		var $horareg;
		var $correo;
		var $distrito;
		var $usuarios_correo;
		var $categ_tien_id;

		public $serv;

	    function __construct(){

	    }
	    function add(){
			$res = array();
            $val = "'".$this->nombres."', '".$this->apellido."', '".$this->correo."', '".$this->telefono."', '".$this->sexo."', '".$this->fechana."', '".$this->acceso."', '".$this->tipo."', '".$this->fechareg."', '".$this->horareg."', '".$this->passw."'";
            $table = "usuarios(nombres, apellido, correo, telefono, sexo, fechana, acceso, tipo, fechareg, horareg, passw)";
            if($v=="") $this->serv->cnS = "INSERT INTO ".$table." VALUES (".$val.")";
            else $this->serv->cnS = "INSERT INTO ".$table." VALUES ".$v."";
            
            $res = $this->serv->ejecutarConsultaD();
            return $res;
	    }
	    function upd(){

	    }
	    function getAll(){

	    }
	    function getById(){
	            
	    }
	    function del(){

	    }
        
}
?>