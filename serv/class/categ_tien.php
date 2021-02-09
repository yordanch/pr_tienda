<?php 
	class categ_tien
	{
	    var $categoria;
        var $correo;
        
        public $serv;

        function __construct(){
            
        }
        function add($v=""){
            $res = array();
            $val = "'".$this->categoria."', '".$this->correo."'";
            $table = "categ_tien(categoria, correo)";
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