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
		array('nombre' => 'Estado de conciencia','tabla' => 'cfg_estado_conciencia'),
		array('nombre' => 'Dx','tabla' => 'cfg_dx')
	);

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model']);

		
	}

	public function listar($index, $codigo = null){
		$params['title'] = 'Configuracion';
        $params['subtitle'] = $this->menuConfig[$index]['nombre'];
		$params['tableName'] = $this->menuConfig[$index]['tabla'];
		$params['url'] = $index;
        $params['datos'] = $this->Configuracion_Model->get($this->menuConfig[$index]['tabla']);

		if($codigo != null){
			$exist = $this->Configuracion_Model->find($codigo, $this->menuConfig[$index]['tabla']);
			$params["data"] = (is_array($exist)) ? $exist[0] : [];
		}

        $this->load_layout('configuracion/configuraciones', $params);
	}
	public function paraclinicos(){
		$params['title'] = 'Configuracion';
        $params['subtitle'] = 'Paraclinicos';
        $params['datos'] = $this->Configuracion_Model->get('cfg_paraclinicos');

        $this->load_layout('configuracion/paraclinicos', $params);
	}
	
	public function insertar($modify = "0"){
		$info = $this->input->post();
		$tableName = $info['tableName'];
		$url = $info['url'];
		unset($info['tableName'], $info['url']);
		$exist = $this->Configuracion_Model->find($info['codigo'], $tableName);
		if (!$exist && $modify == "0") {
			$this->Configuracion_Model->create($info, $tableName);
		}
		else if($exist && $modify == "1"){
			$this->Configuracion_Model->update($info, $tableName);
		}
		
		header('Location: '.base_url().'Configuracion/listar/'.$url);
	}

	public function insertarParaclinico(){
		$info = $this->input->post();
		$tableName = 'cfg_paraclinicos';

		$exist = $this->Configuracion_Model->find($info['codigo'], $tableName);
		if (!$exist) {
			$this->Configuracion_Model->create($info, $tableName);
		}
		
		header('Location: '.base_url().'Configuracion/paraclinicos');
	}

	public function eliminar(){
		$code = $this->input->post()['idItem'];
		$tableName = $this->input->post()['tableName'];
		$url = $this->input->post()['url'];
		$result = $this->Configuracion_Model->delete($code, $tableName);
		
		header('Location: '.base_url().'Configuracion/listar/'.$url);
	}

	public function eliminarParaclinico(){
		$code = $this->input->post()['idItem'];
		$result = $this->Configuracion_Model->delete($code, 'cfg_paraclinicos');
		
		header('Location: '.base_url().'Configuracion/paraclinicos');
	}
}
