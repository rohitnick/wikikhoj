<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mpanel extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
            $this->load->model('panelmodel');
       }
	public function index() //display's the page
	{	
	if($this->session->userdata('moderator')){
			$this->load->view('header');
			$this->load->view('panels/mpanelview');
			$this->load->view('footer');
		}
		else{
			header( 'Location: ../' ) ;
		}
	}

	
	public function getQuestions()
	{
		try{	
			$lim=$_POST['lim'];
			$status= $_POST['status'];
			if($status=='1')
				$Question=$this->panelmodel->getQuestionsWithTags($lim);
			else
				$Question=$this->panelmodel->getQuestionsData($status,$lim);					
			
				$QuestionHtml=$this->load->view('panels/rowUnfiltered',array('Question'=>$Question),true);
				echo $QuestionHtml;
		}
		catch(Exception $e){
			echo $e;
		}

	}
	
	public function filterQuestion() //Filters the question
	{ 
		try{
			$qid=$_POST['qid'];
			$tag1=$_POST['tag1'];
			$tag2=$_POST['tag2'];
			$tag3=$_POST['tag3'];
			$setBy=$this->session->userdata('moderator');
			$this->panelmodel->filterTheQuestion($qid,$tag1,$tag2,$tag3,$setBy);
			echo "success";
		}
			catch(Exception $e){
			echo $e;
		}
	}
	
	public function setSpam(){
		$qid=$_POST['qid'];
		$this->panelmodel->setSpam($qid);
		echo "success";
	}
	
	public function unFilter(){
		$qid=$_POST['qid'];
		$status=$_POST['status'];
		$this->panelmodel->updateQuestionStatus($qid,$status);
		$this->panelmodel->deleteTags($qid);
		echo "success";
	}
	
	public function getCustomizeQuestion(){ 
		$category=$_POST['category'];
		$tag=$_POST['tag'];
		$Question=$this->panelmodel->getCustomizeQuestion($category,$tag);
		$QuestionHtml=$this->load->view('panels/rowUnfiltered',array('Question'=>$Question),true);
		echo $QuestionHtml;		
	}
	public function showHome()
	{
		$email=trim($_POST['usrEmail']);
		$this->session->set_userdata('user',$email);
		echo "../home";
	}
	
}


