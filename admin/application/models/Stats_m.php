<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats_m extends CI_Model  
{
    public function unique_visitors($table, $field = '', $where = '', $limit = '') {
    	if($field != '' && $where != '') {
    		$whereSQL = 'WHERE `' . $field . '` = "' . $where . '"';
    	} else {
    		$whereSQL = '';
    	}

    	if($limit != '') {
    		$limit = 'LIMIT ' . $limit;
    	}

        $query = $this->db->query("SELECT (YEAR(`created`) * 100) + MONTH(`created`) AS day, count(*) AS uniq FROM ".$table." " . $whereSQL . " GROUP BY (YEAR(`created`) * 100) + MONTH(`created`) ORDER BY `created` DESC " . $limit);
        return $query->result();
    }

    public function get_max($table) {
        $this->db->select_max('Temperature');
        $this->db->select_max('Humidity');
        $this->db->select_max('PM1');
        $this->db->select_max('PM25');
        $this->db->select_max('PM10');
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_min($table) {
        $this->db->select_min('Temperature');
        $this->db->select_min('Humidity');
        $this->db->select_min('PM1');
        $this->db->select_min('PM25');
        $this->db->select_min('PM10');
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_all_date($table, $start, $end) {
        $this->db->where('created >=', $start);
        $this->db->where('created <=', $end);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_max_date($table, $start, $end) {
        $this->db->where('created >=', $start);
        $this->db->where('created <=', $end);
        $this->db->select_max('Temperature');
        $this->db->select_max('Humidity');
        $this->db->select_max('PM1');
        $this->db->select_max('PM25');
        $this->db->select_max('PM10');
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_min_date($table, $start, $end) {
        $this->db->where('created >=', $start);
        $this->db->where('created <=', $end);
        $this->db->select_min('Temperature');
        $this->db->select_min('Humidity');
        $this->db->select_min('PM1');
        $this->db->select_min('PM25');
        $this->db->select_min('PM10');
        $query = $this->db->get($table);
        return $query->result();
    }

}