<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConsultaPreconcepcional extends Application_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
        $this->load->model(['Configuracion_Model', 'Paraclinicos_Preconcepcional_Model']);
        $this->load->library(['Form_validation']);
	}

	function paraclinicos($paciente = null, $numero_consulta = 1){
        if($paciente){
            $params["title"] = "Consulta Preconcepcional";
            $params["subtitle"] = ($numero_consulta == 1) ? "Paraclinicos de primera consulta" : "Paraclinicos de segunda consulta";

            if($this->input->post()){
                $data = $this->input->post();
                $data["numero_consulta"] = $numero_consulta;
                $params["message"] = $this->save_paraclinicos($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["paraclinicos"] = $this->Paraclinicos_Preconcepcional_Model->get_all($paciente, $numero_consulta);
            $form_params["tipo_paraclinicos"] = $this->Configuracion_Model->get("cfg_paraclinicos");
            $params["formulario"] = $this->load->view("registro/consultaPreconcepcional/paraclinicos", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_paraclinicos($data){
        $this->form_validation->set_rules('tipo', 'Tipo paraclinico', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('resultado', 'Resultado', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Paraclinicos_Preconcepcional_Model->create($data)){
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

    function delete_paraclinico(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Paraclinicos_Preconcepcional_Model->get($id);
                if($formula){
                    if($this->Paraclinicos_Preconcepcional_Model->delete($id)){
                        json_response(null, true, "Paraclinico eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el paraclinico");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el paraclinico");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el paraclinico");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }

}
