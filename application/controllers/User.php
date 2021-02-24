<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

public function view($name){


    if ($name == NULL) {
        echo "no name entered in url";
        return;
    } else {
        $this->load->model('Messages_model');
        $results['results'] = $this->Messages_model->getMessagesByPoster($name);
        $this->load->view('ViewMessages',$results);
      }

}


public function login(){
  $this->load->view('Login');
}

public function doLogin(){
  session_start();
  $this->load->model('User_model');
  $name = $this->input->post('username');
  $_SESSION['username'] = $name;
  $this->form_validation->set_rules('password', 'Password', 'required');
  $this->form_validation->set_rules('username', 'Username', 'required');
  $pass = $this->input->post('password');

    if (sha1($pass) === '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8') {
        return redirect("user/view/{$name}");

    } else {
        $this->load->view('Login');

    }

if ($this->User_model->doLogin($name, $pass)) {
  return true;
}
else {
  $this->form_validation->set_message('verifyUser', 'User dont exist');
  return false;
}
}


public function Logout()
    {
        session_destroy();
        redirect('User/login');
    }


public function feed($name){
  if ($name == NULL) {
      echo "no name entered in url";
      return;
  } else {
      $this->load->model('Messages_model');
      $follower['follower'] = $this->Messages_model->getFollowedMessages($name);
      $this->load->view('ViewMessages',$follower);
}

}

public function follow($followed){
  $this->load->model('User_model');
  $followed['followed'] = $this->User_model->follow($followed);
  $this->load->view('ViewMessages',$followed);

}










}
