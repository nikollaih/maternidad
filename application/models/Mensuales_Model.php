<?php
Class Mensuales_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("m.*, cdx.descripcion as dx_descripcion, cec.descripcion as ec_descripcion");
        $this->db->from("mensuales m");
        $this->db->join("cfg_dx cdx", "m.dx = cdx.codigo");
        $this->db->join("cfg_estado_conciencia cec", "m.conciencia = cec.codigo");
        $this->db->where("m.id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("mensuales");
        $this->db->where("id_mensuales", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("mensuales", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_mensuales', $data['id_mensuales']);
        return $this->db->update('mensuales', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_mensuales', $id);
        return $this->db->delete("mensuales");
    }
}
?>