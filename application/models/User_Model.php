<?php
/**
 * Description of User_Model
 *
 * @author FAIZAN ALI
 */
class User_Model extends CI_Model {
    //put your code here4
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function isNewUser($facebookID){
        $user = $this->db->get_where('user',array('facebook_id'=>$facebookID));
        if($user->num_rows() > 0) {
            return false;
        }
        else {
            return true;
        }
    }
    
    public function insertNewUser($facebookID) {
        $me = $this->facebook->api("/$facebookID");
        $img_small = 'https://graph.facebook.com/'.$facebookID.'/picture?width=50&height=50';
        $img_large = 'https://graph.facebook.com/'.$facebookID.'/picture?width=200&height=200';
        
        $data = array(
            'facebook_id' =>$me['id'],
            'first_name' => $me['first_name'],
            'last_name' => $me['last_name'],
            'email' => $me['email'],
            'profile_url' => $me['link'],
            'img_small'=> $img_small,
            'img_large' => $img_large,
        );
        
        if($this->db->insert('user', $data)) {
            return SUCCESS_CODE;
        }
        else {
            return DB_INSERTION_FAULRE_CODE;
        }
    }
}

?>
