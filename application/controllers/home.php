<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index() //action
	{
		$this->load->view('home/view_home');
	}

    public function detay() //action
    {
        $this->load->view('home/view_detay');
    }
}
