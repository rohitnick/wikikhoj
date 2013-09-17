<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class answerIt extends CI_Controller {

       public function __construct()
       {
            parent::__construct();
                   $this->load->model('answeritmodel');
                   $this->load->helper('url');
                   $this->load->library('ckeditor');
          		   $this->ckeditor->basePath = '/static/js/ckeditor/';
          		   $this->ckeditor-> config['toolbar'] = 'MyToolbar';
                   $this->ckeditor->config['language'] = 'en';
       }
       
       public function index($qid)
       {
       	if($this->session->userdata('moderator'))
       	{
	       	$question=$this->answeritmodel->getAQuestionFromTableData($qid);
	       	
	       	if($question['status']=='1') 
	       	{
		       	$ckeditor=$this->load->view('ckeditor',array(),true);
		       	
			    $this->load->view('header');
			    $this->load->view('answerIt/answerItview',array('question'=>$question,'ckeditor'=>$ckeditor));
		       	$this->load->view('footer');
	       	}
	       	else header('Location: ../mpanel');
       	}
       	else header('Location: ../'); 	
      }
       
       public function savingAnswer()
       {
       $qid=$_POST['qid'];
	   $singleAnswer=$_POST['answer'];
	   $answerHtml=$this->load->view('answerIt/answerContent',array('singleAnswer'=>$singleAnswer),true);
	   $this->answeritmodel->savingAnswerData($qid,$singleAnswer);
	   echo $answerHtml;	   
       }
       
       public function getMoreAnswers()
       {
       $lim=$_POST['lim'];
       $qid=$_POST['qid'];
       $answerRowsHtml="";
       $answerRows=$this->answeritmodel->getAnswersForQuestion($qid,$lim);
       foreach ($answerRows as $row)
       		$answerRowsHtml .= $this->load->view('answerIt/answerContent',array('answer'=>$row),true);
	    echo $answerRowsHtml;
       }
       
       public function changeQuestionTagStatus()
       {
	       $id=$_POST['qid'];
	       $value=$_POST['qstatus'];
		   $this->answeritmodel->changeQuestionTagStatus($id,$value);	       	
       }
       
       public function changeAnswerRating()

       {
       		$id=$_POST['aid'];
       		$rating=$_POST['rating'];
       		$this->answeritmodel->changeAnswerRating($id,$rating);
       		echo "success";
       }
	
}
