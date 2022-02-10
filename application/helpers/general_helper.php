<?php
// Print a json response for ajax calls
if(!function_exists('json_response'))
{
    function json_response($obj = null, $status = false, $text = ""){
        echo json_encode(array("object" => $obj, "status" => $status, "message" => $text));
        die();
    }

}

if(!function_exists('calcularEdad'))
{
    function calcularEdad($fecha_nac) {
        $fecha_nacimiento = new DateTime($fecha_nac);
        $hoy = new DateTime();
        return $hoy->diff($fecha_nacimiento)->y;
    }

}
if(!function_exists('addRequestAdit'))
{
    function addRequestAdit($paciente, $tipo) {
        $CI = &get_instance();
        $CI->load->model('Auditoria_Model');
        $data = array(
            'id_usuario' => logged_user()['id_usuario'],
            'id_paciente' => $paciente,
            'fecha_auditoria' =>  date('Y-m-d'),
            'tipo' => $tipo
        );
        return $CI->Auditoria_Model->create($data);
    }
}

?>