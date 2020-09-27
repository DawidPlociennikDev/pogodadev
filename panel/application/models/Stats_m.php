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

    public function get_one($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_images($table, $table_name, $id) {
        $this->db->where([
            'item_id' => $id,
            'table_name' => $table_name,
            ]);
        $query = $this->db->get($table);
        return $query->result();
    }

    public function insert($table, $data) {
        $data = $this->security->xss_clean($data);
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function update($table, $data, $id) {
        $data = $this->security->xss_clean($data);
        $this->db->where(['id' => $id]);
        $query = $this->db->update($table, $data);
        return $query;
    }

    public function delete($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->delete($table);
        return $query;
    }
}