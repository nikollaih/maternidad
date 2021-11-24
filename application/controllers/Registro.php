<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
	}

	public function datos_basicos(){
		$params["title"] = "Registro";
        $params["subtitle"] = "Datos básicos";

        $this->load_layout("registro/datos_basicos", $params);
	}

	public function atencion_control_prenatal(){
		$params["title"] = "Registro";
        $params["subtitle"] = "Atención de control prenatal";

        $this->load_layout("registro/atencion_control_prenatal", $params);
	}

	public function consulta_preconcepcional(){
		$params["title"] = "Registro";
        $params["subtitle"] = "Consulta preconcepcional";

        $this->load_layout("registro/consulta_preconcepcional", $params);
	}

	public function terminacion_parto_lactancia(){
		$params["title"] = "Registro";
        $params["subtitle"] = "Terminación del parto y lactancia";

        $this->load_layout("registro/terminacion_parto_lactancia", $params);
	}
}
