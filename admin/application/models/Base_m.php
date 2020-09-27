<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_m extends CI_Model  
{
    public function create_table($table) {
	    return $this->db->query('CREATE TABLE '.$table.' (
	    	id int NOT NULL AUTO_INCREMENT,
	    	created DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, 
	    	title TEXT,
	    	subtitle TEXT,
	    	description TEXT,
	    	photo TEXT,
	    	alt TEXT,
	    	PRIMARY KEY(id)
	    );');  
    }
    
    public function create_column($table, $name) {
	    return $this->db->query('ALTER TABLE '.$table.' ADD '.$name.' text; ');  
    }
}