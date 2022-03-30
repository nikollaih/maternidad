<?php
Class Auditoria_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }
    // Create a new item
    public function create($data){
        $debug = $this->db->db_debug;
        $this->db->db_debug = FALSE;
        $this->db->insert('auditoria', $data);
        $this->db->db_debug = $debug;
    }
}
?>