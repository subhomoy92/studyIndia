<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		parent::__construct();	
		$this->load->library('myencrypt');			
	}
	public function index()
	{	
		if($this->input->post())
		{

			$this->form_validation->set_rules('username','Username is required','required');
			$this->form_validation->set_rules('password','Password is required','required');

			if($this->form_validation->run() == true)
			{				
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				$data = $this->db->get_where('admin',array('username'=>$username))->row();
				if(count($data) > 0)
				{
					$pass = $this->myencrypt->decrypt_data($data->password);
					if($password == $pass)
					{
						$this->session->set_userdata(array('user'=>$data));
						redirect('home/dashboard');
					}
				}
			}
			else
			{
				echo validation_errors();
			}
		}		
		$this->load->view('login');
	}

	public function dashboard()
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}
		$this->load->view('dashboard');

	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/home/');
	}


}
