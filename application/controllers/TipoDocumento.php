<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoDocumento extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["TipoDocumentos_Model"]);
	}

	public function config(){
		$params["title"] = "Configuracion";
        $params["subtitle"] = "Tipo de documentos";
        $params["tipo_documentos"] = $this->TipoDocumentos_Model->get();

        $this->load_layout("configuracion/tipo_documento", $params);
	}
}
