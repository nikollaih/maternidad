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
		$date_10_years = date("Y-m-d", strtotime("-10 years"));
		$date_14_years = date("Y-m-d", strtotime("-15 years"));
		$date_19_years = date("Y-m-d", strtotime("-20 years"));
		$date_34_years = date("Y-m-d", strtotime("-35 years"));

        $params['title'] = 'Estadisticas';
        $params['subtitle'] = 'Estadisticas Generales';

		$ingresos = $this->Estadisticas_Model->getMadresPorMes();
		$temp_ingresos_data = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
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

		// Madres gestantes entre 2 edades
		$_10_14 = $this->Pacientes_Model->getBetweenDates($date_14_years, $date_10_years);
		$_15_19 = $this->Pacientes_Model->getBetweenDates($date_19_years, $date_14_years);
		$_20_34 = $this->Pacientes_Model->getBetweenDates($date_34_years, $date_19_years);
		$_35 = $this->Pacientes_Model->getBetweenDates(null, $date_34_years);

		$params["_10_14"] = ($_10_14) ? count($_10_14) : 0;
		$params["_15_19"] = ($_15_19) ? count($_15_19) : 0;
		$params["_20_34"] = ($_20_34) ? count($_20_34) : 0;
		$params["_35"] = ($_35) ? count($_35) : 0;
		$params['activas'] = count($this->Pacientes_Model->getAll());
        $params['riesgo_spa'] = count($this->Sustancias_Psicoactivas_Model->get_count());
		$params['violencia_intrafamiliar'] = count($this->Violencia_Intrafamiliar_Model->get_count());
		$this->load_layout('estadisticas/index', $params);
	}
}
