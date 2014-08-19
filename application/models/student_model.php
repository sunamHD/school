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
        // Several values must be set to NULL if not entered in the form
        $gpa = $this->input->post('gpa');
        if ($gpa == ''){
            $gpa = NULL;
        }
        $year = $this->input->post('year');
        if ($year == ''){
            $year = NULL;
        }
        $breakdance = $this->input->post('breakdance');
        if ($breakdance == ''){
            $breakdance = NULL;
        }
        $midName = $this->input->post('midName');
        if ($midName == ''){
            $midName = NULL;
        }

	    $data = array(
		    'firstName' => $this->input->post('firstName'),
		    'midName' => $midName,
		    'lastName' => $this->input->post('lastName'),
            'year' => $year,
            'gpa' => $gpa,
            'breakdance' => $breakdance,
	    );
        $this->db->where('stud_id', $stud_id);
        $this->db->update('students', $data);
    }

    // Insert a student into the DB
    public function set_student()
    {
        // Several values must be set to NULL if not entered in the form
        $gpa = $this->input->post('gpa');
        if ($gpa == ''){
            $gpa = NULL;
        }
        $year = $this->input->post('year');
        if ($year == ''){
            $year = NULL;
        }
        $breakdance = $this->input->post('breakdance');
        if ($breakdance == ''){
            $breakdance = NULL;
        }
        $midName = $this->input->post('midName');
        if ($midName == ''){
            $midName = NULL;
        }

	    $data = array(
		    'firstName' => $this->input->post('firstName'),
		    'midName' => $midName,
		    'lastName' => $this->input->post('lastName'),
            'year' => $year,
            'gpa' => $gpa,
            'breakdance' => $breakdance,
	    );

	    return $this->db->insert('students', $data);
    }
}
