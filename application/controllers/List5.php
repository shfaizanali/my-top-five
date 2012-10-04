<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of List
 *
 * @author faizan.ali
 */
class List5 extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function addlist() {
        $this->load->view('templates/header');
        $this->load->view('list/addlist');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }

}

?>
