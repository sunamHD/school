<?php
class Student_model extends CI_Model {

    // Load the database
	public function __construct()
	{
		$this->load->database();
	}

    // Get all students
    public function get_students()
    {
        // SELECT * FROM students
        $query= $this->db->get('students');
        return $query;
    }

    // Get a particular student
    public function get_student($stud_id)
    {
        $this->db->where('stud_id', $stud_id);
        $query = $this->db->get('students');
        return $query;
    }

    // Delete a student from the DB
    public function delete_student()
    {
        $stud_id = $this->input->post('stud_id');
        $this->db->delete('students', array('stud_id' => $stud_id)); 
    }

    // Edit student info in the DB
    public function edit_student($stud_id)
    {
	    $data = array(
		    'firstName' => $this->input->post('firstName'),
		    'midName' => $this->input->post('midName'),
		    'lastName' => $this->input->post('lastName'),
            'year' => $this->input->post('year'),
            'gpa' => $this->input->post('gpa'),
            'breakdance' => $this->input->post('breakdance'),
	    );
        $this->db->where('stud_id', $stud_id);
        $this->db->update('students', $data);
    }

    // Insert a student into the DB
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
