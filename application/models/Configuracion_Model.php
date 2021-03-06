<?php
Class Configuracion_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get($tableName){
        $this->db->from($tableName);
        $this->db->order_by("descripcion", "asc");
        $this->db->where("estado", 1);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    // Create a new item
    public function create($data, $tableName){
        return $this->db->insert($tableName, $data);
    }
    // Find item by code
    public function find($data, $tableName){
        $this->db->from($tableName);
        $this->db->where('codigo', $data); 
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }
    // Update an specific type
    public function update($data, $tableName){
        $this->db->where('codigo', $data['codigo']);
        $this->db->update($tableName, $data);
        return $this->get($tableName);
    }

    // Delete a document type
    public function delete($code, $tableName){
        $this->db->where('codigo', $code);
        return $this->db->update($tableName, array("estado" => 0));
    }
}
?>