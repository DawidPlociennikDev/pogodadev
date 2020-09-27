<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_m extends CI_Model  
{   
    public function get_all($table) {
        $this->db->order_by('created', 'DESC');
        $query = $this->db->get($table);
        return $query->row();
    }
    public function get_current($table) {
        $this->db->order_by('created', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get($table);
        return $query->row();
    }
    public function parametrs_startpage($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }
}