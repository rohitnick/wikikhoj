<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class xyz123 extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
            $this->load->model('apanelmodel');
			$this->load->model('xyz123model');
       }
	public function index() //display's the page
	{		
		$this->load->view('header');
		$this->load->view('head');
		$this->load->view('xyz123view');
		$this->load->view('footer');
	}
	
	public function adminLogin()
	{
		$adminUsr = $_POST['adminUsr'];
		$pwd = $_POST['pwd'];
		$logStatus = $this->xyz123model->checkLogin($adminUsr,$pwd);
		if($logStatus)
		{
			$this->session->set_userdata('adminUsr',$adminUsr);
			header( 'Location: ../xyz123/apanel' ) ;
		}
		else
		{
			header( 'Location: ../xyz123' ) ;
		}
	}
	public function apanel() //display's the page	
	{
		
		if($this->session->userdata('adminUsr')){
			$this->load->view('header');
			$this->load->view('head');
			$unfilteredQuestion=$this->apanelmodel->getQuestionsData("rawt","0");
			$unfilteredQuestionHtml=$this->load->view('aPanel/rowUnfiltered',array('unfilteredQuestion'=>$unfilteredQuestion),true);
			
			$this->load->view('aPanel/apanel',array('unfilteredQuestionHtml'=>$unfilteredQuestionHtml));
			$this->load->view('footer');
		}
		else{
			header( 'Location: ../xyz123' ) ;
		}
		
	}
	
	public function getQuestions()
	{
		$limit=$_POST['limit'];
		$tab=$_POST['table'];
		$Question=$this->apanelmodel->getQuestionsData($tab,$limit);
		if($tab=="rawt")
			$QuestionHtml=$this->load->view('aPanel/rowUnfiltered',array('unfilteredQuestion'=>$Question),true);
		else if ($tab == "filteredt")
			$QuestionHtml=$this->load->view('aPanel/rowFiltered',array('filteredQuestion'=>$Question),true);
		else if ($tab == "spamt")	
			$QuestionHtml=$this->load->view('aPanel/rowSpam',array('spamQuestion'=>$Question),true);
		echo $QuestionHtml;
	}
	
	
	public function filterQuestions(){ //Ajax Function
		$qid=$_POST['qid'];
		$tag1=$_POST['tag1'];
		$tag2=$_POST['tag2'];
		$tag3=$_POST['tag3'];	
		$chk=$_POST['check'];
		if($chk=="true"){
				$this->apanelmodel->putspam($qid);
				echo "success";
			}else{
				if(!($tag1=="Set Tag")){
				$this->apanelmodel->putfilter($qid,$tag1,$tag2,$tag3);
				echo "success";
				}
				else
				{
					echo "failure";
				}
			}
	}
	
	public function markGood(){ //Ajax Function
		$qid=$_POST['qid'];
		$this->apanelmodel->markAsGood($qid);
		echo "success";
	}
	
	public function getCategoryQuestion(){ //Ajax function for categories
		$cat=$_POST['category'];
		$status=$_POST['ansStatus'];
		$filteredQuestion=$this->apanelmodel->getCategoryData($cat,$status);
	$filteredQuestionHtml=$this->load->view('aPanel/rowFiltered',array('filteredQuestion'=>$filteredQuestion),true);
	echo $filteredQuestionHtml;	
	}
	
}


