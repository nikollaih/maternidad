<?php
Class Estadisticas_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }

    public function getMadresPorMpio() {
        $this->db->select('m.descripcion AS mpio, IFNULL(COUNT(d.id), 0) madres');
        $this->db->from('cfg_municipio m');
        $this->db->join('datos_basicos d', 'd.mpio=m.codigo');
        $this->db->group_by('m.codigo');
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function getMadresPorMes($anio = null){
        if($anio == null)
            $anio = date("Y");
        $this->db->select('COUNT(id) AS cantidad, MONTH(created_at) as mes, YEAR(created_at) as anio');
        $this->db->from('datos_basicos');
        $this->db->where("YEAR(created_at)", $anio);
        $this->db->group_by('YEAR(created_at), MONTH(created_at)');
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }
}
?>