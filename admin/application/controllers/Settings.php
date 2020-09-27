<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function page($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'page', $data);
		} else {
			redirect('');
		}
	} 

	public function seo($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'seo', $data);
		} else {
			redirect('');
		}
	} 

	public function privace($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'privace', $data);
		} else {
			redirect('');
		}
	} 

	public function cookies($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'cookies', $data);
		} else {
			redirect('');
		}
	} 

	public function google($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'google', $data);
		} else {
			redirect('');
		}
	} 

	public function code_head($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'code_head', $data);
		} else {
			redirect('');
		}
	} 

	public function code_footer($id) {
		if(checkAccess($access_group = ['administrator'], $_SESSION['rola'])) {
            // DEFAULT DATA
			$data = loadDefaultData();

            if($id != '') {
			    $data['v'] = $this->back_m->get_one($this->uri->segment(1), $id);
            }
			echo loadSubViewsBack($this->uri->segment(1), 'code_footer', $data);
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
			$config['allowed_types'] = '*';
			$config['max_size'] = 0;
			$config['max_width'] = 0;
			$config['max_height'] = 0;
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			print_r($_FILES);

			if(isset($_FILES)) {
				foreach ($_FILES as $key => $value) {
					if (!$this->db->field_exists($key, $table)) {
						$this->base_m->create_column($table, $key);
					}
					if ($this->upload->do_upload($key)) {
						$data = $this->upload->data();
						$insert[$key] = $now.'/'.$data['file_name'];  
					}
				}
			}

			if(isset($_POST)) {
				foreach ($_POST as $key => $value) {
					if (!$this->db->field_exists($key, $table)) {
						$this->base_m->create_column($table, $key);
					}
					if($key == 'removed_photo') {
						$insert['photo'] = ''; 
					} elseif($key == 'removed_logo') {
						$insert['logo'] = ''; 
					} elseif($key == 'removed_favicon') {
						$insert['favicon'] = ''; 
					} else {
						$insert[$key] = $value; 
					}
	            }
	        }

            if($type == 'insert') {
			    $this->back_m->insert($table, $insert);
			    $this->session->set_flashdata('flashdata', 'Rekord został dodany!');
            } else {
			    $this->back_m->update($table, $insert, $id);
			    $this->session->set_flashdata('flashdata', 'Rekord został zaktualizowany!');   
            }

			redirect($_SERVER['HTTP_REFERER']);
		} else {
			redirect('');
		}
    }
}