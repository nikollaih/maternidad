<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends Application_Controller {
    function __construct()
	{
		parent::__construct();
		$this->load->helper(["url"]);
        $this->load->library(["form_validation"]);
        $this->load->model(["Usuarios_Model", "Configuracion_Model"]);
	}

	public function index(){
		$params["title"] = "Usuarios";
        $params["subtitle"] = "Todos los usuarios";
        $params["usuarios"] = $this->Usuarios_Model->get_all();

        $this->load_layout("usuarios/lista", $params);
	}

    public function agregar(){
        $params["title"] = "Usuarios";
        $params["subtitle"] = "Nuevo Usuario";
        $params["id_usuario"] = null;

        if($this->input->post()){
            $data = $this->input->post();
            $params["message"] = $this->save_user($data);
            if(!$params["message"]["success"]){
                $params["data"] = $this->input->post()["user"];
            }
        }

        $params["roles"] = $this->Configuracion_Model->get("cfg_usuarios_roles");
        $this->load_layout("usuarios/crear", $params);
    }

    public function modificar($id_usuario){
        $params["title"] = "Usuarios";
        $params["subtitle"] = "Modificar Usuario";
        $params["id_usuario"] = $id_usuario;

        if($this->input->post()){
            $data = $this->input->post();
            $params["message"] = $this->save_user($data);
            if(!$params["message"]["success"]){
                $params["data"] = $this->input->post()["user"];
            }
        }

        $params["roles"] = $this->Configuracion_Model->get("cfg_usuarios_roles");
        $params["data"] = $this->Usuarios_Model->get($id_usuario, "id_usuario");
        if($params["data"]){
            $this->load_layout("usuarios/crear", $params);
        }
        else{
            header('Location: '.base_url().'Usuarios');
        }
    }

    function save_user($data){
        $this->form_validation->set_rules('user[usuario]', 'Usuario', 'required');
        $this->form_validation->set_rules('user[email]', 'Email', 'required');
        $this->form_validation->set_rules('user[nombre]', 'Nombre', 'required');
        if(!$data["user"]["id_usuario"]){
            $this->form_validation->set_rules('user[password]', 'Contraseña', 'required');
        }

        // Check if input rules are ok
        if ($this->form_validation->run() == false) {
            $return = array("type" => "danger", "message" => "Por favor complete todos los campos.", "success" => false);
        }
        else{
            // Validate the new registered email
            $user = $this->Usuarios_Model->get($data["user"]["email"], "email");
            if(!$user || $data["user"]["id_usuario"]){
                // Validate the new registered username
                $user = $this->Usuarios_Model->get($data["user"]["usuario"], "usuario");
                if(!$user || $data["user"]["id_usuario"]){
                    // Check if the new password match
                    if($data["r-password"] == $data["user"]["password"]){
                        // If there's a current user then it will keep the current password
                        if($data["user"]["id_usuario"] && trim($data["user"]["password"]) == ""){
                            $user = $this->Usuarios_Model->get($data["user"]["id_usuario"], "id_usuario");
                            $data["user"]["password"] = $user["password"];
                        }
                        else{
                            // Convert the password into a md5 hash
                            $data["user"]["password"] = md5($data["user"]["password"]);
                        }
                        if(!$data["user"]["id_usuario"]){
                            if($this->Usuarios_Model->create($data["user"])){
                                $return = array("type" => "success", "message" => "Datos guardados satisfactoriamente.", "success" => true);
                            }
                            else{
                                $return = array("type" => "danger", "message" => "Ha ocurrido un error, por favor itente de nuevo más tarde.", "success" => false);
                            }
                        }
                        else{
                            if($this->Usuarios_Model->update($data["user"])){
                                $return = array("type" => "success", "message" => "Datos modificados satisfactoriamente.", "success" => true);
                            }
                            else{
                                $return = array("type" => "danger", "message" => "Ha ocurrido un error, por favor itente de nuevo más tarde.", "success" => false);
                            }
                        }
                    }
                    else{
                        $return = array("type" => "danger", "message" => "Las contraseñas no coinciden.", "success" => false);
                    }
                }
                else{
                    $return = array("type" => "danger", "message" => "Ya existe el usuario: ".$data["user"]["usuario"], "success" => false);
                }
            }
            else{
                $return = array("type" => "danger", "message" => "Ya existe un usuario con el email: ".$data["user"]["email"], "success" => false);
            }
        }
        return $return;
    }
}
