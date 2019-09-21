<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Friends_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getAllFriends() {
        $this->db->select('id, name, tel');
        $query = $this->db->get('friends');
        $result = $query->result();
        $query->free_result();
        return $result;
    }
}

/* End of file friends.php */
