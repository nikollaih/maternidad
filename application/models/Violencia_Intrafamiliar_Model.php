<?php
Class Violencia_intrafamiliar_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->from("violencia_intrafamiliar");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function get_count(){
        $this->db->from("violencia_intrafamiliar");
        $this->db->group_by("id_paciente");
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("violencia_intrafamiliar");
        $this->db->where("id_violencia_intrafamiliar", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("violencia_intrafamiliar", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_violencia_intrafamiliar', $data['id_violencia_intrafamiliar']);
        return $this->db->update('violencia_intrafamiliar', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_violencia_intrafamiliar', $id);
        return $this->db->delete("violencia_intrafamiliar");
    }
}
?>