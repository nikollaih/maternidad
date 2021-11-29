<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends Application_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model']);

		
	}

	public function ver(){
		$params['title'] = 'Perfil';
        $this->load_layout('pacientes/perfil', $params);
	}
}
