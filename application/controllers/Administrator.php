<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_admin','panel');
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['content'] = "panel/layout/article";
		$this->load->view('panel/main_layout',$data);
	}

	public function auth(){
		$data['title'] = 'Login';
		$this->load->view('panel/content/_login',$data);
	}

	public function post($act = ""){
		if($act == 'add'){
			$title = 'Add';
			$urlview = "_add-post";
		}else{
			$title = 'Post';
			$urlview = "_list-post";
		}
		$data['title'] = $title;
		$data['content'] = "panel/content/".$urlview;
		$this->load->view('panel/main_layout',$data);
	}

	public function process($act = ""){
		if($act == 'login'){
			$this->load->library('form_validation');
			$email = $this->input->post('username');
			$password = $this->input->post('password');
			$this->form_validation->set_rules([
				[
					'field' => 'username',
					'label' => 'Username',
					'rules' => 'valid_email'
						. (isset($email) && $email === '' ? '|isset' : ''),
				],
				[
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'min_length[5]|max_length[32]'
						. (isset($password) && $password === '' ? '|isset' : ''),
				],
			]);
			if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('panel/main_layout');
				}else{
					//redirect('administrator/auth');
				}
			} else {
				$data = array(
					'username' => $email,
					'password' => $password
				);
				$result = $this->panel->getData('login',$data);
				print_r($result);die;
				if ($result == TRUE) {
					
					// $username = $email;
					$result = $this->panel->getData('in_access_login',$email);
					if ($result != false) {
						$session_data = array(
							'username' => $result[0]->username,
							'email' => $result[0]->email,
							'roleId' => $result[0]->user_role,
							'roleName' => $result[0]->categori,
							'userId' => $result[0]->id
						);
						print_r($session_data);die;
						$this->session->set_userdata('logged_in', $session_data);
						redirect('/');
					}
				} else {
					$data = array(
						'error_message' => 'Invalid Username or Password'
					);
					$this->load->view('panel/content/_login', $data);
				}
			}
		}else{
			echo "jox";
		}
	}

	public function sendEmail(){
		$config = Array(
			//'protocol' => 'smtp',
			'protocol' => 'sendemail',
			'mailpath' => '/usr/sbin/sendmail',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'nuridin50@gmail.com', 
			'smtp_pass' => 'unaspasim', 
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->email->initialize($config);
		$this->load->library('email', $config);
		$message = 'ngetes doang';
		$this->email->set_newline("\r\n");
		$this->email->from('nuridin50@gmail.com'); 
		$this->email->to('nuridin.mu23@gmail.com');
		$this->email->subject('Resume from JobsBuddy for your Job posting');
		$this->email->message($message);
		if($this->email->send())
		{
			echo 'Email sent.';
		}
		else
		{
			show_error($this->email->print_debugger());
		}
	}
}
