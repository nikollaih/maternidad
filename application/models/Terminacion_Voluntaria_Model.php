<?php
Class Terminacion_Voluntaria_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("tv.*, vc.descripcion as causal, vd.descripcion as dimension");
        $this->db->from("terminacion_voluntaria tv");
        $this->db->join("cfg_voluntaria_causa vc", "tv.causal = vc.codigo", "left outer");
        $this->db->join("cfg_voluntaria_dimension vd", "tv.dimension = vd.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("terminacion_voluntaria");
        $this->db->where("id_terminacion_voluntaria", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("terminacion_voluntaria", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_terminacion_voluntaria', $data['id_terminacion_voluntaria']);
        return $this->db->update('terminacion_voluntaria', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_terminacion_voluntaria', $id);
        return $this->db->delete("terminacion_voluntaria");
    }
}
?>