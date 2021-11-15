<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model']);
	}

	public function tipoDocumento(){
		$params['title'] = 'Configuracion';
        $params['subtitle'] = 'Tipos de documentos';
		$params['tableName'] = 'cfg_tipodoc';
		$params['url'] = 'tipoDocumento';
        $params['datos'] = $this->Configuracion_Model->get('cfg_tipodoc');

        $this->load_layout('configuracion/configuraciones', $params);
	}

	public function ciudades(){
		$params['title'] = 'Configuracion';
        $params['subtitle'] = 'Ciudades';
		$params['tableName'] = 'cfg_municipio';
		$params['url'] = 'ciudades';
        $params['datos'] = $this->Configuracion_Model->get('cfg_municipio');

        $this->load_layout('configuracion/configuraciones', $params);
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
		
		header('Location: '.base_url().'Configuracion/'.$url);
	}

	public function eliminar(){
		$code = $this->input->post()['idItem'];
		$tableName = $this->input->post()['tableName'];
		$url = $this->input->post()['url'];
		$result = $this->Configuracion_Model->delete($code, $tableName);
		
		header('Location: '.base_url().'Configuracion/'.$url);
	}
}
