<?php
    class usuarios
    {
        var $nombres;
        var $apellido;
        var $correo;
        var $telefono;
        var $sexo;
        var $fechana;
        var $acceso;
        var $tipo;
        var $fechareg;
        var $horareg;
        var $passw;
        
        public $serv;

        function __construct(){
            $this->fechareg = "CURRENT_DATE";
            $this->horareg = "CURRENT_TIME";
        }
        function add($v=""){
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