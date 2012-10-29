<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tags_Model
 *
 * @author FAIZAN ALI
 */
class Tags_Model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getTagsList() {
        $query = $this->db->get('tags');
        return $query->result();
    }
}

?>
