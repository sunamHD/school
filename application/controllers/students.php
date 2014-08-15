<?php

/*class MY_Form_validation extends CI_Form_validation {

    public function __construct()
    {
        parent::__construct();
    }

    public function clear_field_data() {

        $this->_field_data = array();
        return $this;
    }
}*/

class Students extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model');
	}

    public function index()
    {
	    $data['students'] = $this->student_model->get_students();
	    $data['title'] = 'Students List';
	    $this->load->view('templates/header', $data);
	    $this->load->view('students/index', $data);
	    $this->load->view('templates/footer');
    }

    /*public function view($slug)
    {
	    $data['news_item'] = $this->news_model->get_news($slug);

	    if (empty($data['news_item']))
	    {
		    show_404();
	    }

	    $data['title'] = $data['news_item']['title'];

	    $this->load->view('templates/header', $data);
	    $this->load->view('news/view', $data);
	    $this->load->view('templates/footer');
    }*/
    
    public function stud_id_exists($stud_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

        $student_check = $this->student_model->student_exists($stud_id);
        if($student_check > 0) {
            return TRUE;
        }
        else {
            $this->form_validation->set_message('stud_id_exists', 'Student does not exist');
            return FALSE;
        }
    
    }

    public function editMenu()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Edit Student';
	    $data['students'] = $this->student_model->get_students();
        // You must provide an ID, and it must exist in the DB
	    //$this->form_validation->set_rules('stud_id', 'Student ID', 'required');
        $this->form_validation->set_rules('stud_id', 'Student ID', 'callback_stud_id_exists');

        // If no id given/doesn't exist in DB, can't delete, so just reload
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('students/editMenu');
            $this->load->view('students/index', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, load student details view
	    else
	    {
		    $this->load->view('templates/header', $data);
            $student = $this->student_model->get_student();
            $this->load->view('students/editDetails');
		    $this->load->view('templates/footer');

            // Reset the form validation rules as needed
            $this->form_validation->clear_field_data();
	        $this->form_validation->set_rules('firstName', 'First Name', 'required');
	        $this->form_validation->set_rules('lastName', 'Last Name', 'required');

            // If you delete the first or last name, can't update
	        if ($this->form_validation->run() === FALSE)
	        {
		        $this->load->view('templates/header', $data);
		        $this->load->view('students/editDetails', $student);
		        $this->load->view('templates/footer');

	        }
            // If rules are followed, edit the student
	        else
	        {
                $this->student_model->edit_student();
		        $this->load->view('students/success');
	        }
	    }   

    }

    public function delete()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Delete a student';

        // You must provide an ID, and it must exist in the DB
	    //$this->form_validation->set_rules('stud_id', 'Student ID', 'required');
        $this->form_validation->set_rules('stud_id', 'Student ID', 'callback_stud_id_exists');

        // If no id given/doesn't exist in DB, can't delete, so just reload
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('students/delete');
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, delete the student
	    else
	    {
		    $this->student_model->delete_student();
		    $this->load->view('students/success');
	    }     

    }
    
    public function create()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a student';

        // Set form validation rules (first argument is name of variable, second
        // argument is name to be shown in error message
	    $this->form_validation->set_rules('firstName', 'First Name', 'required');
	    $this->form_validation->set_rules('lastName', 'Last Name', 'required');

        // If rules violated, don't create the new student
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('students/create');
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, create the student
	    else
	    {
		    $this->student_model->set_student();
		    $this->load->view('students/success');
	    }
    }
}
