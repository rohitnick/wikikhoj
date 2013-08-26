<?php

class answerItModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
    public function getAQuestionFromTableData($table,$qid){
    	$query= "select * from ".$table." where qid= ".$qid;
		$result=$this->db->query($query)->row_array();
		return $result;
    }
    
    public function savingAnswerData ($qid,$answer){
       $query="Insert Into answer values(NULL,'$qid','$answer',CURRENT_TIMESTAMP,0)";
       $this->db->query($query);	
     }
     
    public function getAnswersForQuestion($qid,$limit=0){
    	$query="Select * from answer where qid=".$qid." order by time desc LIMIT ".$limit.",5";
    	$result=$this->db->query($query)->result_array();
    	return $result;
    }
}