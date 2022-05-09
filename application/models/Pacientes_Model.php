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
        $this->db->select('d.id, d.nombres, d.apellidos, d.fecha_nac, s.descripcion as estado, e.descripcion as eps');
        $this->db->from('datos_basicos d');
        $this->db->join('cfg_eps e', 'd.eps = e.codigo');
        $this->db->join('cfg_estado s', 'd.estado = s.codigo');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        $return = null;
        if ($result->num_rows() > 0) {
            $result = $result->result_array();
            $return = array(
                'id' => $result[0]['id'],
                'nombre' => $result[0]['nombres'].' '.$result[0]['apellidos'],
                'edad' => calcularEdad($result[0]['fecha_nac']),
                'estado' => $result[0]['estado'],
                'eps' => $result[0]['eps']
            );
        }
        return $return;
    }

    public function getPersonal($data) {
        $this->db->select('d.id, d.tipodoc, d.numero_documento, d.nombres, d.apellidos, d.sexo, d.genero, d.fecha_nac, d.telefono');
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
        $this->db->select('d.poblacion, d.discapacidad, d.etnia, d.educacion, d.eps, d.regimen');
        $this->db->from('datos_basicos d');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        return ($result->num_rows() > 0) ? $result->result_array() : false;
    }

    public function actualizar($data) {
        $id = $data['id'];
        unset($data['id']);
        $this->db->where('id', $id);
        return $this->db->update('datos_basicos', $data);
    }

    public function crear($data) {
        return $this->db->insert('datos_basicos', $data);
    }

    public function getAlertas($data) {
        $this->db->select('d.id, d.fecha_nac, count(s.id_sustancias_psicoactivas) as sustancias, count(vi.id_violencia_intrafamiliar) as violencia');
        $this->db->from('datos_basicos d');
        $this->db->join('sustancias_psicoactivas s', 's.id_paciente = d.id');
        $this->db->join('violencia_intrafamiliar vi', 'vi.id_paciente = d.id');
        $this->db->where('d.id', $data);
        $result = $this->db->get();
        $return = null;
        if ($result->num_rows() > 0) {
            $result = $result->result_array();
            $return = array(
                'id' => $result[0]['id'],
                'edad' => calcularEdad($result[0]['fecha_nac']),
                'sustancias' => $result[0]['sustancias'],
                'violencia' => $result[0]['violencia']
            );
        }
        return $return;
    }
}
?>