<?php
class Class_model extends CI_Model {

    // Load the database
	public function __construct()
	{
		$this->load->database();
	}

    // Check if a particular class exists (DELETE THIS AND JUST GET THE CLASS)
    public function class_exists($class_id)
    {
        $this->db->where('class_id',$class_id);
        $query = $this->db->get('classes');
        if ($query->num_rows() > 0){
            return true;
        }
        else{
            return false;
        }
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
