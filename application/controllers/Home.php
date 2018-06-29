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

		// if($this->input->post())
		// {
		// 	echo "<pre>";print_r($_POST);exit();
		// }
		$this->load->view('add_questions');
	}

	public function add_questions_data()
	{
		$question = htmlentities($this->input->post('question'));
		$option1 = htmlentities($this->input->post('option1'));
		$option2 = htmlentities($this->input->post('option2'));
		$option3 = htmlentities($this->input->post('option3'));
		$option4 = htmlentities($this->input->post('option4'));
		$answer = htmlentities($this->input->post('answer'));
		$correct = htmlentities($this->input->post('correct'));
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
				$arr1['explanation'] = $answer;
			}
			$this->db->insert('answers',$arr1);

			
			$arr11['question_id'] = $last_id;
			$arr11['answer'] = $option2;
			if($correct == 2)
			{
				$arr11['is_correct'] = '1';
				$arr11['explanation'] = $answer;
			}
			$this->db->insert('answers',$arr11);


			$arr111['question_id'] = $last_id;
			$arr111['answer'] = $option3;
			if($correct == 3)
			{
				$arr111['is_correct'] = '1';
				$arr111['explanation'] = $answer;
			}
			$this->db->insert('answers',$arr111);


			$arr1111['question_id'] = $last_id;
			$arr1111['answer'] = $option4;
			if($correct == 4)
			{				
				$arr1111['is_correct'] = '1';
				$arr1111['explanation'] = $answer;
			}
			$this->db->insert('answers',$arr1111);
		}
	}


	public function list_category()
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}

		$data['category'] = $this->db->get_where('category',array('parent_id'=>0,'status'=>'1'))->result();		
		$this->load->view('list_category',$data);
	}

	public function list_subject($id)
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}

		$data['subject'] = $this->db->get_where('subject',array('category_id'=>$id,'status'=>'1'))->result();
		$this->load->view('list_subject',$data);	
	}

	public function add_category()
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}

		if($this->input->post())
		{
			$arr['parent_id'] = $this->input->post('parent_id');
			$arr['name'] = $this->input->post('name');
			$arr['status'] = "1";
			if($this->db->insert('category',$arr))
			{
				$this->session->set_flashdata('success','Category Added Successfully');
			}
			else
			{
				$this->session->set_flashdata('error','Please try again');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			$data['category'] = $this->db->get_where('category',array('parent_id'=>0))->result();
			$this->load->view('add_category',$data);	
		}
	}

	public function active_or_deactivate($table,$status,$id)
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}

		$arr = array('status'=>"$status");
		$this->db->where('id',$id);
		$this->db->update($table,$arr);

		// echo $_SERVER['HTTP_REFERER'];exit();
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function delete($table,$id)
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}
		
		$this->db->where('id',$id);
		$this->db->delete($table);

		// echo $_SERVER['HTTP_REFERER'];exit();
		redirect($_SERVER['HTTP_REFERER']);
	}

	public function add_general_awareness()
	{
		$session = $this->session->userdata('user');
		if(!isset($session->id) || $session->id == 0)
		{
			redirect("/home/");
		}
		$data = array();
		$this->load->view('add_general_awareness',$data);	
	}

	public function add_general_awareness_data()
	{
		$data['content'] = htmlentities($this->input->post('content'));
		$data['date'] = date("Y-m-d",strtotime($this->input->post('date')));
		$data['status'] = '1';
		$data['views'] = 0;
		$this->db->insert('general_awareness',$data);
		echo 1;
	}

	public function list_questions($id)
	{
		$data = array();
		$this->load->view('list_questions',$data);	
	}


}
