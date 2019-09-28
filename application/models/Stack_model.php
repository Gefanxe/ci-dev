<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Stack_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function saveContact($fromInput) {
        
        $contactData = array(
			'full_name' => $fromInput['name'],
			'email' => $fromInput['email'],
			'subject' => $fromInput['subject'],
			'message' => $fromInput['message']
        );

        $this->db->insert('contact', $contactData);

        $iid = $this->db->insert_id();
        
        return ($iid > 0) ? TRUE : FALSE;
    }
}

/* End of file friends.php */
