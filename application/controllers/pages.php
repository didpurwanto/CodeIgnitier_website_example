<?php

class Pages extends CI_Controller {

	function __construct(){
        parent::__construct();
	}
	
	function index(){	
		$this->load->view('css');
		$this->load->view('menu');
		$this->load->view('index');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function member(){	
		$this->load->view('css');
		$this->load->view('menu');
		$this->load->view('member');
		$this->load->view('footer');
		$this->load->view('javascript');
	}

	function publication(){	
		$this->load->view('css');
		$this->load->view('menu');
		$this->load->view('publication');
		$this->load->view('footer');
		$this->load->view('javascript');
	}
	

		
	
	
	
}