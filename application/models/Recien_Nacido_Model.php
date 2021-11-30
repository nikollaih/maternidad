<?php
Class Recien_Nacido_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("rn.*, s.descripcion as sexo");
        $this->db->from("recien_nacido rn");
        $this->db->join("cfg_sexo s", "rn.sexo = s.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("recien_nacido");
        $this->db->where("id_recien_nacido", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("recien_nacido", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_recien_nacido', $data['id_recien_nacido']);
        return $this->db->update('recien_nacido', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_recien_nacido', $id);
        return $this->db->delete("recien_nacido");
    }
}
?>