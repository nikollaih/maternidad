<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estadisticas extends Application_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->model(['Estadisticas_Model', 'Pacientes_Model', 'Sustancias_Psicoactivas_Model', 'Violencia_Intrafamiliar_Model']);
	}

	public function index(){
        $params['title'] = 'Estadisticas';
        $params['subtitle'] = 'Estadisticas Generales';

		$ingresos = $this->Estadisticas_Model->getMadresPorMes();
		$temp_ingresos_data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
		print_r($ingresos);
		$params["ingresos"]["data"] = "";
		if($ingresos){
			for ($i=0; $i < count($ingresos); $i++) { 
				$posicion = $ingresos[$i]["mes"] - 1;
				$temp_ingresos_data[$posicion] = $temp_ingresos_data[$posicion] + $ingresos[$i]["cantidad"];
			}

			for ($i=0; $i < count($temp_ingresos_data); $i++) { 
				$params["ingresos"]["data"] = $params["ingresos"]["data"].'"'.$temp_ingresos_data[$i].'", ';
			}

			$params["ingresos"]["data"] = substr($params['ingresos']['data'], 0, -1);
		}

		$data = $this->Estadisticas_Model->getMadresPorMpio();
		$params['bar']['labels'] = '';
		$params['bar']['data'] = null;
		for ($i=0; $i < count($data); $i++) { 
			$params['bar']['labels'] = $params['bar']['labels'].'"'.$data[$i]['mpio'].'", ';
			$params['bar']['data'] = $params['bar']['data'].$data[$i]['madres'].', ';
		}
		$params['bar']['labels'] = substr($params['bar']['labels'], 0, -1);
		$params['bar']['data'] = substr($params['bar']['data'], 0, -1);

        $params['activas'] = count($this->Pacientes_Model->getAll());
        $params['riesgo_spa'] = count($this->Sustancias_Psicoactivas_Model->get_count());
		$params['violencia_intrafamiliar'] = count($this->Violencia_Intrafamiliar_Model->get_count());
		$this->load_layout('estadisticas/index', $params);
	}
}
