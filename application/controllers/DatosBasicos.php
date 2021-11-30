<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatosBasicos extends Application_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model', 'Pacientes_Model']);
        $this->load->library(['Form_validation']);
		
	}

	public function personales($paciente = null){
		if($paciente){
            $params['title'] = 'Datos básicos';
            $params['subtitle'] = 'Información personal';

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->guardarPersonales($data);
            }

            $form_params['id_paciente'] = $paciente;
            $form_params['tipo_doc'] = $this->Configuracion_Model->get('cfg_tipodoc');
            $form_params['sexos'] = $this->Configuracion_Model->get('cfg_sexo');
            $form_params['generos'] = $this->Configuracion_Model->get('cfg_genero');
            $form_params['info_paciente'] = $this->Pacientes_Model->getPersonal($paciente);
            $params['formulario'] = $this->load->view('registro/datosBasicos/datos_personales', $form_params, TRUE);
            $params['info_perfil'] = $this->Pacientes_Model->getProfile($paciente);
            $this->load_layout('registro/datosBasicos/template', $params);
        }
        else{
            header('Location: '.base_url());
        }
	}

    public function guardarPersonales($data) {
        $this->form_validation->set_rules('tipodoc', 'Tipo de documento', 'required');
        $this->form_validation->set_rules('numero_documento', 'Número de documento', 'required');
        $this->form_validation->set_rules('nombres', 'Nombres', 'required');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('sexo', 'Sexo', 'required');
        $this->form_validation->set_rules('genero', 'Genero', 'required');
        $this->form_validation->set_rules('fecha_nac', 'Fecha de nacimiento', 'required');
        $this->form_validation->set_rules('telefono', 'teléfono', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array('type' => 'danger', 'message' => 'Por favor complete todos los campos.', 'success' => false);
        }
        else{
            if($data['id']){
                if($this->Pacientes_Model->actualizar($data)){
                    $return = array('type' => 'success', 'message' => 'Datos guardados satisfactoriamente.', 'success' => true);
                }
                else{
                    $return = array('type' => 'danger', 'message' => 'Ha ocurrido un error, por favor itente de nuevo más tarde.', 'success' => false);
                }
            }
            else{
                $return = array('type' => 'danger', 'message' => 'No se ha seleccionado un paciente.', 'success' => false);
            }
        }
        return $return;
    }

	public function ubicacion($paciente = null){
		if($paciente){
            $params['title'] = 'Datos básicos';
            $params['subtitle'] = 'Información de ubicación';

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->guardarUbicacion($data);
            }

            $form_params['id_paciente'] = $paciente;
            $form_params['mpios'] = $this->Configuracion_Model->get('cfg_municipio');
            $form_params['zonas'] = $this->Configuracion_Model->get('cfg_zona');
            $form_params['info_paciente'] = $this->Pacientes_Model->getUbicacion($paciente);
            $params['formulario'] = $this->load->view('registro/datosBasicos/datos_ubicacion', $form_params, TRUE);
            $params['info_perfil'] = $this->Pacientes_Model->getProfile($paciente);
            $this->load_layout('registro/datosBasicos/template', $params);
        }
        else{
            header('Location: '.base_url());
        }
	}

    public function guardarUbicacion($data) {
        $this->form_validation->set_rules('mpio', 'Municipio', 'required');
        $this->form_validation->set_rules('zona', 'Zona', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array('type' => 'danger', 'message' => 'Por favor complete todos los campos.', 'success' => false);
        }
        else{
            if($data['id']){
                if($this->Pacientes_Model->actualizar($data)){
                    $return = array('type' => 'success', 'message' => 'Datos guardados satisfactoriamente.', 'success' => true);
                }
                else{
                    $return = array('type' => 'danger', 'message' => 'Ha ocurrido un error, por favor itente de nuevo más tarde.', 'success' => false);
                }
            }
            else{
                $return = array('type' => 'danger', 'message' => 'No se ha seleccionado un paciente.', 'success' => false);
            }
        }
        return $return;
    }

	public function otros($paciente = null){
		if($paciente){
            $params['title'] = 'Datos básicos';
            $params['subtitle'] = 'Otros datos';

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->guardarOtros($data);
            }

            $form_params['id_paciente'] = $paciente;
            $form_params['poblaciones'] = $this->Configuracion_Model->get('cfg_poblacion');
            $form_params['discapacidades'] = $this->Configuracion_Model->get('cfg_discapacidad');
            $form_params['etnias'] = $this->Configuracion_Model->get('cfg_etnia');
            $form_params['nivelesE'] = $this->Configuracion_Model->get('cfg_educativo');
            $form_params['info_paciente'] = $this->Pacientes_Model->getOtros($paciente);
            $params['formulario'] = $this->load->view('registro/datosBasicos/otros_datos', $form_params, TRUE);
            $params['info_perfil'] = $this->Pacientes_Model->getProfile($paciente);
            $this->load_layout('registro/datosBasicos/template', $params);
        }
        else{
            header('Location: '.base_url());
        }
	}

    public function guardarOtros($data) {
        $this->form_validation->set_rules('poblacion', 'Tipo de población beneficiaria', 'required');
        $this->form_validation->set_rules('discapacidad', 'Discapacidad', 'required');
        $this->form_validation->set_rules('etnia', 'Étnia', 'required');
        $this->form_validation->set_rules('educacion', 'Nivel educativo', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array('type' => 'danger', 'message' => 'Por favor complete todos los campos.', 'success' => false);
        }
        else{
            if($data['id']){
                if($this->Pacientes_Model->actualizar($data)){
                    $return = array('type' => 'success', 'message' => 'Datos guardados satisfactoriamente.', 'success' => true);
                }
                else{
                    $return = array('type' => 'danger', 'message' => 'Ha ocurrido un error, por favor itente de nuevo más tarde.', 'success' => false);
                }
            }
            else{
                $return = array('type' => 'danger', 'message' => 'No se ha seleccionado un paciente.', 'success' => false);
            }
        }
        return $return;
    }
}
