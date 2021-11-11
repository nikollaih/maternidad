<?php
Class Asignaciones_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    public function get_all($id_user){
        $result=$this->db->query("SELECT DISTINCT codmateria, nomarea, nommateria, grado, icomateria from asg_materias, cfg_materias, cfg_areas WHERE docente = '$id_user' AND codmateria=materia And codarea=area");
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }  
}
?>