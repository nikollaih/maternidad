<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Proyectos_Model"]);
	}

	public function index(){
		$params["title"] = "Asignaciones";
        $params["subtitle"] = "Asignaciones";
        $params["proyectos"] = $this->Proyectos_Model->get_all(logged_user()["id"]);

        $this->load_layout("docentes/proyectos/list", $params);
	}
}
