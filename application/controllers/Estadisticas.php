<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends Application_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->model('Estadisticas_Model');
	}

	public function index(){
        $params['title'] = 'Estadisticas';
        $params['subtitle'] = 'Estadisticas Generales';
		$data = $this->Estadisticas_Model->getMadresPorMpio();
		$params['bar']['labels'] = '';
		$params['bar']['data'] = null;
		for ($i=0; $i < count($data); $i++) { 
			$params['bar']['labels'] = $params['bar']['labels'].'"'.$data[$i]['mpio'].'", ';
			$params['bar']['data'] = $params['bar']['data'].$data[$i]['madres'].', ';
		}
		$params['bar']['labels'] = substr($params['bar']['labels'], 0, -1);
		$params['bar']['data'] = substr($params['bar']['data'], 0, -1);
        $params['activas'] = 30;
        $params['trabajadoras_sexuales'] = 15;
        $params['riesgo_spa'] = 10;
		$this->load_layout('estadisticas/index', $params);
	}
}
