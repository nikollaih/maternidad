<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuracion extends Application_Controller {

	public $menuConfig = array(
		array('nombre' => 'Discapacidades','tabla' => 'cfg_discapacidad'),
		array('nombre' => 'Eps','tabla' => 'cfg_eps'),
		array('nombre' => 'Estados','tabla' => 'cfg_estado'),
		array('nombre' => 'Etnias','tabla' => 'cfg_etnia'),
		array('nombre' => 'Frecuencia de consumo','tabla' => 'cfg_consumo_frecuencia'),
		array('nombre' => 'Generos','tabla' => 'cfg_genero'),
		array('nombre' => 'Interconsultas','tabla' => 'cfg_interconsulta'),
		array('nombre' => 'Ips','tabla' => 'cfg_ips'),
		array('nombre' => 'Tipos de Spa','tabla' => 'cfg_consumo_tipospa'),
		array('nombre' => 'Municipios','tabla' => 'cfg_municipio'),
		array('nombre' => 'Métodos de planificación','tabla' => 'cfg_planificacion'),
		array('nombre' => 'Nivel Educativo','tabla' => 'cfg_educativo'),
		array('nombre' => 'Poblaciones','tabla' => 'cfg_poblacion'),
		array('nombre' => 'Regimenes','tabla' => 'cfg_regimen'),
		array('nombre' => 'Resultados','tabla' => 'cfg_resultados'),
		array('nombre' => 'Riesgos','tabla' => 'cfg_riesgo'),
		array('nombre' => 'Tipos de documento','tabla' => 'cfg_tipodoc'),
		array('nombre' => 'Tipos de parto','tabla' => 'cfg_tipo_parto'),
		array('nombre' => 'Vacunas','tabla' => 'cfg_vacunas'),
		array('nombre' => 'Zonas','tabla' => 'cfg_zona'),
	);

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model']);

		
	}

	public function listar(){
		$index = $this->input->get('id', TRUE);
		$params['title'] = 'Configuracion';
        $params['subtitle'] = $this->menuConfig[$index]['nombre'];
		$params['tableName'] = $this->menuConfig[$index]['tabla'];
		$params['url'] = $index;
        $params['datos'] = $this->Configuracion_Model->get($this->menuConfig[$index]['tabla']);

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
