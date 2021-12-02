<?php
Class Estadisticas_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    public function getMadresPorMpio() {
        $this->db->select('m.descripcion AS mpio, IFNULL(COUNT(d.id), 0) madres');
        $this->db->from('cfg_municipio m');
        $this->db->join('datos_basicos d', 'd.mpio=m.codigo', 'left');
        $this->db->group_by('m.codigo');
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }
}
?>