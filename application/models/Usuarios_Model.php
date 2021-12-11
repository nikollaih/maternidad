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
        $this->db->where("u.password", md5($password));
        $this->db->where("u.estado", 1);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }
}
?>