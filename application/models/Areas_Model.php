<?php
Class Areas_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    public function get_all($id_user){
        $this->db->from("cfg_areas");
        $this->db->where("tipo <> ", "gestion");

        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    } 
}
?>