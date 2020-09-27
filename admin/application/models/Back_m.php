<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_m extends CI_Model  
{
    public function get_all($table) {
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_limit($table, $limit) {
        $this->db->limit($limit);
        $this->db->order_by("created", "desc");
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_last($table) {
        $this->db->limit(1);
        $this->db->order_by("created", "desc");
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_distinct_date($table) {
        $query = $this->db->query('SELECT DISTINCT id, YEAR(created) AS "Year", MONTH(created) AS "Month", IJPString, Temperature, Humidity FROM sensor_data');
        return $query->row();
    }

    public function get_parametrs($table, $limit) {
        $this->db->limit($limit, 3);
        $this->db->order_by("created", "asc");
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_codeParams($table) {
        $this->db->select('code');
        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_one($table, $id) {
        $this->db->where(['id' => $id]);
        $query = $this->db->get($table);
        return $query->row();
    }

    public function get_where($table, $key, $value) {
        $this->db->where($key, $value);
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
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function update($table, $data, $id) {
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