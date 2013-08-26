<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class myAnswer extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
                   $this->load->model('myAnswerModel');
                   $this->load->helper('url');
       }
       
       public function index($qid){
		
       	if($this->session->userdata('adminUsr')){
	       	
			$answerRowsHtml="";
	       	$this->load->view('header');
	       	$this->load->view('head');
	       	
	       	$question=$this->myAnswerModel->getAQuestionFromTableData('filteredt',$qid);
	       	      	
			$answerRows=$this->myAnswerModel->getAnswersForQuestion($qid);
	       	
			foreach ($answerRows as $row){
	       	$answerRowsHtml .= $this->load->view('answerIt/answerContent',array('answer'=>$row),true);
	       	$answerRowsHtml .="<br />";
			}
	       	
	       	$this->load->view('myAnswer/showAnswerView',array('question'=>$question,'answerRowsHtml'=>$answerRowsHtml));
	       	$this->load->view('footer');
       }
	   else{
      		header('Location: ../xyz123'); 	
       }
      }
       
       public function savingAnswer(){
       $qid=$_POST['qid'];
	   $singleAnswer=$_POST['answer'];
	   $answerHtml=$this->load->view('answerIt/answerContent',array('singleAnswer'=>$singleAnswer),true);
	   $this->answerItModel->savingAnswerData($qid,$singleAnswer);
	   echo $answerHtml;	   
       }
       
       public function getMoreAnswers(){
       $lim=$_POST['lim'];
       $qid=$_POST['qid'];
       
       $answerRowsHtml="";
       $answerRows=$this->answerItModel->getAnswersForQuestion($qid,$lim);
       foreach ($answerRows as $row){
       		$answerRowsHtml .= $this->load->view('answerIt/answerContent',array('answer'=>$row),true);
	       	$answerRowsHtml .="<br />";
		}
	    echo $answerRowsHtml;
       }
       
       
}
