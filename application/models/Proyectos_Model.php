<?php
Class Proyectos_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    public function get_all($id_user){
        $result=$this->db->query("SELECT * FROM asg_proyectos, cfg_proyectos WHERE docente = '$id_user' AND codpro = proyecto");
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    } 
}
?>