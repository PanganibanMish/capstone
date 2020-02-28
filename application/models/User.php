<?php
class User extends CI_Model
{
	 public function login_model()
	 {
		$user_type = $this->input->post('user_type');
		$username  = $this->input->post('username');
		$password  = md5($this->input->post('password'));
		if ($user_type == 'Faculty') {

			$sql = $this->db->query("SELECT * FROM user_list WHERE username = '$username' AND password = '$password' AND status <> '0' ")->result();
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
		$this->db->update('user_list', $data); //update data
		if($this->db->affected_rows() > 0) //tgchecheck niya kung pirang rows ang nabago sa database
			return true;
		else
			return false;
	}

	public function get_user_list()
	{
			$sql = $this->db->query("SELECT * FROM user_list")->result(); //kunon mo gabos ning user data sa table na userlist
			return $sql;
	}
	
	public function getFacultyModel()
	{
		$user_id = $this->input->get('id');
		$sql = $this->db->query("SELECT * FROM user_list WHERE user_id = '$user_id'")->result();
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
		if($this->db->update('user_list', $data_array) == true)
			return 0;
		return 1;
	}
	public function deleteFaculty($user_id)
	{
		 $this->db->where('user_id', $user_id);
		 return $this->db->delete('user_list');
	}
	public function addFacultyModel()
	{
		$data_array = array(
								'username' => $this->input->post('username'),
								'first_name' =>$this->input->post('first_name'),
								'last_name' =>$this->input->post('last_name'),
								'contact_no' => $this->input->post('contact_no'),
								'birthday'  => $this->input->post('birthday'),
								'user_type'=> $this->input->post('user_type'),
								'email' => $this->input->post('email')
							);
		if($this->db->insert('user_list', $data_array) == true)
			return 0;
		return 1;
	}
	public function get_grade_level()
	{
			$sql = $this->db->query("SELECT * FROM grade_level")->result(); //kunon mo gabos ning user data sa table na userlist
			return $sql;
	}
	public function get_grade_list()
	{
		$grade_id = $this->input->get('id');
		$sql = $this->db->query("SELECT * FROM grade_level WHERE grade_id = '$grade_id'")->result();
		return $sql;
	}
	public function addGradeListModel()
	{
		$data_array = array(
								'grade_name' => $this->input->post('grade_name'),
								'adviser' =>$this->input->post('adviser')
							);
		if($this->db->insert('grade_level', $data_array) == true)
			return 0;
		return 1;
	}
	public function saveChangesGradeListModel()
	{
		$data_array = array(
								'grade_name' => $this->input->post('grade_name'),
								'adviser' =>$this->input->post('adviser')	
							);
		$grade_id = $this->input->post('grade_id');
		$this->db->where('grade_id', $grade_id);
		if($this->db->update('grade_level', $data_array) == true)
			return 0;
		return 1;
	}
	public function deleteGradeList($grade_id)
	{
		 $this->db->where('grade_id', $grade_id);
		 return $this->db->delete('grade_level');
	}
	public function get_subject_list()
	{
		$sql = $this->db->query("SELECT * FROM subject")->result(); //kunon mo gabos ning user data sa table na userlist
			return $sql;
	}
	public function get_subject()
	{
		$subject_id = $this->input->get('id');
		$sql = $this->db->query("SELECT * FROM subject WHERE subject_id = '$subject_id'")->result();
		return $sql;
	}
	public function addSubjectListModel()
	{
		$data_array = array(
								'subject_code' => $this->input->post('subject_code'),
								'subject_name' =>$this->input->post('subject_name')
							);
		if($this->db->insert('subject', $data_array) == true)
			return 0;
		return 1;
	}
	public function saveChangesSubjectListModel()
	{
		$data_array = array(
								'subject_code' => $this->input->post('subject_code'),
								'subject_name' =>$this->input->post('subject_name')	
							);
		$subject_id = $this->input->post('subject_id');
		$this->db->where('subject_id', $subject_id);
		if($this->db->update('subject', $data_array) == true)
			return 0;
		return 1;
	}
	public function deleteSubjectList($subject_id)
	{
		$this->db->where('subject_id', $subject_id);
		 return $this->db->delete('subject');
	}
	public function get_Section_List()
	{
		$sql = $this->db->query("SELECT * FROM section")->result(); //kunon mo gabos ning user data sa table na userlist
			return $sql;
	}
	public function get_Section()
	{
		$section_id = $this->input->get('id');
		$sql = $this->db->query("SELECT * FROM section WHERE section_id = '$section_id'")->result();
		return $sql;
	}
	public function addSectionListModel()
	{
		$data_array = array(
								'section_name' => $this->input->post('section_name'),
								'grade_level' =>$this->input->post('grade_level')
							);
		if($this->db->insert('section', $data_array) == true)
			return 0;
		return 1;
	}
	public function saveChangesSectionListModel()
	{
		$data_array = array(
								'section_name' => $this->input->post('section_name'),
								'grade_level' =>$this->input->post('grade_level')	
							);
		$section_id = $this->input->post('section_id');
		$this->db->where('section_id', $section_id);
		if($this->db->update('section', $data_array) == true)
			return 0;
		return 1;
	}
	public function deleteSectionList($section_id)
	{
		$this->db->where('section_id', $section_id);
		 return $this->db->delete('section');
	}
}
