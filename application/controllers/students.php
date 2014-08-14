<?php
class Students extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model');
	}

    public function index()
    {
	    $data['news'] = $this->student_model->get_students();
	    $data['title'] = 'News archive';

	    $this->load->view('templates/header', $data);
	    $this->load->view('news/index', $data);
	    $this->load->view('templates/footer');
    }

    public function view($slug)
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
    }
    
    public function delete()
    {
        // Load the form helper library
	    $this->load->helper('form');
        // Load the form validation library
	    $this->load->library('form_validation');
        
        $data['title'] = 'Delete a student';

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
