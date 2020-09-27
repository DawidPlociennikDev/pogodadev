<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadDefaultData() {
    $CI = &get_instance();
	$data['user'] = $CI->back_m->get_one('users', $_SESSION['id']);
	$data['articles'] = $CI->back_m->get_limit('articles', 6);
	$data['links'] = $CI->back_m->get_limit('links', 6);
	$data['parametrs'] = $CI->back_m->get_limit('parametrs', 6);

    return $data;
}
