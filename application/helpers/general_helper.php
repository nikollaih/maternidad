<?php
// Print a json response for ajax calls
if(!function_exists('json_response'))
{
    function json_response($obj = null, $status = false, $text = ""){
        echo json_encode(array("object" => $obj, "status" => $status, "message" => $text));
        die();
    }

}
?>