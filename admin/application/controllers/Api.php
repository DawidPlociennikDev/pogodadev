<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function sensor() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
			$api = $this->api_m->get_current('sensor_data');
			$this->output
             	->set_content_type('application/json')
             	->set_status_header(200)
             	->set_output(json_encode($api, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

		} else {
			redirect('');
		}
	}

	public function blog() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
			$api = $this->api_m->get_current('articles');
			$this->output
             	->set_content_type('application/json')
             	->set_status_header(200)
             	->set_output(json_encode($api, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));

		} else {
			redirect('');
		}
	}

}