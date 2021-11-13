<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Asignaciones_Model"]);
	}

	public function datos_basicos(){
		$params["title"] = "Registro";
        $params["subtitle"] = "Datos básicos";

        $this->load_layout("registro/datos_basicos", $params);
	}
}
