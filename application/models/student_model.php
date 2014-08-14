<?php
class Student_model extends CI_Model {

    // Load the database
	public function __construct()
	{
		$this->load->database();
	}

    // Get news
    public function get_students($slug = FALSE)
    {
        // If you don't provide a slug, just get all the students
	    if ($slug === FALSE)
	    {
            // Get the news table
		    $query = $this->db->get('news');
		    return $query->result_array();
	    }

        // If you provide a slug, get the news with that slug
	    $query = $this->db->get_where('news', array('slug' => $slug));
	    return $query->row_array();
    }

    public function delete_student()
    {
        $id = $this->input->post('id');
        $this->db->delete('students', array('id' => $id)); 
    }

    public function set_student()
    {
        // Load a library to help generate uniform resource identifiers
	    //$this->load->helper('url');
        //
	    //$slug = url_title($this->input->post('title'), 'dash', TRUE);

	    $data = array(
		    'firstName' => $this->input->post('firstName'),
		    'midName' => $this->input->post('midName'),
		    'lastName' => $this->input->post('lastName'),
            'year' => $this->input->post('year'),
            'gpa' => $this->input->post('gpa'),
            'breakdance' => $this->input->post('breakdance'),
	    );

	    return $this->db->insert('students', $data);
    }
}
