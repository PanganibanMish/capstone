<?php
class User extends CI_Model
{
	 public function login_model()
	 {
		$user_type = $this->input->post('user_type');
		$username  = $this->input->post('username');
		$password  = md5($this->input->post('password'));
		if ($user_type == 'Faculty') {

			$sql = $this->db->query("SELECT * FROM userlist WHERE username = '$username' AND password = '$password' AND status <> '0' ")->result();
		}
		return $sql;
	}

	public function processchangepassword_model($user_id, $new_password)
	{
		//sinasabi niya na ngaya i-update mo si userlist na table tapos ribayan mo si value sa database kayang nakalaag sa array $data kung sain ang user_id equals sa $user_id na pinasa mo hali sa controller
		$data = array(
						'password' => md5($new_password), //si $new_password nilalaag nya sa 'password'
						'modified_by' => $user_id,
						'login_first' => 0
					); //ini si mga babaguhon sa database
		$this->db->where('user_id', $user_id); //kung nasain ang hinahanap na data
		$this->db->update('userlist', $data); //update data
		if($this->db->affected_rows() > 0) //tgchecheck niya kung pirang rows ang nabago sa database
			return true;
		else
			return false;
	}

	public function get_user_list()
	{
			$sql = $this->db->query("SELECT * FROM userlist")->result(); //kunon mo gabos ning user data sa table na userlist
			return $sql;
	}
	
	public function getFacultyModel()
	{
		$user_id = $this->input->get('id');
		$sql = $this->db->query("SELECT * FROM userlist WHERE user_id = '$user_id'")->result();
		return $sql;
	}
	public function saveChangesFacultyModel()
	{
		$data_array = array(
								'username' => $this->input->post('username'),
								'first_name' =>$this->input->post('first_name'),
								'last_name' =>$this->input->post('last_name'),
								'contact_no' => $this->input->post('contact_no'),
								'birthday'  => $this->input->post('birthday'),
								'user_type'=> $this->input->post('user_type')
							);
		$user_id = $this->input->post('user_id');
		$this->db->where('user_id', $user_id);
		if($this->db->update('userlist', $data_array) == true)
			return 0;
		return 1;
	}
	public function deleteFaculty($user_id)
	{
		 $this->db->where('user_id', $user_id);
		 return $this->db->delete('userlist');
	}
	public function addFacultyModel()
	{
		$data_array = array(
								'username' => $this->input->post('username'),
								'first_name' =>$this->input->post('first_name'),
								'last_name' =>$this->input->post('last_name'),
								'contact_no' => $this->input->post('contact_no'),
								'birthday'  => $this->input->post('birthday'),
								'user_type'=> $this->input->post('user_type')
							);
		if($this->db->insert('userlist', $data_array) == true)
			return 0;
		return 1;
	}
}
