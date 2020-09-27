<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['visitors'] = $this->back_m->get_all('visitors');
		$data['unique_visitors'] = $this->stats_m->unique_visitors('visitors', '', '', 10);
		$data['uniq_mobile'] = $this->stats_m->unique_visitors('visitors', 'device', 'mobile' , '');
		$data['uniq_computer'] = $this->stats_m->unique_visitors('visitors', 'device', 'computer', '');
		echo loadViewsBack('index', $data);
	}
}