<?php

/**
 *
 */
class Message extends CI_Controller
{

public function index(){
  $name = $this->input->post('username');
  $pass = $this->input->post('password');
  $this->load->model('User_model');
  if ($this->User_model->doLogin($name, $pass)) {
    return true;
  }
  else {
  $this->load->view('Login');
  }

}

public function doPost(){
  session_start();
  $this->load->model('Messages_model');
  $poster = $_SESSION["username"];
  if (isset($_POST['pmessage'])) {
    $this->load->model('Messages_model');
    $string = $_POST['pmessage'];
    $this->Messages_model->insertMessage($poster, $string);
  }
  $this->load->view('Post');



}















}
