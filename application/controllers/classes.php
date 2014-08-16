<?php

class Classes extends MY_Controller {
    // Inherit all student and CI_Controller methods from MY_Controller
	public function __construct()
	{
		parent::__construct();
		$this->load->model('class_model');
	}

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

    public function index()
    {
	    $data['classes'] = $this->class_model->get_classes();
	    $data['title'] = 'Class List';
	    $this->load->view('templates/header', $data);
	    $this->load->view('classes/index', $data);
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

        // Get the class data from the DB
        $data['class'] = $this->class_model->get_class($class_id);

        // Form validation rules
        $this->form_validation->set_rules('className', 'Class Name', 'required');

        // If you delete the class name, can't update
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('classes/editDetails', $data);
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

        // You must provide an ID, and it must exist in the DB
        $this->form_validation->set_rules('class_id', 'Class ID', 'callback_class_id_exists');

        // If no id given/doesn't exist in DB, can't delete, so just reload
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/delete');
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, delete the class
	    else
	    {
		    $this->class_model->delete_class();
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

        // Set form validation rules (first argument is name of variable, second
        // argument is name to be shown in error message
	    $this->form_validation->set_rules('class_id', 'Class ID', 'required');
	    $this->form_validation->set_rules('stud_id', 'Student ID', 'required');

        // If rules violated, don't create the new class
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/enroll');
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, create the class
	    else
	    {
		    $this->class_model->enroll_class();
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

        // Set form validation rules (first argument is name of variable, second
        // argument is name to be shown in error message
	    $this->form_validation->set_rules('className', 'Class Name', 'required');

        // If rules violated, don't create the new class
	    if ($this->form_validation->run() === FALSE)
	    {
		    $this->load->view('templates/header', $data);
		    $this->load->view('classes/create');
		    $this->load->view('templates/footer');

	    }
        // If rules are followed, create the class
	    else
	    {
		    $this->class_model->set_class();
		    $this->load->view('classes/success');
	    }
    }
}
