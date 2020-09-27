<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Synchronize extends CI_Controller {

	public function index() {
		$table = 'sensor_data';
		$json_api = json_decode(file_get_contents(apiURL()),true);
		$avaliable_parametrs = $this->back_m->get_codeParams('parametrs');
		foreach ($avaliable_parametrs as $ap_k => $ap_v) {
			foreach ($json_api as $k => $v) {
				if($k == $ap_v->code) {
					$data[$k] = $v;
					if (!$this->db->field_exists($k, $table)) {
						$this->base_m->create_column($table, $k);
					}
				}
			}
		}
		$query = $this->back_m->insert($table, $data);
		if($query) {
			$this->session->set_flashdata('global_alert_success', 'Dane zostały pobrane z czujnika!');
		} else {
			$this->session->set_flashdata('global_alert_error', 'Wystąpił nieznany problem. Skontaktuj się z administracją systemu.');
		}
		
		redirect($_SERVER['HTTP_REFERER']);
	}

}