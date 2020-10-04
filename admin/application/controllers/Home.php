<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		if (isset($_COOKIE['login']) && $_COOKIE['login'] == true && isset($_COOKIE['remember']) && $_COOKIE['remember'] == true) {
			$session_data['id'] = $_COOKIE['id'];
			$session_data['first_name'] = $_COOKIE['first_name'];
			$session_data['last_name'] = $_COOKIE['last_name'];
			$session_data['email'] = $_COOKIE['email'];
			$session_data['name'] = $_COOKIE['name'];
			$session_data['rola'] = $_COOKIE['rola'];
            $session_data['avatar'] = $_COOKIE['avatar'];
			$session_data['login'] = TRUE;
			$this->session->set_userdata($session_data);
			redirect('admin');
		} else {
			$this->form_validation->set_rules('login', 'Login', 'min_length[2]|trim');
			$this->form_validation->set_rules('password', 'Hasło', 'min_length[6]|trim');
			$this->form_validation->set_message('min_length', 'Pole %s ma za mało znaków');

			if ($this->form_validation->run() == FALSE){
	            $this->session->set_flashdata('flashdata', validation_errors());
				echo loadLogin('index');
			} else {
				$login = strtolower($this->input->post('login'));
	        	$password = $this->input->post('password');
				if($this->login_m->check_login($login, $password)){
					if ($_POST['remember']) {
                		setcookie('remember', true, time() + (86400 * 30), "/");
					}
					if (isset($_COOKIE['verify'])) {
						redirect('admin');
					} else {
	            		$this->session->set_flashdata('flashdata', 'Kod weryfikacyjny został wysłany na adres e-mail.');
						redirect('home/confirm_code');
					}
				} else {
					echo loadLogin('index');
				}
			}
		}
	}

	public function confirm_code() {
		$this->form_validation->set_rules('code', 'Kod weryfikacyjny', 'max_length[6]|min_length[6]|trim');
		$this->form_validation->set_message('min_length', 'Pole %s ma za mało znaków');
		$this->form_validation->set_message('max_length', 'Pole %s ma za dużo znaków');

		if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('flashdata', validation_errors());
            sendVerifyCode();
			echo loadLogin('confirm_code');
		} else {
			$code = strtolower($this->input->post('code'));
			if($this->login_m->check_code($code)){
				setcookie('verify', true, time() + (86400 * 30), "/");
				redirect('admin');
			} else {
	           	$this->session->set_flashdata('flashdata', 'Błędny kod weryfikacyjny.');
				echo loadLogin('index');
			}
		}
	}

	public function reset_pass() {
		$this->form_validation->set_rules('email', 'Adres E-mail', 'min_length[2]|trim|valid_email');
		$this->form_validation->set_message('min_length', 'Pole %s ma za mało znaków');
		$this->form_validation->set_message('valid_email', 'Błędny adres e-mail');

		if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('flashdata', validation_errors());
			echo loadLogin('reset_pass');
		} else {
			$email = strtolower($this->input->post('email'));
			if($this->login_m->check_email($email)){
				echo loadLogin('index');
			} else {
				echo loadLogin('reset_pass');
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		if (isset($_COOKIE['login'])) {
		    unset($_COOKIE['login']); 
		    setcookie('login', null, -1, '/'); 
		}
		if (isset($_COOKIE['verify'])) {
		    unset($_COOKIE['verify']); 
		    setcookie('verify', null, -1, '/'); 
		}
        $this->session->set_flashdata('flashdata', 'Poprawne wylogowanie');
		redirect('');
	}
	
}