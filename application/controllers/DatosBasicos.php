<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosBasicos extends Application_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model']);

		
	}

	public function personales($paciente = null){
		if($paciente){
            $params["title"] = "Datos básicos";
            $params["subtitle"] = "Información personal";

            // if($this->input->post()){
            //     $data = $this->input->post();
            //     $params["message"] = $this->save_sustancias_psicoactivas($data);
            //     if(!$params["message"]["success"]){
            //         $form_params["data"] = $this->input->post();
            //     }
            // }

            $form_params["id_paciente"] = $paciente;
            $form_params["tipo_doc"] = $this->Configuracion_Model->get('cfg_tipodoc');
            $form_params["sexos"] = $this->Configuracion_Model->get('cfg_sexo');
            $form_params["generos"] = $this->Configuracion_Model->get('cfg_genero');
            $params["formulario"] = $this->load->view("registro/datosBasicos/datos_personales", $form_params, TRUE);
            $this->load_layout("registro/datosBasicos/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
	}

	public function ubicacion($paciente = null){
		if($paciente){
            $params["title"] = "Datos básicos";
            $params["subtitle"] = "Información de ubicación";

            // if($this->input->post()){
            //     $data = $this->input->post();
            //     $params["message"] = $this->save_sustancias_psicoactivas($data);
            //     if(!$params["message"]["success"]){
            //         $form_params["data"] = $this->input->post();
            //     }
            // }

            $form_params["id_paciente"] = $paciente;
            $params["formulario"] = $this->load->view("registro/datosBasicos/datos_ubicacion", $form_params, TRUE);
            $this->load_layout("registro/datosBasicos/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
	}

	public function otros($paciente = null){
		if($paciente){
            $params["title"] = "Datos básicos";
            $params["subtitle"] = "Otros datos";

            // if($this->input->post()){
            //     $data = $this->input->post();
            //     $params["message"] = $this->save_sustancias_psicoactivas($data);
            //     if(!$params["message"]["success"]){
            //         $form_params["data"] = $this->input->post();
            //     }
            // }

            $form_params["id_paciente"] = $paciente;
            $params["formulario"] = $this->load->view("registro/datosBasicos/otros_datos", $form_params, TRUE);
            $this->load_layout("registro/datosBasicos/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
	}
}
