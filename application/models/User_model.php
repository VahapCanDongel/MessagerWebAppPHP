<?php
/**
 *
 */
class User_model extends CI_Model
{

  public function __construct() {
      parent::__construct();
      $this->load->database();
  }


  public function doLogin($username, $pass){
      $this->db->select('username', 'password');
      $this->db->from('Users');
      $this->db->where('username', $username);
      $this->db->where('password', $pass);

      $query = $this->db->get();
      if ($query->num_rows() == 1) {
        return true;
      } else {
        return false;
      }

  }


  public function isFollowing($follower,$followed){
      $this->db->select('follower_username', 'followed_username');
      $this->db->from('User_Follows');
      $this->db->where('follower_username', $follower);
      $this->db->where('followed_username', $followed);

      $query = $this->db->get();
      return ($query->num_rows() == 1);
      // if ($query->num_rows() == 1) {
      //   return true;
      // } else {
      //   return false;
      // }

  }

public function follow($followed){
  session_start();
  $follower = $_SESSION['username'];
  $data = array(
    'followed_username' => $followed,
    'follower_username' => $follower,

  );

$this->db->insert('User_Follows', $data);
}












}
