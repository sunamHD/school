<?php

class Classes extends MY_Controller {

/* First is the constructor */

    // Inherit all student and CI_Controller methods from MY_Controller
	public function __construct()
	{
		parent::__construct();
		$this->load->model('class_model');
	}

/* Now helper methods */

    // Check if a class exists
    public function class_id_exists($class_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

        $class_check = $this->class_model->get_class($class_id);
        if($class_check->num_rows() > 0) {
            return TRUE;
        }
        else {
            $this->form_validation->set_message('class_id_exists', 'Class does not exist');
            return FALSE;
        }
    }

    // Check if a student already enrolled in a class
    public function already_enrolled($stud_id, $class_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

        $enroll_check = $this->class_model->get_enroll($stud_id, $class_id);
        if($enroll_check->num_rows() > 0) {
            return TRUE;
        }
        else {
            $this->form_validation->set_message('already_enrolled', 'Student not enrolled in that class');
            return FALSE;
        }        
    }

    // Making the inverse of already_enrolled because it doesn't seem
    // like you can negate a form validation callback function :(
    public function not_enrolled($stud_id, $class_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

        $enroll_check = $this->class_model->get_enroll($stud_id, $class_id);
        if($enroll_check->num_rows() > 0) {
            $this->form_validation->set_message('not_enrolled', 'Student already enrolled in that class');
            return FALSE;
        }
        else {

            return TRUE;
        }        
    }

    public function class_empty($class_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

        $enroll_check = $this->class_model->all_enrolled($class_id);
        if($enroll_check->num_rows() > 0) {
            return TRUE;
        }
        else {
            $this->form_validation->set_message('class_empty', 'Class is empty');
            return FALSE;
        }   
    }

/* Now the methods for editing/adding/deleting/viewing classes */

    public function index()
    {
	    $data['classes'] = $this->class_model->get_classes();
	    $data['title'] = 'Class List';
	    $this->load->view('templates/header', $data);
	    $this->load->view('classes/index', $data);
	    $this->load->view('templates/footer');
    }

    public function enrollmentSelect()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Choose a class to view enrollment';
	    $data['classes'] = $this->class_model->get_classes();

        // You must provide an ID, and it must have enrolled student(s)
        $this->form_validation->set_rules('class_id', 'Class ID', 'callback_class_id_exists|callback_class_empty');
        // If class id doesn't exist, or has no enrolled students, reload
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/enrollmentSelect');
            $this->load->view('classes/index', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, load class enrollment view
	    else
	    {
            // Get the class ID from the form
            $class_id = $this->input->post('class_id');

            // Redirect in order to reset form validation rules
            $this->load->helper('url');
            $redir = 'classes/enrollmentDetails/'.$class_id;
            redirect($redir);
        }
    }

    public function enrollmentDetails($class_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'View class enrollment';
        

        // Get IDs of students in the class
        $data['students'] = $this->class_model->all_enrolled($class_id);
        // Get data for each student in the class
        $data['class'] = $this->class_model->get_names($class_id);
        // Get course details
        $data['details'] = $this->class_model->get_class($class_id);
        
        // Load the views
        $this->load->view('templates/header', $data);
        $this->load->view('classes/classDetails', $data);
        $this->load->view('classes/enrollmentDetails', $data);
        $this->load->view('templates/footer');
    }

    public function editMenu()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Choose a class to edit';
	    $data['classes'] = $this->class_model->get_classes();

        // You must provide an ID, and it must exist in the DB
        $this->form_validation->set_rules('class_id', 'Class ID', 'callback_class_id_exists');

        // If no id given/doesn't exist in DB, can't edit, so just reload
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/editMenu');
            $this->load->view('classes/index', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, load class details view
	    else
	    {
            // Get the class ID from the form
            $class_id = $this->input->post('class_id');

            // Redirect in order to reset form validation rules
            $this->load->helper('url');
            $redir = 'classes/editDetails/'.$class_id;
            redirect($redir);
        }
    }

    public function editDetails($class_id)
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Edit class details';

        // Get data for this class from the DB
        $data['class'] = $this->class_model->get_class($class_id);
        // Get course details
        $data['details'] = $this->class_model->get_class($class_id);
        // Get index of majors
        $data['majors'] = $this->class_model->all_majors();
        // Form validation rules
        $this->form_validation->set_rules('className', 'Class Name', 'required');

        // If you delete the class name, can't update
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('classes/editDetails', $data);
            $this->load->view('classes/classDetails', $data);
            $this->load->view('classes/majors', $data);
            $this->load->view('templates/footer');

        }
        // If rules are followed, edit the class
        else
        {
            $this->class_model->edit_class($class_id);
            $this->load->view('classes/success');
        } 
 
    }

    public function delete()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Delete a class';
        // Get class data to generate a class index table
	    $data['classes'] = $this->class_model->get_classes();
        // You must provide an ID, and it must exist in the DB
        $this->form_validation->set_rules('class_id', 'Class ID', 'callback_class_id_exists');

        // If no id given/doesn't exist in DB, can't delete, so just reload
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/delete');
            $this->load->view('classes/index', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, delete the class
	    else
	    {
		    $this->class_model->delete_class();
		    $this->load->view('classes/success');
	    }     
    }

    public function create()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

	    $data['title'] = 'Create a class';
        // Get class data to generate a class index table
	    $data['classes'] = $this->class_model->get_classes();
        // Get index of majors
        $data['majors'] = $this->class_model->all_majors();
        // Set form validation rules (first argument is name of variable, second
        // argument is name to be shown in error message
	    $this->form_validation->set_rules('className', 'Class Name', 'required');

        // If rules violated, don't create the new class
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/create');
            $this->load->view('classes/index', $data);
            $this->load->view('classes/majors', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, create the class
	    else
	    {
		    $this->class_model->set_class();
		    $this->load->view('classes/success');
	    }
    }

    public function unenroll()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

	    $data['title'] = 'Unenroll from a class';
        // Get class data to generate a class index table
	    $data['classes'] = $this->class_model->get_classes();
        // Get student data to generate a student index table
	    $data['students'] = $this->student_model->get_students();
        // Set form validation rules (first argument is name of variable, second
        // argument is name to be shown in error message
	    $this->form_validation->set_rules('class_id', 'Class ID', 'is_natural|callback_class_id_exists');
	    $this->form_validation->set_rules('stud_id', 'Student ID', 'is_natural|callback_stud_id_exists|callback_already_enrolled['.$this->input->post('class_id').']');

        // If rules violated, don't unenroll from the class
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/unenroll');
            $this->load->view('students/index', $data);
            $this->load->view('classes/index', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, unenroll from the class
	    else
	    {
		    $this->class_model->unenroll_class();
		    $this->load->view('classes/success');
	    }
    }
    public function enroll()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');

	    $data['title'] = 'Enroll in a class';
        // Get class data to generate a class index table
	    $data['classes'] = $this->class_model->get_classes();
        // Get student data to generate a student index table
	    $data['students'] = $this->student_model->get_students();

        // Set form validation rules (first argument is name of variable, second
        // argument is name to be shown in error message
	    $this->form_validation->set_rules('class_id', 'Class ID', 'is_natural|callback_class_id_exists');
	    $this->form_validation->set_rules('stud_id', 'Student ID', 'is_natural|callback_stud_id_exists|callback_not_enrolled['.$this->input->post('class_id').']');

        // If rules violated, don't enroll in the class
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/enroll');
            $this->load->view('students/index', $data);
            $this->load->view('classes/index', $data);
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, enroll in the class
	    else
	    {
		    $this->class_model->enroll_class();
		    $this->load->view('classes/success');
	    }
    }
}
