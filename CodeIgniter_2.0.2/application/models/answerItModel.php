<?php

class answeritmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
    public function getAQuestionFromTableData($qid){
    	$query= "select * from question where qid= ".$qid;
		$result=$this->db->query($query)->row_array();
		return $result;
    }
    
    public function savingAnswerData ($qid,$answer){
    	$submiitedBy=$this->session->userdata('moderator');
       $query="Insert Into answer values(NULL,'$qid','$answer',0,0,CURRENT_TIMESTAMP,'$submiitedBy')";
       $this->db->query($query);
       $query="update questiontag set qstatus='answered' where qid=".$qid;
       $this->db->query($query);	
     }
     
    public function getAnswersForQuestion($qid,$limit=0){
    	$query="Select * from answer where qid=".$qid."  order by rating desc LIMIT ".$limit.",5";	
    	$result=$this->db->query($query)->result_array();
    	return $result;
    }
    
    public function changeQuestionTagStatus($id,$value){
    	$query="update questiontag set qstatus= '".$value."' where qid= ".$id;
    	$this->db->query($query);
    }
    
    public function changeAnswerRating($id,$rating=0){    	
		$query="UPDATE `answer` SET `Rating` = '$rating' WHERE `answerId` =".$id;
    	$this->db->query($query);    	
    }
}