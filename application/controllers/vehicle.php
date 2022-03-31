<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vehicle extends CI_Controller
{

    public function index() //action
    {
        $this->load->model('araclar_model');
        $viewData=new stdClass();
        $viewData->araclar=$this->araclar_model->GetAll();
        $this->load->view('vehicle/view_home',$viewData);
    }

}
