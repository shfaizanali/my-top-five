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
        $this->load->model('Topic_Model');
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
    
    public function doAddTopic(){
        $topicTitle = $this->input->post('topicname');
        $topicDesc = $this->input->post('topic-description');
        $tags = $this->input->post('tags');
        echo $this->Topic_Model->addTopic($topicTitle,$topicDesc,$tags);
    }

}

?>
