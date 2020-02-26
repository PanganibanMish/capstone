<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

        $this->load->library('form_validation');

		if($session_data = $this->session->userdata('set_session'))
		{
			redirect('Welcome/home','refresh');
		}
		else
		{
			$this->load->view('login');
		}
	}
	public function login()
	{
		if($session_data = $this->session->userdata('set_session'))
		{
			redirect('Welcome/home','refresh'); //nag reredirect paduman sa welcome/home page
		}
		else
		{
			$data = $this->User->login_model(); //ini ang nag aapod ning function sa model tapos tglalaag nya si value sa $data
			if (sizeof($data) > 0) //tgchecheck nya kung pira ang row na nakua sa database or kung pira ang size kang data.
			{
				$session_array = array(); //declaration lang ni ning array
				foreach ($data as $row) //for loop kang data per row. Tapos si $row siya ang nag popoint kang kada column sa database. Example user_id column.
				{
					$session_array = array(
											'user_id' 		=> $row->user_id, //'user_id' => gibo mo lang yan. Declaration. Dawa ano yan. // $row->user_id, pointer siya. Tgpopoint niya tong column sa database
											'fullname'	=> $row->first_name." ".$row->last_name,
											'user_type'		=> $row->user_type
										);
					$session_data = $this->session->set_userdata('set_session', $session_array); //$session_array tglalaag mo na sa session.
					//Ang session siya tong nagsisave ning data sa browser
					//$session_data - declaration na laganan kang session
					if ($row->login_first == 1) {
						redirect('Welcome/changepassword', 'refresh');
					}
					else
					{
						redirect('Welcome/home', 'refresh');
					}
				}
			}
			else
			{
				redirect('Welcome', 'refresh');
			}
		}

	}
	public function changepassword()
	{
		if($session_data = $this->session->userdata('set_session')) //check if nakalog in na or may nakasave na ning session sa browser. 
		{
			$this->load->view('changepassword'); //load view
		}
		else
        {
        	redirect('Welcome','refresh'); //kung mayong session, mabalik siya sa login
        }
	}
	public function processchangepassword() //process kang pag change password
	{
		if($session_data = $this->session->userdata('set_session'))
		{
			$new_password = $this->input->post('new_password'); //pang kua ning input data sa view
			$confirm_password = $this->input->post('confirm_password');
			$user_id = $session_data['user_id']; //get user_id from session
			if($new_password == $confirm_password)
			{
				$data = $this->User->processchangepassword_model($user_id, $new_password);//maduman ka sa model na user tapos hahanapon mo si function na processchangepassword_model($user_id, $new_password)
				redirect('Welcome/home','refresh'); //redirect sa home
			}
			else
			{
				$this->session->set_flashdata('message', 'Password does not match'); //pag ma flash ning message sa view
				redirect('Welcome/changepassword','refresh');
			}
		}
		else
		{
			redirect('Welcome','refresh');
		}
				//redirect('Welcome/changepassword','refresh');
	}

	public function home()
	{
		if($session_data = $this->session->userdata('set_session')) 
		{
			$data['user_session'] = $session_data;
        	$this->load->view('header', $data);
        	$this->load->view('home'); //loads view php files
        	$this->load->view('footer');
        }
        else
        {
        	redirect('Welcome','refresh');
        }
	}
	public function Faculty()
	{
		if($session_data = $this->session->userdata('set_session')) 
		{
			$data['user_session'] = $session_data;
			$data['getUser'] = $this->User->get_user_list(); //hali sa model function na kinukua nya si userlist. Read ni.
        	$this->load->view('header', $data); //nagviview ning data (userlist, session data) paduman view.
        	$this->load->view('administration/faculty'); //loads view php files
        	$this->load->view('footer');
        }
        else
        {
        	redirect('Welcome','refresh');
        }
	}
	public function UpdateFaculty()
	{
		if($session_data = $this->session->userdata('set_session'))
		{
			$data['user_session'] = $session_data;
			$data['getUser'] = $this->User->getFacultyModel();
        	$this->load->view('header', $data); //nagviview ning data (userlist, session data) paduman view.
        	$this->load->view('administration/UpdateFaculty'); //loads view php files
        	$this->load->view('footer');
        }
        else
        {
        	redirect('Welcome','refresh');
        } 
	}
	public function savechangesFaculty()
	{
		if($session_data = $this->session->userdata('set_session'))
		{
			$data['session'] = $session_data;
			$result = $this->User->saveChangesFacultyModel();
			$user_id = $this->input->post('user_id');
			if($result == 0)
			{
				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible text-center">
            												<h4><i class="icon fa fa-check"></i> Yey!</h4>
											            		User was successfully updated.      	
											            </div>');
				redirect('Welcome/UpdateFaculty?id='.$user_id,'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible text-center">
        									<h4><i class="icon fa fa-ban"></i> Alert!</h4>
							            		Failed in updating user.      	
							            </div>');
				redirect('Welcome/UpdateFaculty?id='.$user_id,'refresh');
			}
	    }
	    else
        {
        	redirect('Welcome','refresh');
        }
	}
	public function deleteFaculty()
	{
		$user_id = $this->input->get('id');
		$id = $this->User->deleteFaculty($user_id);

		redirect('Welcome/faculty','refresh');
	} 
	public function createFaculty()
	{
		if($session_data = $this->session->userdata('set_session'))
		{
			$data['user_session'] = $session_data;
			$data['getUser'] = $this->User->addFacultyModel();
        	$this->load->view('header', $data); //nagviview ning data (userlist, session data) paduman view.
        	$this->load->view('administration/addFaculty'); //loads view php files
        	$this->load->view('footer');
        }
        else
        {
        	redirect('Welcome','refresh');
        } 
	}
	public function addFaculty()
	{
		if($session_data = $this->session->userdata('set_session'))
		{
			$data['session'] = $session_data;
			$result = $this->User->addFacultyModel();
			if($result == 0)
			{
				$this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible text-center">
            												<h4><i class="icon fa fa-check"></i> Yey!</h4>
											            		Faculty was successfully added.      	
											            </div>');
				redirect('Welcome/Faculty', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible text-center">
        									<h4><i class="icon fa fa-ban"></i> Alert!</h4>
							            		Failed in Adding faculty.      	
							            </div>');
				redirect('Welcome/Faculty', 'refresh');
			}
	    }
	    else
        {
        	redirect('Welcome','refresh');
        }
	} 
	public function logout()
	{
		session_destroy();
		redirect('Welcome','refresh');
	}


}
