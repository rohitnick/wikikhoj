<?php
class Home extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
            $this->load->model('usermodel');
            $this->load->model('panelmodel');
       }
	public function index()
	{
		if($this->session->userdata('user')){
			$email=$this->session->userdata('user');
			$this->load->view('header');
			$user=$this->usermodel->getUserDetails($email);
			if(count($user) > 0)
				 $this->load->view('user/homeview',array('user'=>$user[0]));
			else $this->load->view('user/homeview',array('email'=>$email));
			$this->load->view('footer');
		}
		else{
			header( 'Location: ../' ) ;
		}
	}
	public function answers($qid)
	{
		if($this->session->userdata('user'))
       	{
       		$email=$this->session->userdata('user');
       		$question=$this->usermodel->getUserQuestion($email,$qid);
       		if($question)
       		{       			
				$this->load->view('header');
		       	$this->load->view('user/answersview',array('question'=>$question));
		       	$this->load->view('footer');
       		}
       		else header('Location: /home');
       	}
       	else header('Location: /');
	}
	public function getMoreAnswers()
    {
        $lim=$_POST['lim'];
        $qid=$_POST['qid'];
        $answerRowsHtml="";
    	$answerRows=$this->usermodel->getUserAnswers($qid,$lim);
		foreach ($answerRows as $row)
			$answerRowsHtml .= $this->load->view('answerIt/answerContent',array('answer'=>$row),true);
	    echo $answerRowsHtml;
    }
	public function userQuestions()
	{
			$lim=$_POST['lim'];
			$email=$this->session->userdata('user');
			$Question=$this->usermodel->getQuestionsData($email,$lim);
			$QuestionHtml=$this->load->view('user/userquestions',array('Question'=>$Question),true);
			echo $QuestionHtml;	
	}
	public function submitQuestion()
	{
		$question=trim($_POST['userQuestion']);
		$email=$this->session->userdata('user');
		$notify=$_POST['userNotify'];
		
		$this->panelmodel->questionSubmit($question,$email,$notify);
		echo "success";
	}
	
	public function getBestAnswers($qid)
	{
		$answer=$this->usermodel->getBestAnswer($qid);
			if (isset($answer['answer'])){
			 echo $answer['answer'];
			}		
			else echo "failure";	
	}
		
}