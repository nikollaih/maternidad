<?php
Class Vacunacion_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("v.*, cv.descripcion as vacuna");
        $this->db->from("vacunacion v");
        $this->db->join("cfg_vacunas cv", "v.cod_vacuna = cv.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("vacunacion");
        $this->db->where("id_vacunacion", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("vacunacion", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_vacunacion', $data['id_vacunacion']);
        return $this->db->update('vacunacion', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_vacunacion', $id);
        return $this->db->delete("vacunacion");
    }
}
?>