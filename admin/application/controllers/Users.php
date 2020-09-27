<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
			if (!$this->db->table_exists($this->uri->segment(1))){
				$this->base_m->create_table($this->uri->segment(1));
			}

            // DEFAULT DATA
			$data = loadDefaultData();

			$data['rows'] = $this->back_m->get_all($this->uri->segment(1));
			echo loadSubViewsBack($this->uri->segment(1), 'index', $data);
		} else {
			redirect('');
		}
	}

	public function form($type, $id = '') {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'form', $data);
		} else {
			redirect('');
		}
	} 

	public function action($type, $table, $id = '') {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
			$now = date('Y-m-d');
			if (!is_dir('uploads/'.$now)) {
				mkdir('./uploads/' . $now, 0777, TRUE);
			}
			$config['upload_path'] = './uploads/'.$now;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if(isset($_FILES)) {
				if ($this->upload->do_upload('photo')) {
					$data = $this->upload->data();
					$insert['avatar'] = $now.'/'.$data['file_name'];  
				}
			}

			foreach ($_POST as $key => $value) {
				if (!$this->db->field_exists($key, $table)) {
					$this->base_m->create_column($table, $key);
				}
				if($key == 'removed_photo') {
					$insert['avatar'] = ''; 
				} elseif($key == 'password') {
					$insert[$key] = hashPassword($value); 
				}
				else {
					$insert[$key] = $value; 
				}
            }
			$insert['rola'] = 'administrator'; 

            if($type == 'insert') {
			    $this->back_m->insert($table, $insert);
			    $this->session->set_flashdata('flashdata', 'Rekord został dodany!');
            } else {
			    $this->back_m->update($table, $insert, $id);
			    $this->session->set_flashdata('flashdata', 'Rekord został zaktualizowany!');   
            }

			redirect($table);
		} else {
			redirect('');
		}
    }
}