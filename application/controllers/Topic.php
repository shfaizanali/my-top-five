<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Topic
 *
 * @author FAIZAN ALI
 */
class Topic extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function Index() {
        echo "Welcome to list index";
    }

    public function Addtopic() {
        $this->load->view('templates/header');
        $this->load->view('topic/add-topic');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/footer');
    }
    
    public function getTagsList() {
        $this->load->model('Tags_Model');
        $tags = $this->Tags_Model->getTagsList();
        
        $tagsArray = array();
        foreach($tags as $tag) {
            $tagsArray[] = $tag->name;
        }
        
        header('Content-type:application/json');
        echo (json_encode(array('options'=>$tagsArray)));
    }

}

?>
