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

	public function add_questions()
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}

		if($this->input->post())
		{
			echo "<pre>";print_r($_POST);exit();
		}
		$this->load->view('add_questions');
	}

	public function add_questions_data()
	{

		$question = htmlentities($this->input->post('question'));
		$option1 = $this->input->post('option1');
		$option2 = $this->input->post('option2');
		$option3 = $this->input->post('option3');
		$option4 = $this->input->post('option4');
		$answer = $this->input->post('answer');
		$correct = $this->input->post('correct');
		$chapter = $this->input->post('chapter');

		if($question && $option1 && $option2 && $option3 && $option4 && $correct && $chapter)
		{
			$arr['questions'] = $question;			
			$arr['added_by'] = 1;
			$arr['chapter_id'] = $chapter;
			$arr['added_date'] = date("Y-m-d");

			$this->db->insert('questions',$arr);
			$last_id = $this->db->insert_id();

			$arr1['question_id'] = $last_id;
			
			$arr1['answer'] = $option1;
			if($correct == 1)
			{
				$arr1['is_correct'] = '1';
			}
			$this->db->insert('answers',$arr1);

			
			$arr11['question_id'] = $last_id;
			$arr11['answer'] = $option2;
			if($correct == 2)
			{
				$arr11['is_correct'] = '1';
			}
			$this->db->insert('answers',$arr11);


			$arr111['question_id'] = $last_id;
			$arr111['answer'] = $option3;
			if($correct == 3)
			{
				$arr111['is_correct'] = '1';
			}
			$this->db->insert('answers',$arr111);


			$arr1111['question_id'] = $last_id;
			$arr1111['answer'] = $option4;
			if($correct == 4)
			{				
				$arr1111['is_correct'] = '1';
			}
			$this->db->insert('answers',$arr1111);
		}
	}


}
