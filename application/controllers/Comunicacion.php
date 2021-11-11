<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comunicacion extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Areas_Model"]);
	}

	public function index(){
		$params["title"] = "Comunicaciones";
        $params["subtitle"] = "Comunicaciones";
        $params["areas"] = $this->Areas_Model->get_all(logged_user()["id"]);

        $this->load_layout("docentes/comunicaciones/list", $params);
	}
}
