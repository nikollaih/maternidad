<?php
Class Riesgo_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("r.*, cr.descripcion as riesgo");
        $this->db->from("riesgo r");
        $this->db->join("cfg_riesgo cr", "r.codigo_riesgo = cr.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function get_last($paciente){
        $this->db->select("r.*, cr.descripcion as riesgo");
        $this->db->from("riesgo r");
        $this->db->join("cfg_riesgo cr", "r.codigo_riesgo = cr.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $this->db->order_by("r.created_at", "DESC");
        $this->db->limit(1);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("riesgo");
        $this->db->where("id_riesgo", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("riesgo", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_riesgo', $data['id_riesgo']);
        return $this->db->update('riesgo', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_riesgo', $id);
        return $this->db->delete("riesgo");
    }
}
?>