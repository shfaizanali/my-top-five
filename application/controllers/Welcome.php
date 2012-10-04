<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index() {
        $this->load->view('templates/header');
        $this->load->view('landing-page');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

}