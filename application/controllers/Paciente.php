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

	public function insertar(){
		$info = $this->input->post();
		$tableName = $info['tableName'];
		$url = $info['url'];
		unset($info['tableName'], $info['url']);
		$exist = $this->Configuracion_Model->find($info['codigo'], $tableName);
		if (!$exist) {
			$this->Configuracion_Model->create($info, $tableName);
		}
		
		header('Location: '.base_url().'Configuracion/listar?id='.$url);
	}

	public function eliminar(){
		$code = $this->input->post()['idItem'];
		$tableName = $this->input->post()['tableName'];
		$url = $this->input->post()['url'];
		$result = $this->Configuracion_Model->delete($code, $tableName);
		
		header('Location: '.base_url().'Configuracion/listar?id='.$url);
	}
}
