<?php
Class Pacientes_Model extends CI_Model {
    function __construct(){        
        parent::__construct();
        $this->load->database();
    }
    // Find by id and name
    public function find($pattern){
        $this->db->from('datos_basicos d');
        $this->db->like('d.numero_documento', $pattern, 'after'); 
        $this->db->or_like('d.nombres', $pattern, 'after'); 
        $this->db->or_like('d.apellidos', $pattern, 'after'); 
        $this->db->order_by('d.numero_documento', 'ASC');
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function getProfile($data) {
        $this->db->select('d.nombres, d.apellidos, d.fecha_nac, s.descripcion as estado, e.descripcion as eps');
        $this->db->from('datos_basicos d');
        $this->db->join('cfg_eps e', 'd.eps = e.codigo');
        $this->db->join('cfg_estado s', 'd.estado = s.codigo');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        $return = null;
        if ($result->num_rows() > 0) {
            $result = $result->result_array();
            $return = array(
                'nombre' => $result[0]['nombres'].' '.$result[0]['apellidos'],
                'edad' => $this->calcularEdad($result[0]['fecha_nac']),
                'estado' => $result[0]['estado'],
                'eps' => $result[0]['eps']
            );
        }
        return $return;
    }
    public function calcularEdad($fecha_nac) {
        $fecha_nacimiento = new DateTime($fecha_nac);
        $hoy = new DateTime();
        return $hoy->diff($fecha_nacimiento)->y;
    }

    public function getPersonal($data) {
        $this->db->select('d.tipodoc, d.numero_documento, d.nombres, d.apellidos, d.sexo, d.genero, d.fecha_nac, d.telefono');
        $this->db->from('datos_basicos d');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function getUbicacion($data) {
        $this->db->select('d.mpio, d.zona');
        $this->db->from('datos_basicos d');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function getOtros($data) {
        $this->db->select('d.poblacion, d.discapacidad, d.etnia, d.educacion');
        $this->db->from('datos_basicos d');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }
}
?>