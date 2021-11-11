<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invitados extends Application_Controller {
	public function aplicativos(){
		$params["title"] = "Mezclas";
        $params["subtitle"] = "Mezclas";
        $this->load_layout("invitado/aplicativos", $params);
	}
}
