<?php

class Home extends CI_Controller {
	public function __construct()
	{
    parent::__construct();
    $this->load->database();
	}

	public function index ()
	{
		$this->load->view('home.php');
	}

	public function notepad1()
	{
		$this->load->view('notepad.html');
	}
	public function notepad2()
	{
		$this->load->view('notepad_java.html');
	}
	public function musicplayer()
	{
		$this->load->view('music_player.html');
	}
	public function signup()
	{
		$this->load->view('login.php');
	}
	public function register()
	{
		$this->load->model('signup_model');
		date_default_timezone_set('Asia/Kolkata');
		$now=date('Y-m-d h:i:s', time());
		$user = array('name'=>$this->input->post('name'),'email'=>$this->input->post('email'),'datetime'=>$now);
		$email_check=$this->signup_model->email_check($user['email']);
		if($email_check){
		  $this->signup_model->register_user($user);
		  redirect('http://aksr.co.nf/signup/#popup');
		}
		else{
		  redirect('http://aksr.co.nf/signup/#popup2');
 		}
	}
}

?>