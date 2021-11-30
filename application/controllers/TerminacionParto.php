<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TerminacionParto extends Application_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model', 'Terminacion_Voluntaria_Model', 'Recien_Nacido_Model', 'Atencion_Parto_Model', 'Control_Recien_Nacido_Madre_Model', 'Pacientes_Model']);
        $this->load->library(['Form_validation']);
	}

    /* ========================================================================
    ======================== INTERRUPCIÓN VOLUNTARIA ===========================
    ===========================================================================*/

	function interrupcionVoluntaria($paciente = null){
        if($paciente){
            $params["title"] = "Terminacion del parto y lactancia";
            $params["subtitle"] =  "Interrupción voluntaria del embarazo";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_interrupcion_voluntaria($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["interrupciones_voluntarias"] = $this->Terminacion_Voluntaria_Model->get_all($paciente);
            $form_params["tipo_causales"] = $this->Configuracion_Model->get("cfg_voluntaria_causa");
            $form_params["tipo_dimensiones"] = $this->Configuracion_Model->get("cfg_voluntaria_dimension");
            $params["formulario"] = $this->load->view("registro/terminacionParto/interrupcion_voluntaria", $form_params, TRUE);
            $params['info_perfil'] = $this->Pacientes_Model->getProfile($paciente);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_interrupcion_voluntaria($data){
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('dimension', 'Dimension', 'required');
        $this->form_validation->set_rules('causal', 'Causal', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Terminacion_Voluntaria_Model->create($data)){
                    $return = array("type" => "success", "message" => "Datos guardados satisfactoriamente.", "success" => true);
                }
                else{
                    $return = array("type" => "danger", "message" => "Ha ocurrido un error, por favor itente de nuevo más tarde.", "success" => false);
                }
            }
            else{
                $return = array("type" => "danger", "message" => "No se ha seleccionado un paciente.", "success" => false);
            }
        }
        return $return;
    }

    function delete_interrupcion_voluntaria(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Terminacion_Voluntaria_Model->get($id);
                if($formula){
                    if($this->Terminacion_Voluntaria_Model->delete($id)){
                        json_response(null, true, "Interrupción voluntaria eliminada exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar la interrupción voluntaria");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado la interrupción voluntaria");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado la interrupción voluntaria");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }

    /* ========================================================================
    =============================== RECIEN NACIDO ===============================
    ===========================================================================*/

    function recienNacido($paciente = null){
        if($paciente){
            $params["title"] = "Terminacion del parto y lactancia";
            $params["subtitle"] =  "Atención del recien nacido";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_recien_nacido($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["recien_nacido"] = $this->Recien_Nacido_Model->get_all($paciente);
            $form_params["tipo_sexo"] = $this->Configuracion_Model->get("cfg_sexo");
            $params["formulario"] = $this->load->view("registro/terminacionParto/recien_nacido", $form_params, TRUE);
            $params['info_perfil'] = $this->Pacientes_Model->getProfile($paciente);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_recien_nacido($data){
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('sexo', 'Sexo', 'required');
        $this->form_validation->set_rules('peso', 'Peso', 'required');
        $this->form_validation->set_rules('talla', 'Talla', 'required');
        $this->form_validation->set_rules('cefalico', 'Cefalico', 'required');
        $this->form_validation->set_rules('abdominal', 'Abdominal', 'required');
        $this->form_validation->set_rules('pinzamiento', 'Pinzamiento', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Recien_Nacido_Model->create($data)){
                    $return = array("type" => "success", "message" => "Datos guardados satisfactoriamente.", "success" => true);
                }
                else{
                    $return = array("type" => "danger", "message" => "Ha ocurrido un error, por favor itente de nuevo más tarde.", "success" => false);
                }
            }
            else{
                $return = array("type" => "danger", "message" => "No se ha seleccionado un paciente.", "success" => false);
            }
        }
        return $return;
    }

    function delete_recien_nacido(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Recien_Nacido_Model->get($id);
                if($formula){
                    if($this->Recien_Nacido_Model->delete($id)){
                        json_response(null, true, "Registro eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el registro");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el registro");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el registro");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }


    /* ========================================================================
    ============================= ATENCIÓN PARTO ==============================
    ===========================================================================*/

    function atencionParto($paciente = null){
        if($paciente){
            $params["title"] = "Terminacion del parto y lactancia";
            $params["subtitle"] =  "Atención del parto";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_atencion_parto($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["partos"] = $this->Atencion_Parto_Model->get_all($paciente);
            $form_params["ips"] = $this->Configuracion_Model->get("cfg_ips");
            $form_params["formas"] = $this->Configuracion_Model->get("cfg_tipo_parto");
            $params["formulario"] = $this->load->view("registro/terminacionParto/atencion_parto", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_atencion_parto($data){
        $this->form_validation->set_rules('fecha_parto', 'Fecha del parto', 'required');
        $this->form_validation->set_rules('forma', 'Tipo de terminación del parto', 'required');
        $this->form_validation->set_rules('semanas', 'Semanas', 'required');
        $this->form_validation->set_rules('ips', 'IPS que atendió el parto', 'required');
        $this->form_validation->set_rules('planificacion', 'Suministro del método de planificación familiar', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Atencion_Parto_Model->create($data)){
                    $return = array("type" => "success", "message" => "Datos guardados satisfactoriamente.", "success" => true);
                }
                else{
                    $return = array("type" => "danger", "message" => "Ha ocurrido un error, por favor itente de nuevo más tarde.", "success" => false);
                }
            }
            else{
                $return = array("type" => "danger", "message" => "No se ha seleccionado un paciente.", "success" => false);
            }
        }
        return $return;
    }

    function delete_atencion_parto(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Atencion_Parto_Model->get($id);
                if($formula){
                    if($this->Atencion_Parto_Model->delete($id)){
                        json_response(null, true, "Registro eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el registro");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el registro");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el registro");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }

    /* ========================================================================
    ======================= CONTROL RECIEN NACIDO MADRE =======================
    ===========================================================================*/

    function controlRecienNacidoMadre($paciente = null){
        if($paciente){
            $params["title"] = "Terminacion del parto y lactancia";
            $params["subtitle"] =  "Control del recien nacido y la madre";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_control_recien_nacido_madre($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["controles"] = $this->Control_Recien_Nacido_Madre_Model->get_all($paciente);
            $form_params["tipos_planificacion"] = $this->Configuracion_Model->get("cfg_planificacion");
            $params["formulario"] = $this->load->view("registro/terminacionParto/control_recien_nacido_madre", $form_params, TRUE);
            $params['info_perfil'] = $this->Pacientes_Model->getProfile($paciente);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_control_recien_nacido_madre($data){
        $this->form_validation->set_rules('fecha_salida_binomio', '', 'required');
        $this->form_validation->set_rules('fecha_consejeria_lactancia', '', 'required');
        $this->form_validation->set_rules('fecha_consulta_planificacion', '', 'required');
        $this->form_validation->set_rules('fecha_atencion_puerperio', '', 'required');
        $this->form_validation->set_rules('inicio_lactancia_materna', '', 'required');
        $this->form_validation->set_rules('tipo', 'Tipo planificacion', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Control_Recien_Nacido_Madre_Model->create($data)){
                    $return = array("type" => "success", "message" => "Datos guardados satisfactoriamente.", "success" => true);
                }
                else{
                    $return = array("type" => "danger", "message" => "Ha ocurrido un error, por favor itente de nuevo más tarde.", "success" => false);
                }
            }
            else{
                $return = array("type" => "danger", "message" => "No se ha seleccionado un paciente.", "success" => false);
            }
        }
        return $return;
    }

    function delete_control_recien_nacido_madre(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Control_Recien_Nacido_Madre_Model->get($id);
                if($formula){
                    if($this->Control_Recien_Nacido_Madre_Model->delete($id)){
                        json_response(null, true, "Registro eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el registro");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el registro");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el registro");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }
}
