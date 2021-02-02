<?php
	//headers
	//vars
	$fun = true;
	//header("Access-Control-Allow-Origin: *");
	//header("Access-Control-Allow-Methods: GET");
	// header("Content-Type: application/json");
	//calls class's
	require_once("openServer.php");
	
	require_once("../class/usuario.php");
	
	//datos require
	$rs = array();
	$data = array();
	$type = "";//add, del, upd
	$tabl = "";
	$timeZone = "America/Lima";
	$os = new OpenServ();

	if(isset($_GET["data"]) && isset($_GET["type"]) && isset($_GET["tb"])){
		$data = $_GET["data"];
		$type = $_GET["type"];
		$tabl = $_GET["tb"];
	}elseif(isset($_POST["data"]) && isset($_POST["type"]) && isset($_POST["tb"])){
		$data = $_POST["data"];
		$type = $_POST["type"];
		$tabl = $_POST["tb"];
	}else{
		$rs["r"] = "Error: datos no encontrados";
		$data = "";
		$type = "";
		$tabl = "";
	}
	//comprobaciones
	if($data == "" && $type == "" && $tabl == ""){
		$rs["r"] = "Error: datos no encontrados";
		print_r(json_encode($rs));
		return;
	}
	if($tabl=="tienda"){
		$tienda = new Tienda();
		$tienda->serv = $os;
		switch($type){
			case "add":
				$rs = [];
				$usr->nombres = $data["nombre_add"];
				$usr->apellido = $data["apell_add"];
				$usr->correo = $data["correo_add"];
				$usr->telefono = $data["telefono_add"];
				$usr->sexo = $data["sexo_add"];
				$usr->fechana = $data["fechan_add"];
				$usr->acceso = $data["acceso_add"];
				$usr->tipo = $data["tipouser_add"];
				// $usr->fechareg = $data[""];
				// $usr->horareg = $data[""];
				$usr->passw = md5($data["contras_add"]);

				$rs = $usr->add();
				print_r(json_encode($rs));
				break;
			case "upd":
				$rs = [];
				$matri->idmatricula = "";
				$matri->idcurso = "";
				$matri->dni = "";
				$matri->fechaInicio = "";
				$matri->fechaFin = "";
				$matri->horaIni = "";
				$matri->horafin = "";
				$matri->fechaIni="";
				$matri->fechaFin="";
				$rs = $matri->upd();
				print_r(json_encode($rs));
			case "upd_stm":
				$rs = [];
				$matri->estadoexamen = $data["st"];
				$matri->idmatricula = $data["id"];
				$rs = $matri->upd_st();
				print_r(json_encode($rs));
				break;
			case "del":
				$rs = [];
				$matri->idmatricula = $data["id"];
				$rs = $matri->del();
				print_r(json_encode($rs));
				break;
			default:
				print_r(json_encode(array("r"=>"sin datos :(")));
				break;
		}
	}
	elseif($tabl==""){
		switch($type){
			case "":
				break;
			default:
				print_r(json_encode(array("r"=>"sin datos :(")));
				break;
		}
	}
	else{
		print_r(json_encode(array("r"=>"sin datos :(")));
	}
?>