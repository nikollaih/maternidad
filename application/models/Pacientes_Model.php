<?php
Class Pacientes_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }
    // Find by id and name
    public function find($pattern){
        $this->db->from('datos_basicos d');
        $this->db->like('d.numero_documento', $pattern, 'after'); 
        $this->db->or_like('d.nombres', $pattern, 'after'); 
        $this->db->or_like('d.apellidos', $pattern, 'after'); 
        $this->db->order_by('d.numero_documento', 'ASC');
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }
}
?>