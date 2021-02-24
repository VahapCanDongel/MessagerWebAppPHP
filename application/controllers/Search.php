<?php

/**
 *
 */
class Search extends CI_Controller
{


public function index(){

  $this->load->view("Search");



}

public function doSearch(){
        $this->load->model('Messages_model');
        $string = $this->input->post('keyword');
        $results['results'] =  $this->Messages_model->searchMessages($string);
        $this->load->view('ViewMessages',$results);


}









}
