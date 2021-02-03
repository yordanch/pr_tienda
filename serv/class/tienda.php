<?php 
	class tiendas
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
            $val = "'".$this->ruc."', '".$this->direccion."', '".$this->nombre."', '".$this->telefono."', '".$this->coordinadas."', '".$this->fechareg."', '".$this->horareg."', '".$this->correo."', '".$this->distrito."', '".$this->usuarios_correo."', '".$this->categ_tien_id."'";
            $table = "tienda(ruc, direccion, nombre, telefono, coordinadas, fechareg, horareg, correo, distrito, usuarios_correo, categ_tien_id)";
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