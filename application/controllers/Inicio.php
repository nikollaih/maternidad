<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends Application_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
		$this->load->model(['Pacientes_Model']);
	}

	public function index(){
		$params["title"] = "Inicio";
        $params["subtitle"] = "Pacientes";
		$params["message"]['success'] = false;
		if($this->input->post()){
			$data = $this->input->post();
			$params["message"] = $this->findData($data);
		}

		$this->load_layout("generales/pacientes", $params);
	}

	public function findData($data){
		$result = $this->Pacientes_Model->find($data['search']);
		$return['success'] = false;
		$return['data'] = null;
		if ($result) {
			$return['success'] = true;
			$return['data'] = $result;
			return $return;
		}
	}
}
