<?php
Class Paraclinicos_Preconcepcional_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_all($paciente, $numero = 1){
        $this->db->select("p.*, cp.nombre as paraclinico, cp.minimo, cp.maximo");
        $this->db->from("paraclinicos_preconcepcional p");
        $this->db->join("cfg_paraclinicos cp", "p.tipo = cp.codigo", "left outer");
        $this->db->where("id_paciente", $paciente);
        $this->db->where("numero_consulta", $numero);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("paraclinicos_preconcepcional");
        $this->db->where("id_paraclinicos_preconcepcional", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("paraclinicos_preconcepcional", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_paraclinicos_preconcepcional', $data['id_paraclinicos_preconcepcional']);
        return $this->db->update('paraclinicos_preconcepcional', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_paraclinicos_preconcepcional', $id);
        return $this->db->delete("paraclinicos_preconcepcional");
    }
}
?>