<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asignaciones extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Asignaciones_Model"]);
	}

	public function index(){
		$params["title"] = "Asignaciones";
        $params["subtitle"] = "Asignaciones";
        $params["asignaciones"] = $this->Asignaciones_Model->get_all(logged_user()["id"]);

        $this->load_layout("docentes/asignaciones/index", $params);
	}
}
