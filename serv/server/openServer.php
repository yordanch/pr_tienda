<?php
	class OpenServ{
		private $servS;
		private $userS;
		private $passS;
		private $enlaceS;
		public $dbS;
		public $cnS;
		public $infoConS;
		public $rsS;
		public $datos;
		
		function __construct(){
			$this->servS = "localhost";
			$this->userS = "root";
			$this->passS = "";
			$this->dbS = "db_tienda";
			$this->enlaceS = null;
			$this->infoConS = [];
			$this->datos = null;
		}
		function enlace(){ // conect to db
			try{
				$this->enlaceS = mysqli_connect($this->servS, $this->userS, $this->passS, $this->dbS) or die("No existe base de datos");
				return($this->enlaceS);
			}catch(Exception $e){
				$this->infoConS["respuesta_enlace"] = "Error0";
				$this->infoConS["r"] = "Error0";
				return($this->infoConS);
			}
		}
		function respuesta(){ // quering sql consult
			try{
				$this->rsS = mysqli_query($this->enlace(), $this->cnS);
				return($this->rsS);
			}catch(Exception $e){
				$this->infoConS["respuesta_r"] = "Error0";
				$this->infoConS["r"] = "Error0";
				return($this->infoConS);
			}
		}
		function conect(){ // execute the sql consult
			if (!$this->respuesta()){
				$this->infoConS["respuesta_conect"] = "Error en la ejecucion";
				mysqli_close($this->enlaceS);
				//exit();
				return($this->infoConS);
			}
			return($this->rsS);
		}
		function ejecutarConsulta(){ // only one data
			$datos = array();
			$this->rsS = $this->conect();
			if(is_array($this->rsS)){
				$datos["respuesta_eject_consulta"] = "Error1";
				$datos["r"] = "Error1";
				//return($this->rsS);
				return($datos);
			}else{
				while($fila = mysqli_fetch_assoc($this->rsS)) $datos["datos"] = $fila;
				if(isset($datos["datos"])) $datos["r"] = "Exito";
				else $datos["r"] = "SinDatos";
				mysqli_free_result($this->rsS);
				mysqli_close($this->enlaceS);
				return $datos; 
			}
		}
		function ejecutarConsultaR(){ // with column and rows
			$datos = array();
			$this->rsS = $this->conect();
			if(is_array($this->rsS)){
				$datos["respuesta_ejecutar_consultaR"] = "Error2";
				$datos["r"] = "Error2";
				//return($this->rsS);
				return($datos);
			}else{
				$cont = 0;
				while($fila = mysqli_fetch_assoc($this->rsS)){
					$datos["datos"][$cont] = $fila;
					$cont++;
				}
				$cont = 0;
				if(isset($datos["datos"])) $datos["r"] = "Exito";
				else $datos["r"] = "SinDatos";
				mysqli_free_result($this->rsS);
				mysqli_close($this->enlaceS);
				return $datos; 
			}
		}
		function ejecutarConsultaD(){ // only delete
			$datos = array();
			if (!$this->respuesta()){
				$this->infoConS["respuesta_ejecutar_consultaD"] = "Error3";
				$this->infoConS["r"] = "Error3";
				mysqli_close($this->enlaceS);
				return($this->infoConS);
			}else{
				// while($fila = mysqli_fetch_array($this->rsS)) $datos[] = $fila;
				$datos["r"] = "Exito";
				return($datos);
			}
		}
		function setCns($cnS){$openServer->cnS = $cnS;}
		function __destruct(){}
	}
	// header("Content-Type: application/json");
	// $openServer = new OpenServ();
	// $openServer->cnS = "SELECT * FROM usuarios";
	// print_r($openServer->ejecutarConsultaR());
?>