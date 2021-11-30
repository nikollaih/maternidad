<?php
Class Control_Prenatal_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("cp.*, ct.descripcion as tardio");
        $this->db->from("control_prenatal cp");
        $this->db->join("cfg_tardio ct", "cp.ingreso_tardio = ct.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("control_prenatal");
        $this->db->where("id_control_prenatal", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("control_prenatal", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_control_prenatal', $data['id_control_prenatal']);
        return $this->db->update('control_prenatal', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_control_prenatal', $id);
        return $this->db->delete("control_prenatal");
    }
}
?>