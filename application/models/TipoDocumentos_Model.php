<?php
Class TipoDocumentos_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }


    // Create a new document type
    public function create($data){
        $this->db->insert("cfg_tipodoc", $data);
        return $this->get();
    }

    // Get the complete document's type listing
    public function get(){
        $this->db->from("cfg_tipodoc");
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    // Update an specific type
    public function update($data){
        $this->db->where("codigo", $data["codigo"]);
        $this->db->update("cfg_tipodoc", $data);
        return $this->get();
    }

    // Delete a document type
    public function delete($id_doc_type){
        $this->db->where("codigo", $id_doc_type);
        return $this->db->delete("cfg_typodoc");
    }
}
?>