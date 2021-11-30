<?php
Class Formula_Obstetrica_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->from("formula_obstetrica");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("formula_obstetrica");
        $this->db->where("id_formula_obstetrica", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("formula_obstetrica", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_formula_obstetrica', $data['id_formula_obstetrica']);
        return $this->db->update('formula_obstetrica', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_formula_obstetrica', $id);
        return $this->db->delete("formula_obstetrica");
    }
}
?>