<?php
Class Atencion_Parto_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("at.*, ci.descripcion as ips, ctp.descripcion as forma");
        $this->db->from("atencion_parto at");
        $this->db->join("cfg_ips ci", "at.ips = ci.codigo", "left outer");
        $this->db->join("cfg_tipo_parto ctp", "at.forma = ctp.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("atencion_parto");
        $this->db->where("id_atencion_parto", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("atencion_parto", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_atencion_parto', $data['id_atencion_parto']);
        return $this->db->update('atencion_parto', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_atencion_parto', $id);
        return $this->db->delete("atencion_parto");
    }
}
?>