<?php
Class Sustancias_Psicoactivas_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    // Get the complete items listing
    public function get_count(){
        $this->db->select("sp.*");
        $this->db->from("sustancias_psicoactivas sp");
        $this->db->group_by("id_paciente");
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function get_all($paciente){
        $this->db->select("sp.id_sustancias_psicoactivas, sp.fecha_ultimo_consumo, sp.created_at, ct.descripcion as sustancia, cf.descripcion as frecuencia");
        $this->db->from("sustancias_psicoactivas sp");
        $this->db->join("cfg_consumo_tipospa ct", "sp.cod_sustancia = ct.codigo");
        $this->db->join("cfg_consumo_frecuencia cf", "sp.cod_frecuencia = cf.codigo");
        $this->db->where("id_paciente", $paciente);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

     // Get the complete items listing
     public function get($id){
        $this->db->from("sustancias_psicoactivas");
        $this->db->where("id_sustancias_psicoactivas", $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    // Create a new item
    public function create($data){
        return $this->db->insert("sustancias_psicoactivas", $data);
    }

    // Update an specific type
    public function update($data){
        $this->db->where('id_sustancias_psicoactivas', $data['id_sustancias_psicoactivas']);
        return $this->db->update('sustancias_psicoactivas', $data);
    }

    // Delete a document type
    public function delete($id){
        $this->db->where('id_sustancias_psicoactivas', $id);
        return $this->db->delete("sustancias_psicoactivas");
    }
}
?>