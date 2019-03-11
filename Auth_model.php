<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/11/2018
 * Time: 12:14
 */

class Auth_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
  	$this->load->database();
	}

	//this function adds details to the database
	public function add_record($data)
	{

		 $this->database->insert('outreach_details', $data);
		$this->database->insert('outreach_participants', $data);
		$this->database->insert('project_details', $data);
		$this->database->insert('admin', $data);
		$this->database->insert('mentors', $data);


			return true;

	}

	//function of how to get the student details
public function get_student_details(){
		$this->db->from('student_details');
		$query=$this->db->get();
		return $query->result();
}

//function of how to get the project details
	public function get_project_details(){
		$this->db->from('project_details');
		$query=$this->db->get();
		return $query->result();
	}

//function of how to delete data from the student details
public function student_delete_data($Id){
		$this->db->where("Id", $Id);
		$this->db->delete("student_details");
}

//function of how to select details from the student details and update them
public function fetch_single_data($Id){
		$this->db->where("Id", $Id);
		$query = $this->db->get("student_details");
		return $query;
		//select * from student_details where Id = '$Id'

}
}
