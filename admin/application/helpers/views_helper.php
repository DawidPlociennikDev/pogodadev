<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function loadViewsBack($name_page, $data = '') {
    $CI = &get_instance();
    return  $CI->load->view('blocks/head', $data, TRUE) . 
            $CI->load->view('blocks/header', $data, TRUE) .
            $CI->load->view('pages/'.$name_page, $data, TRUE) . 
            $CI->load->view('blocks/footer', $data, TRUE);
}

function loadLogin($name_page, $data = '') {
    $CI = &get_instance();
    return $CI->load->view('login/'.$name_page, $data, TRUE);
}

function loadSubViewsBack($name_page, $subview, $data = '') {
    $CI = &get_instance();
    return  $CI->load->view('blocks/head', $data, TRUE) . 
            $CI->load->view('blocks/header', $data, TRUE) .
            $CI->load->view('pages/'.$name_page.'/'.$subview, $data, TRUE) .
            $CI->load->view('blocks/footer', $data, TRUE);
}