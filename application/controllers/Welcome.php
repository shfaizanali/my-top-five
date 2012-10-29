<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {
    protected $user;
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->user= $this->facebook->getUser();
    }
    public function index() {
        $params = array();
        $params['redirect_uri'] = "http://localhost/my-top-five/index.php/User/login";
        $params['scope'] = "publish_stream";
        $data = array();
        if ($this->user) {
          $loggedURL = site_url('User/logout');
          $data['logged'] = true;
        } 
        else {
           $loggedURL = $this->facebook->getLoginUrl($params);
           $data['logged'] = false;
        }
        
        
        $data['loggedURL'] = $loggedURL;
        $this->load->view('templates/header',$data);
        $this->load->view('landing-page');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

}