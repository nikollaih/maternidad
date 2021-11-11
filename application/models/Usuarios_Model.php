<?php
Class Usuarios_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Login system
    function login($user, $password){
        $this->db->from("usuarios u");
        $this->db->where("u.usuario", $user);
        $this->db->where("u.clave", $password);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }
}
?>