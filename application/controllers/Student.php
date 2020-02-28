<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
	public function students()
	{
		if($session_data = $this->session->userdata('set_session')) 
		{
			$data['user_session'] = $session_data;
        	$this->load->view('header', $data);
        	$this->load->view('student/student_list'); //loads view php files
        	$this->load->view('footer');
        }
        else
        {
        	redirect('Welcome','refresh');
        }
	}
}