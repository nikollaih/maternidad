<?php
    if(!function_exists('ultimo_riesgo'))
    {
        function ultimo_riesgo($id_paciente){
            $CI = &get_instance();
            $CI->load->model('Riesgo_Model');
            
            $riesgo = $CI->Riesgo_Model->get_last($id_paciente);
            return $riesgo;
        }
    
    }
?>