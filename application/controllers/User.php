<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author FAIZAN ALI
 */
class User extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_Model');
        
    }
    
    public function login() {
        $me = $this->facebook->getUser();
        if($me) {
            if($this->User_Model->isNewUser($me)) {
                $this->User_Model->insertNewUser($me);
            }
            redirect(site_url()); 
        }
        else {
            redirect(site_url());
        }
    }
    
    public function logout() {
        session_destroy();
        $this->load->helper('url');
        redirect('Welcome/index');
        
    }
}

?>
