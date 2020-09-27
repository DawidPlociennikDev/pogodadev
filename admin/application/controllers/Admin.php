<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
			$data = loadDefaultData();
			$data['visitors'] = $this->back_m->get_all('visitors');
			$data['unique_visitors'] = $this->stats_m->unique_visitors('visitors', '', '', 10);
			$data['uniq_mobile'] = $this->stats_m->unique_visitors('visitors', 'device', 'mobile' , '');
			$data['uniq_computer'] = $this->stats_m->unique_visitors('visitors', 'device', 'computer', '');
			$data['sensor_data'] = $this->back_m->get_limit('sensor_data', 6);
			$data['current_sensor_data'] = $this->back_m->get_last('sensor_data', 1);
			echo loadViewsBack('index', $data);
		} else {
			redirect('');
		}
	}

	public function delete($table, $id) {
		if(checkAccess($access_group = ['administrator', 'redaktor'], $_SESSION['rola'])) {
			$this->session->set_flashdata('flashdata', 'Rekord został usunięty!');
			$this->back_m->delete($table , $id);
			redirect($_SERVER['HTTP_REFERER']);
		} else {
			redirect('');
		}
	}
}