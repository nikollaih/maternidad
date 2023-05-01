<?php
Class Paraclinicos_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente){
        $this->db->select("p.*, cp.descripcion as paraclinico, cp.minimo, cp.maximo");
        $this->db->from("paraclinicos p");
        $this->db->join("cfg_paraclinicos cp", "p.tipo = cp.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("paraclinicos");
        $this->db->where("id_paraclinicos", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("paraclinicos", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_paraclinicos', $data['id_paraclinicos']);
        return $this->db->update('paraclinicos', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_paraclinicos', $id);
        $query = $this->db->delete("paraclinicos");
        return $query;
    }
}
?>