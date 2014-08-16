<?php

class Classes extends CI_Controller {

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

        $class_check = $this->class_model->class_exists($class_id);
        if($class_check > 0) {
            return TRUE;
        }
        else {
            $this->form_validation->set_message('class_id_exists', 'Class does not exist');
            return FALSE;
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
