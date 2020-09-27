<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistics extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_limit('sensor_data',7);
			$data['avaliable_parametrs'] = $this->back_m->get_all('parametrs');
			$data['max_parametrs'] = $this->stats_m->get_max('sensor_data');
			$data['min_parametrs'] = $this->stats_m->get_min('sensor_data');
			echo loadSubViewsBack($this->uri->segment(1), 'index', $data);
		} else {
			redirect('');
		}
	}

	public function yesterday() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();
			$yesterday = date('Y-m-d',strtotime("-1 days"));
			$data['rows'] = $this->stats_m->get_all_date('sensor_data', $yesterday, $yesterday);
			$data['avaliable_parametrs'] = $this->back_m->get_all('parametrs');
			$data['max_parametrs'] = $this->stats_m->get_max_date('sensor_data', $yesterday, $yesterday);
			$data['min_parametrs'] = $this->stats_m->get_min_date('sensor_data', $yesterday, $yesterday);
			echo loadSubViewsBack($this->uri->segment(1), 'index', $data);
		} else {
			redirect('');
		}
	}

	public function lastweek() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();
			$lastweekFirstDay = date('Y-m-d',strtotime("first day of previous week"));
			$lastweekLastDay = date('Y-m-d',strtotime("last day of previous week"));
			$data['rows'] = $this->stats_m->get_all_date('sensor_data', $lastweekFirstDay, $lastweekLastDay);
			$data['avaliable_parametrs'] = $this->back_m->get_all('parametrs');
			$data['max_parametrs'] = $this->stats_m->get_max_date('sensor_data', $lastweekFirstDay, $lastweekLastDay);
			$data['min_parametrs'] = $this->stats_m->get_min_date('sensor_data', $lastweekFirstDay, $lastweekLastDay);
			echo loadSubViewsBack($this->uri->segment(1), 'index', $data);
		} else {
			redirect('');
		}
	}

	public function lastmonth() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();
			$lastmonthFirstDay = date('Y-m-d', strtotime("first day of previous month"));
			$lastmonthLastDay = date('Y-m-d', strtotime("last day of previous month"));
			$data['rows'] = $this->stats_m->get_all_date('sensor_data', $lastmonthFirstDay, $lastmonthLastDay);
			$data['avaliable_parametrs'] = $this->back_m->get_all('parametrs');
			$data['max_parametrs'] = $this->stats_m->get_max_date('sensor_data', $lastmonthFirstDay, $lastmonthLastDay);
			$data['min_parametrs'] = $this->stats_m->get_min_date('sensor_data', $lastmonthFirstDay, $lastmonthLastDay);
			echo loadSubViewsBack($this->uri->segment(1), 'index', $data);
		} else {
			redirect('');
		}
	}

	public function owntime() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();
			echo loadSubViewsBack($this->uri->segment(1), 'owntime', $data);
		} else {
			redirect('');
		}
	}

	public function renderOwntime() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();
			$start = date('Y-m-d', strtotime($_GET['start']));
			$end = date('Y-m-d', strtotime($_GET['end']));
			$data['rows'] = $this->stats_m->get_all_date('sensor_data', $start, $end);
			$data['avaliable_parametrs'] = $this->back_m->get_all('parametrs');
			$data['max_parametrs'] = $this->stats_m->get_max_date('sensor_data', $start, $end);
			$data['min_parametrs'] = $this->stats_m->get_min_date('sensor_data', $start, $end);
			$this->load->view('pages/statistics/renderOwntime', $data);
		} else {
			redirect('');
		}
	}

}