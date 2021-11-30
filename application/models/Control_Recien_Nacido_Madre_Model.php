<?php
Class Control_Recien_Nacido_Madre_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("c.*, cp.descripcion as planificacion");
        $this->db->from("control_recien_nacido_madre c");
        $this->db->join("cfg_planificacion cp", "c.tipo = cp.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("control_recien_nacido_madre");
        $this->db->where("id_control_recien_nacido_madre", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("control_recien_nacido_madre", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_control_recien_nacido_madre', $data['id_control_recien_nacido_madre']);
        return $this->db->update('control_recien_nacido_madre', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_control_recien_nacido_madre', $id);
        return $this->db->delete("control_recien_nacido_madre");
    }
}
?>