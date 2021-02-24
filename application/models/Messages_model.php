<?php
 class Messages_model extends CI_Model {


public function __construct() {
    parent::__construct();
    $this->load->database();
}


public function getFollowedMessages($name){
    $this->db->like('followed_username',$name);
    $query  =   $this->db->get('User_Follows');
    return $query->result();
}

//Return all messages posted by user with specified username
public function getMessagesByPoster($name) {
    $this->db->like('user_username',$name);
    $query  =   $this->db->get('Messages');
    return $query->result();
}

function searchMessages($string){
      $this->db->like('text',$string);
      $query  =   $this->db->get('Messages');
      return $query->result();
}

public function insertMessage($poster, $string){
  $datestring = date('Y-m-d H:i:s');
    $data = array(
      'user_username' => $poster,
      'text' => $string,
      'posted_at' => $datestring,
    );

    $this->db->insert('Messages', $data);
}




















}
