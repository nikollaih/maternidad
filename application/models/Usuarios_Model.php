<?php
Class Usuarios_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    function login($user, $password){
        $this->db->from("usuarios u");
        $this->db->where("u.usuario", $user);
        $this->db->where("u.password", md5($password));
        $this->db->where("u.estado", 1);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    function get_all(){
        $this->db->select("u.*, cur.descripcion as rol_name");
        $this->db->from("usuarios u");
        $this->db->join("cfg_usuarios_roles cur", "u.rol = cur.codigo");
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    function get($id, $field = "id_usuario"){
        $this->db->select("u.*, cur.codigo as rol_name");
        $this->db->from("usuarios u");
        $this->db->join("cfg_usuarios_roles cur", "u.rol = cur.codigo");
        $this->db->where($field, $id);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->row_array() : false;
    }

    function create($data){
        return $this->db->insert("usuarios", $data);
    }

    function update($data){
        $this->db->where("id_usuario", $data["id_usuario"]);
        return $this->db->update("usuarios", $data);
    }
}
?>