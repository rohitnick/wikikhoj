<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
            $this->load->model('welcomemodel');	
       }
	public function index()
	{		
		$this->load->view('header');
		$this->load->view('searchbody');
		$this->load->view('footer');		
	}
	public function putdata()
	{
		$ques=trim($_GET['searchq']);
		$eid=trim($_GET['email']);
		$check = "0";
		if(isset($ques) || isset($eid))
		{
			$this->welcomemodel->putq($ques,$eid,$check);
		}
		header( 'Location: ../' ) ;
	}
	
}

