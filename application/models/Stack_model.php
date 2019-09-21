<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Stack_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function saveContact($fromInput) {
        
        $contactData = array(
			'' => $fromInput['']
        );

        $result = $this->db->insert('', $userData);

        $iid = $this->db->insert_id();
        
        return ($iid > 0) ? TRUE : FALSE;
    }
}

/* End of file friends.php */
