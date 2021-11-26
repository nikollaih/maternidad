<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atencion_Control_Prenatal extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Formula_Obstetrica_Model", "Sustancias_Psicoactivas_Model", "Configuracion_Model", "Vacunacion_Model"]);
        $this->load->library(['Form_validation']);
	}

    /* =========================================================================
    =========================== FORMULA OBSTETRICA =============================
    ===========================================================================*/

	function formula_obstetrica($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Formula Obstétrica";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_formula_obtetrica($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["formulas"] = $this->Formula_Obstetrica_Model->get_all($paciente);
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/formula_obstetrica", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_formula_obtetrica($data){
        $this->form_validation->set_rules('gestacion', 'Gestacion', 'required');
        $this->form_validation->set_rules('parto', 'Parto', 'required');
        $this->form_validation->set_rules('cesarea', 'Cesarea', 'required');
        $this->form_validation->set_rules('aborto', 'Aborto', 'required');
        $this->form_validation->set_rules('mortinatos', 'Mortinatos', 'required');
        $this->form_validation->set_rules('vivos', 'Vivos', 'required');
        $this->form_validation->set_rules('interginesico', 'Interginesico', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Formula_Obstetrica_Model->create($data)){
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

    function delete_formula_obstetrica(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Formula_Obstetrica_Model->get($id);
                if($formula){
                    if($this->Formula_Obstetrica_Model->delete($id)){
                        json_response(null, true, "Formula obstetrica eliminada exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar la formula obstetrica");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado la formula obstetrica");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado la formula obstetrica");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }



    /* ========================================================================
    ======================== SUSTANCIAS PSICOACTIVAS ==========================
    ===========================================================================*/

	function sustancias_psicoactivas($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Sustancias Psicoactivas";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_sustancias_psicoactivas($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["sustancias"] = $this->Sustancias_Psicoactivas_Model->get_all($paciente);
            $form_params["tipo_sustancias"] = $this->Configuracion_Model->get("cfg_consumo_tipospa");
            $form_params["tipo_frecuencias"] = $this->Configuracion_Model->get("cfg_consumo_frecuencia");
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/sustancias_psicoactivas", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_sustancias_psicoactivas($data){
        $this->form_validation->set_rules('cod_sustancia', 'Tipo de sustancia que consume', 'required');
        $this->form_validation->set_rules('cod_frecuencia', 'Frecuencia', 'required');
        $this->form_validation->set_rules('fecha_ultimo_consumo', 'Último consumo', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Sustancias_Psicoactivas_Model->create($data)){
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

    function delete_sustancias_psicoactivas(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Sustancias_Psicoactivas_Model->get($id);
                if($formula){
                    if($this->Sustancias_Psicoactivas_Model->delete($id)){
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
    ================================ VACUNACION ================================
    ===========================================================================*/

	function vacunacion($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Vacunacion";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_vacunacion($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["vacunas"] = $this->Vacunacion_Model->get_all($paciente);
            $form_params["tipo_vacunas"] = $this->Configuracion_Model->get("cfg_vacunas");
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/vacunacion", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_vacunacion($data){
        $this->form_validation->set_rules('cod_vacuna', 'Vacuna', 'required');
        $this->form_validation->set_rules('numero_dosis', 'Dosis #', 'required');
        $this->form_validation->set_rules('fecha_vacunacion', 'Fecha vacunacion', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Vacunacion_Model->create($data)){
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

    function delete_vacunacion(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Vacunacion_Model->get($id);
                if($formula){
                    if($this->Vacunacion_Model->delete($id)){
                        json_response(null, true, "Vacuna eliminada exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar la vacuna");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado la vacuna");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado la vacuna");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }
}
