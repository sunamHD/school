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
        $query= $this->db->get('classes');
        return $query;
    }

    // Get a particular class
    public function get_class($class_id)
    {
        $this->db->where('class_id', $class_id);
        $query = $this->db->get('classes');
        return $query;
    }

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
}
