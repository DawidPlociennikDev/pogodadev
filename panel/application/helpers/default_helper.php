<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);

    return $data;
}
