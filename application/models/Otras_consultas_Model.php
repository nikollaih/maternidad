<?php
Class Otras_Consultas_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("oc.*, coc.descripcion as consulta");
        $this->db->from("otras_consultas oc");
        $this->db->join("cfg_otras_consultas coc", "oc.codigo_consulta = coc.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("otras_consultas");
        $this->db->where("id_otras_consultas", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("otras_consultas", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_otras_consultas', $data['id_otras_consultas']);
        return $this->db->update('otras_consultas', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_otras_consultas', $id);
        return $this->db->delete("otras_consultas");
    }
}
?>