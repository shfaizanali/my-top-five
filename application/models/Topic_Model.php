<?php


class Topic_Model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function addTopic($title,$desc,$tags){
        $objTopic = new stdClass();
        $objTopic->title = $title;
        $objTopic->description = $desc;
        $objTopic->owner = $this->facebook->getUser();
        $objTopic->tags = json_encode($tags);
        if($this->db->insert(TOPIC_TABLE,$objTopic))
        {
            return SUCCESS_CODE;
        }
        else{
            return DB_INSERTION_FAULRE_CODE;
        }
    }
}

?>
