<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AtencionControlPrenatal extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->model(["Formula_Obstetrica_Model", "Sustancias_Psicoactivas_Model", "Configuracion_Model", "Vacunacion_Model", "Riesgo_Model", "Paraclinicos_Model", "Mensuales_Model", "Control_Prenatal_Model", "Otras_Consultas_Model"]);
        $this->load->library(['Form_validation']);
	}

    /* =========================================================================
    =========================== FORMULA OBSTETRICA =============================
    ===========================================================================*/

	function formulaObstetrica($paciente = null){
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

	function sustanciasPsicoactivas($paciente = null){
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

    
/* ========================================================================
    =============================== PARACLINICOS ===============================
    ===========================================================================*/

	function paraclinicos($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Paraclinicos";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_paraclinicos($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["paraclinicos"] = $this->Paraclinicos_Model->get_all($paciente);
            $form_params["tipo_paraclinicos"] = $this->Configuracion_Model->get("cfg_paraclinicos");
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/paraclinicos", $form_params, TRUE);
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
        $this->form_validation->set_rules('observacion', 'Observaciones', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Paraclinicos_Model->create($data)){
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
                $formula = $this->Paraclinicos_Model->get($id);
                if($formula){
                    if($this->Paraclinicos_Model->delete($id)){
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


    /* ========================================================================
    ============================ CONTROL PRENATAL =============================
    ===========================================================================*/

	function controlPrenatal($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Control Prenatal";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_control_prenatal($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["controles_prenatal"] = $this->Control_Prenatal_Model->get_all($paciente);
            $form_params["tipo_tardio"] = $this->Configuracion_Model->get("cfg_tardio");
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/control_prenatal", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_control_prenatal($data){
        $this->form_validation->set_rules('prueba_embarazo', 'Prueba embarazo', 'required');
        $this->form_validation->set_rules('fecha_ingreso', 'Fecha ingreso', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Control_Prenatal_Model->create($data)){
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

    function delete_control_prenatal(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Control_Prenatal_Model->get($id);
                if($formula){
                    if($this->Control_Prenatal_Model->delete($id)){
                        json_response(null, true, "Control prenatal eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el control prenatal");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el control prenatal");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el control prenatal");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }



    /* ========================================================================
    ============================ CONTROL PRENATAL =============================
    ===========================================================================*/

	function controlMensual($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Controles Mensuales";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_mensuales($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["mensuales"] = $this->Mensuales_Model->get_all($paciente);
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/mensuales", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_mensuales($data){
        $this->form_validation->set_rules('mes', 'Mes', 'required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'required');
        $this->form_validation->set_rules('peso', 'Peso', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Mensuales_Model->create($data)){
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

    function delete_control_mensual(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Mensuales_Model->get($id);
                if($formula){
                    if($this->Mensuales_Model->delete($id)){
                        json_response(null, true, "Control mensual eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el control mensual");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el control mensual");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el control mensual");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }


    /* ========================================================================
    ============================ OTRAS CONSULTAS =============================
    ===========================================================================*/

	function otrasConsultas($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Otras Consultas";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_otras_consultas($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["otras_consultas"] = $this->Otras_Consultas_Model->get_all($paciente);
            $form_params["tipo_consultas"] = $this->Configuracion_Model->get("cfg_otras_consultas");
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/otras_consultas", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_otras_consultas($data){
        $this->form_validation->set_rules('codigo_consulta', 'Tipo de consulta', 'required');
        $this->form_validation->set_rules('fecha_consulta', 'Fecha', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Otras_Consultas_Model->create($data)){
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

    function delete_otras_consultas(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Otras_Consultas_Model->get($id);
                if($formula){
                    if($this->Otras_Consultas_Model->delete($id)){
                        json_response(null, true, "Consulta eliminada exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar la consulta");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado la consulta");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado la consulta");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }
    

    /* ========================================================================
    ============================ OTRAS CONSULTAS =============================
    ===========================================================================*/

	function riesgos($paciente = null){
        if($paciente){
            $params["title"] = "Atencion Control Prenatal";
            $params["subtitle"] = "Clasificación de Riesgo";

            if($this->input->post()){
                $data = $this->input->post();
                $params["message"] = $this->save_riesgo($data);
                if(!$params["message"]["success"]){
                    $form_params["data"] = $this->input->post();
                }
            }

            $form_params["id_paciente"] = $paciente;
            $form_params["riesgos"] = $this->Riesgo_Model->get_all($paciente);
            $form_params["tipo_riesgos"] = $this->Configuracion_Model->get("cfg_riesgo");
            $params["formulario"] = $this->load->view("registro/atencionControlPrenatal/riesgos", $form_params, TRUE);
            $this->load_layout("registro/atencionControlPrenatal/template", $params);
        }
        else{
            header('Location: '.base_url());
        }
    }

    function save_riesgo($data){
        $this->form_validation->set_rules('codigo_riesgo', 'Tipo de riesgo', 'required');
        $this->form_validation->set_rules('dias_parto', 'Dias para el parto', 'required');

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            if($data["id_paciente"]){
                $data["created_at"] = date("Y-m-d h:i:s"); 
                if($this->Riesgo_Model->create($data)){
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

    function delete_riesgo(){
        if($this->input->post()){
            $id = $this->input->post("id");
            if($id){
                $formula = $this->Riesgo_Model->get($id);
                if($formula){
                    if($this->Riesgo_Model->delete($id)){
                        json_response(null, true, "Riesgo eliminado exitosamente");
                    }
                    else{
                        json_response(null, false, "No se ha podido eliminar el riesgo");
                    }
                }
                else{
                    json_response(null, false, "No se ha encontrado el riesgo");
                }
            }
            else{
                json_response(null, false, "No se ha encontrado el riesgo");
            }
        }
        else{
            json_response(null, false, "No es posible realizar esta acción");
        }
    }
}
