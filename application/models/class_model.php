<?php
class Class_model extends CI_Model {

    // Load the database
	public function __construct()
	{
		$this->load->database();
	}

    // Get all classes
    public function get_classes()
    {
        // SELECT * FROM classes
        $query = "SELECT classes.class_id, classes.className, majors.majorName, majors.maj_id FROM classes INNER JOIN majors ON classes.maj_id=majors.maj_id";
        return $this->db->query($query);

        //$query= $this->db->get('classes');
        //return $query;
    }

    // Get a particular class
    public function get_class($class_id)
    {
        $query = "SELECT classes.class_id, classes.className, majors.majorName, majors.maj_id FROM classes INNER JOIN majors ON classes.maj_id=majors.maj_id WHERE classes.class_id=?";
        return $this->db->query($query, array($class_id));
    }

    // Get info for every student in a given class
    public function get_names($class_id)
    {
        // SQL Query to get the names
        $query = "SELECT * FROM students INNER JOIN classJoining ON classJoining.stud_id=students.stud_id WHERE classJoining.class_id=?";
        return $this->db->query($query,array($class_id));
    }

    // Check if a class contains a student
    public function get_enroll($stud_id, $class_id)
    {
        $this->db->where('stud_id', $stud_id);
        $this->db->where('class_id', $class_id);
        $query = $this->db->get('classJoining');
        return $query;
    }

    // Get all the enrolled students in a class
    public function all_enrolled($class_id)
    {
        $this->db->where('class_id', $class_id);
        $query = $this->db->get('classJoining');
        return $query;
    }

    /*// Get all the available majors
    public function all_majors()
    {
        return $this->db->get('majors');
    }*/

    // Edit class info in the DB
    public function edit_class($class_id)
    {

        $maj_id = $this->input->post('maj_id');
        if ($maj_id == ''){
            $maj_id = NULL;
        }        
	    $data = array(
		    'className' => $this->input->post('className'),
		    'maj_id' => $maj_id,
	    );
        $this->db->where('class_id', $class_id);
        $this->db->update('classes', $data);
    }

    // Delete a class from the DB
    public function delete_class()
    {
        $class_id = $this->input->post('class_id');
        $this->db->delete('classes', array('class_id' => $class_id)); 
    }

    // Insert a class into the DB
    public function set_class()
    {
        // The maj_id foreign key must be set to NULL if not entered in the form
        $maj_id = $this->input->post('maj_id');
        if ($maj_id == ''){
            $maj_id = NULL;
        }

	    $data = array(
            'class_id' => NULL,
		    'className' => $this->input->post('className'),
		    'maj_id' => $maj_id,
	    );

	    return $this->db->insert('classes', $data);
    }

    // Enroll a student in a class
    public function enroll_class()
    {
	    $data = array(
            'stud_id' => $this->input->post('stud_id'),
		    'class_id' => $this->input->post('class_id'),
	    );

	    return $this->db->insert('classJoining', $data);
    }

    // Unenroll a student from a class
    public function unenroll_class()
    {
	    $data = array(
            'stud_id' => $this->input->post('stud_id'),
		    'class_id' => $this->input->post('class_id'),
	    );
	    return $this->db->delete('classJoining', $data);
    }
}
