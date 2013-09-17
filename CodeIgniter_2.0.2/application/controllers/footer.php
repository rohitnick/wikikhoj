<?php
class footer extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
			if($this->session->userdata('moderator') || $this->session->userdata('user'))
				$this->load->view('header');
			else
				$this->load->view('headerwelcome');
       }
	public function index()
	{
		
	}
	public function aboutus()
	{
		
		$this->load->view('footer/aboutus');
		$this->load->view('footer');
	}
	public function hiw()
	{
		$this->load->view('footer/howitworks');
		$this->load->view('footer');
	}
	public function faq()
	{
		$this->load->view('footer/faq');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('footer/contact');
		$this->load->view('footer');
	}
	public function privacy()
	{
		$this->load->view('footer/privacy');
		$this->load->view('footer');
	}
}