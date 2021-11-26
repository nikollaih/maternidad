<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Atencion_Control_Prenatal extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Formula_Obstetrica_Model"]);
        $this->load->library(['Form_validation']);
	}

	function formula_obstetrica($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Formula Obstétrica";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_formula_obtetrica($data);
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
}
