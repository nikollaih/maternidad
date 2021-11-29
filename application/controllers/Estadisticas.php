<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends Application_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
	}

	public function index(){
        $params["title"] = "Estadisticas";
        $params["subtitle"] = "Estadisticas Generales";
        $params["activas"] = 30;
        $params["trabajadoras_sexuales"] = 15;
        $params["riesgo_spa"] = 10;
		$this->load_layout("estadisticas/index", $params);
	}
}
