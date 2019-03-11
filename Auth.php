<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22/11/2018
 * Time: 12:13
 */

class Auth extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->model('Auth_model');
	}

	public function outreach_details()
	{
		$this->load->view('outreach_details');

		if (isset($_POST['outreach_details'])) {
			$this->form_validation->set_rules('Day', 'Day', 'required');
			$this->form_validation->set_rules('Dates', 'Dates', 'required');
			$this->form_validation->set_rules('Host_school', 'Host_school', 'required');
			$this->form_validation->set_rules('Distance', 'Distance', 'required');
			$this->form_validation->set_rules('Time', 'Time', 'required');
			$this->form_validation->set_rules('County', 'County', 'required');
			$this->form_validation->set_rules('Region/Province', 'Region/Province', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {
			echo 'Details entered correctly';

//		add user in database
			$data = array(
				'Day' => $_POST['Day'],
				'Dates' => $_POST['Dates'],
				'County' => $_POST ['County'],
				'Region/Province' => $_POST ['Region/Province'],
				'Host_school' => $_POST ['Host_school'],
				'Distance' => $_POST ['Distance'],
				'Time' => $_POST ['Time'],


			);

			$this->db->insert('outreach_details', $data);

			$this->session->set_flashdata("success", "The details have been successfully inserted");
//	redirect("auth/login","refresh");

		}

	}

	public function outreach_participants()
	{
		$this->load->view('outreach_participants');

		if (isset($_POST['outreach_participants'])) {
			$this->form_validation->set_rules('Day', 'Day', 'required');
			$this->form_validation->set_rules('Dates', 'Dates', 'required');
			$this->form_validation->set_rules('County', 'County', 'required');
			$this->form_validation->set_rules('No_of_schools', 'No_of_schools', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {
			echo 'Registered successfully';

//		add user in database
			$data = array(
				'Day' => $_POST['Day'],
				'Dates' => $_POST ['Dates'],
				'County' => $_POST ['County'],
				'No_of_schools' => $_POST ['No_of_schools'],
				'Additional_details' => $_POST['Additional_details'],
				'University' => $_POST['University'],

			);

			$this->db->insert('outreach_participants', $data);

			$this->session->set_flashdata("success", "The details have been successfully inserted");
//	redirect("auth/login","refresh");

		}
	}


	public function addAdmin()
	{
		$this->load->view('addAdmin');

		if (isset($_POST['addAdmin'])) {

			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Password', 'Password', 'min_length[5]', 'required');
			$this->form_validation->set_rules('Confirm password', 'Confirm password', 'min_length[5]', 'required');
		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {


//		add user in database
			$data = array(

				'Name' => $_POST['Name'],
				'Email' => $_POST['Email'],
				'Password' => md5($_POST['Password'])
			);

			$this->db->insert('admin', $data);

			$this->session->set_flashdata("success", "Registered successful");
	redirect("auth/adminRegistered","refresh");

		}
	}

	public function viewAdmin()
	{
		$this->load->view('viewAdmin');

		if (isset($_POST['viewAdmin'])) {

			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Password', 'Password', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {


//		add user in database
			$data = array(

				'Name' => $_POST['Name'],
				'Email' => $_POST['Email'],
				'Password'=>$_POST['Password'],

			);

			$this->db->insert('admin', $data);

			$this->session->set_flashdata("success", "Registered successful");
			redirect("auth/viewAdmin","refresh");

		}
	}


	public function adminLogin()
	{
		$this->form_validation->set_rules('Name', 'Name', 'required');
		$this->form_validation->set_rules('Password', 'Password', 'min_length[5]');

		if ($this->form_validation->run() == TRUE) {
			$Name = $_POST['Name'];
			$Password = md5($_POST['Password']);

			//check user in the database

			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where(array('Name' => $Name, 'Password' => $Password));
			$query = $this->db->get();

			$admin = $query->row();

			//if admin exists

			if ($admin->Email) {
				//temporary message
				$this->session->set_flashdata("success", "You are logged in");

				$_SESSION['user_logged'] = TRUE;
				$_SESSION['Name'] = $admin->Name;

				//redirect to profile page

				redirect("auth/adminProfile", "refresh");
			}else {
			$this->session->set_flashdata("error", "Invalid. Please register.");

			redirect("auth/adminLogin", "refresh");
		}

	}
		$this->load->view('adminLogin');
	}

	public function mentors(){
		$this->load->view('mentors');
	}


	public function addmentors()
	{
		$this->load->view('addmentors');

		if (isset($_POST['mentors'])) {

			$this->form_validation->set_rules('Time/Date', 'Time/Date', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Phone', 'Phone','required');
			$this->form_validation->set_rules('Course', 'Course', 'required');
			$this->form_validation->set_rules('Student/Professional', 'Student/Professional', 'required');
			$this->form_validation->set_rules('Occupation', 'Occupation', 'required');
			$this->form_validation->set_rules('Skills', 'Skills','required');
			$this->form_validation->set_rules('Location', 'Location', 'required');
			$this->form_validation->set_rules('Reason', 'Reason', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {


//		add user in database
			$data = array(
				'Time/Date' => $_POST['Time/Date'],
				'Email' => $_POST['Email'],
				'Name' => $_POST['Name'],
				'Phone' => $_POST['Phone'],
				'Course' => $_POST['Course'],
				'Student/Professional' => $_POST['Student/Professional'],
				'Occupation' => $_POST['Occupation'],
				'Skills' => $_POST['Skills'],
				'Location' => $_POST['Location'],
				'Reason' => $_POST['Reason'],

			);

			$this->db->insert('mentors', $data);

			$this->session->set_flashdata("success", "Registered successful");
			redirect("auth/adminRegistered","refresh");

		}

	}

	//function that displays the project.php page
	public function projects()
	{

		$this->load->view('projects');

	}


	//function for inserting the school details to the database
	public function school_details()
	{
		$this->load->view('school_details');

		if (isset($_POST['school_details'])) {

			$this->form_validation->set_rules('county', 'county', 'required');
			$this->form_validation->set_rules('Name_of_school', 'Name_of_school', 'required');
			$this->form_validation->set_rules('principalName', 'principalName', 'required');
			$this->form_validation->set_rules('principalPhone', 'principalPhone','required');
			$this->form_validation->set_rules('teacherinchargeName', 'teacherinchargeName', 'required');
			$this->form_validation->set_rules('teacherinchargePhone', 'teacherinchargePhone', 'required');
			$this->form_validation->set_rules('teacherinchargealternativePhone', 'teacherinchargealternativePhone', 'required');
			$this->form_validation->set_rules('teacherinchargeEmail', 'teacherinchargeEmail','required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {


//		add user in database
			$data = array(
				'county' => $_POST['county'],
				'Name_of_school' => $_POST['Name_of_school'],
				'principalName' => $_POST['principalName'],
				'principalPhone' => $_POST['principalPhone'],
				'teacherinchargeName' => $_POST['teacherinchargeName'],
				'teacherinchargePhone' => $_POST['teacherinchargePhone'],
				'teacherinchargealternativePhone' => $_POST['teacherinchargealternativePhone'],
				'teacherinchargeEmail' => $_POST['teacherinchargeEmail']

			);

			$this->db->insert('school_details', $data);

			$this->session->set_flashdata("success", "Registered successful");
			redirect("auth/project_details","refresh");

		}

	}

	//function of inserting the project details to the database
	public function project_details()
	{
		$this->load->view('project_details');

		if (isset($_POST['project_details'])) {
			$this->form_validation->set_rules('category', 'category', 'required');
			$this->form_validation->set_rules('level', 'level', 'required');
			$this->form_validation->set_rules('Project_title', 'Project_title', 'required');
			$this->form_validation->set_rules('Name_of_school', 'Name_of_school', 'required');
			$this->form_validation->set_rules('Student_name', 'Student_name', 'required');
			$this->form_validation->set_rules('Introduction', 'Introduction', 'required');
			$this->form_validation->set_rules('Method', 'Method', 'required');
			$this->form_validation->set_rules('Results', 'Results', 'required');
			$this->form_validation->set_rules('Conclusion', 'Conclusion', 'required');
			$this->form_validation->set_rules('Referees', 'Referees', 'required');
			$this->form_validation->set_rules('Acknowledge', 'Acknowledge', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {
			echo 'Registered successfully';

//		add user in database
			$data = array(
				'Project_id' => $_POST['Project_id'],
				'Project_title' => $_POST['Project_title'],
				'Name_of_school' => $_POST ['Name_of_school'],
				'Student_name' => $_POST ['Student_name'],
				'Introduction' => $_POST ['Introduction'],
				'Method' => $_POST['Method'],
				'Results' => $_POST['Results'],
				'Conclusion' => $_POST['Conclusion'],
				'Referees' => $_POST['Referees'],
				'Acknowledge' => $_POST['Acknowledge'],
				'county' => $_POST['county'],
				'level' => $_POST['level'],

			);

			$this->db->insert('project_details', $data);

			$this->session->set_flashdata("success", "The details have been successfully inserted");
			redirect("auth/firststudent_details","refresh");

		}
	}

	//function for inserting the first student details to the database
	public function firststudent_details()
	{
		$this->load->view('firststudent_details');

		if (isset($_POST['firststudent_details'])) {

			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('gender', 'gender', 'required');
			$this->form_validation->set_rules('birthDate', 'birthDate', 'required');
			$this->form_validation->set_rules('phone', 'phone','required');
			$this->form_validation->set_rules('class', 'class', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {


//		add user in database
			$data = array(
				'Id' => $_POST['Id'],
				'name' => $_POST['name'],
				'gender' => $_POST['gender'],
				'birthDate' => $_POST['birthDate'],
				'phone' => $_POST['phone'],
				'class' => $_POST['class']

			);

			$this->db->insert('student_details', $data);

			$this->session->set_flashdata("success", "Registered successful");
			redirect("auth/secondstudent_details","refresh");

		}

	}

	public function secondstudent_details()
	{
		$this->load->view('secondstudent_details');

		if (isset($_POST['secondstudent_details'])) {

			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('gender', 'gender', 'required');
			$this->form_validation->set_rules('birthDate', 'birthDate', 'required');
			$this->form_validation->set_rules('phone', 'phone','required');
			$this->form_validation->set_rules('class', 'class', 'required');

		}

		//if form validation true
		if ($this->form_validation->run() == TRUE) {


//		add user in database
			$data = array(
				'Id' => $_POST['Id'],
				'name' => $_POST['name'],
				'gender' => $_POST['gender'],
				'birthDate' => $_POST['birthDate'],
				'phone' => $_POST['phone'],
				'class' => $_POST['class']

			);

			$this->db->insert('student_details', $data);

			$this->session->set_flashdata("success", "Registered successful");
			redirect("auth/project_details","refresh");

		}

	}

//function displays the outreach.php page
	public function submit_success()
	{
		$this->load->view('submit_success');
	}



//function which displays the page that shows an admin has been successfully registered
	public function adminRegistered()
	{

		$this->load->view('adminRegistered');
	}

//function displays the outreach.php page
	public function Outreach()
	{
		$this->load->view('Outreach');
	}

//function to display the student details
public function adminstudent_details(){
$data['student_details']=$this->Auth_model->get_student_details();
$this->load->view('adminstudent_details', $data);
}

//function of how to update student details
public function student_update_data(){
$Id = $this->uri->segment(3);
$this->load->model("Auth_model");
$data["user_data"] = $this->Auth_model->fetch_single_data($Id);
$data["fetch_data"] = $this->Auth_model->fetch_data();
$this->load->view("adminstudent_details", $data);
}

//function of how to delete student details
public function student_delete_data(){
	$Id = $this->uri->segment(3);
	$this->load->model("Auth_model");
	$this->Auth_model->student_delete_data($Id);

	redirect(base_url(). "main/deleted");
}
public function deleted(){
		$this->index();
}


//function to display the project details
	public function viewprojectDetails(){
		$data['project_details']=$this->Auth_model->get_project_details();
		$this->load->view('viewprojectDetails', $data);
	}

}

