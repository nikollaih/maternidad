<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Application_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model(['Usuarios_Model']);
		$this->load->helper(["url", "form"]);
		$this->load->library(['Form_validation']);
	}

	public function index()
	{
		$this->load_layout("generales/index");
	}

	public function login(){
		$params=[];
        if(is_logged()){
            header('Location: '.base_url());
			die();
        }

		if($this->input->post()){
			// Set the inputs rules
			$this->form_validation->set_rules('usuario', 'Usuario', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required');

			// Check if input rules are ok
			if ($this->form_validation->run() == false) {
				$params["message"] = array("type" => "danger", "message" => "Ha ocurrido un error, todos los datos son obligatorios", "success" => false);
			}else{
                $params["message"] = $this->do_login($this->input->post());
            }
            
            if(!$params["message"]["success"]){
                $params["data_form"] = $this->input->post();
            }
		}

        $this->load->view("generales/auth/login", $params);
	}


	// Do the login proccess
	function do_login($data){
		$user = $this->Usuarios_Model->login($data["usuario"], $data["password"]);
		$redirect = "Asignaciones";
		if($user){
			$this->session->set_userdata("logged_in", $user);
			header('Location: '.base_url());
			die();
		}
		else{
			return array("type" => "danger", "message" => "Usuario o contraseña incorrectos", "success" => false);
		}
	}

    function do_logout(){
        $this->session->unset_userdata('logged_in');
        header('Location: '.base_url().'Auth/login');
		die();
    }
}
