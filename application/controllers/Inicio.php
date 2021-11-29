<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends Application_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
	}

	public function index(){
		$this->load_layout("generales/index");
	}

	public function pacientes(){
		$params["title"] = "Inicio";
        $params["subtitle"] = "Pacientes";
		$this->load_layout("generales/pacientes", $params);
	}
}
