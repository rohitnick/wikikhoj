<?php

class panelmodel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
	
	function getQuestionsData($status=0,$limit=0){
		$query= "select *,qid as questionKaId from question where status = ".$status." order by qid desc limit ".$limit.",10";
		$result=$this->db->query($query)->result_array();
		return $result;
	}
	
	function getQuestionsWithTags($limit=0){
		//$query="SELECT * FROM question q,questiontag qt where q.qid=qt.qid order by q.qid desc limit ".$limitX.",".$limitY;
		$query="SELECT * ,q.time as time,q.qid as questionKaId, COUNT(answerId) as answerCount FROM question q JOIN questiontag qt ON q.qid = qt.qid LEFT JOIN answer a ON q.qid = a.qid where qt.qstatus!='closed'  GROUP BY q.qid ORDER BY q.qid DESC limit ".$limit.",10";
		$result=$this->db->query($query)->result_array();
		return $result;
	}
	
	function setSpam($qid){
		$query = "update question set status='2' where qid= ".$qid;
		$this->db->query($query);
	}
	
	function updateQuestionStatus($qid,$status){
		$query1	= "update question set status=".$status." where qid=".$qid;
		$this->db->query($query1);
	}
	
	function filterTheQuestion($qid,$tag1,$tag2,$tag3,$setBy){
		$query = "insert into questiontag values(".$qid.",'".$tag1."','".$tag2."','".$tag3."',CURRENT_TIMESTAMP".",'".$setBy."','unanswered')";
		$this->db->query($query);
		panelmodel::updateQuestionStatus($qid,'1');
		
	}
	
	function deleteTags($qid){
		$query="Delete from questiontag where qid=".$qid;
		$this->db->query($query);
	}
	
	function getCustomizequestion($category,$tag){
		$query="SELECT * ,q.time as time,q.qid as questionKaId, COUNT(answerId) as answerCount FROM question q JOIN questiontag qt ON q.qid = qt.qid LEFT JOIN answer a ON q.qid = a.qid WHERE (qt.qstatus =  '".$category."') AND ('". $tag."' IN (qt.Tag1, qt.Tag2, qt.Tag3)) GROUP BY q.qid order by q.qid desc ";
		$result=$this->db->query($query)->result_array();
		return $result;
	}
	
	function questionSubmit($question,$email,$notify)
	{
		$query = "insert into question values('','$question','$email','$notify',CURRENT_TIMESTAMP,0)";
		$this->db->query($query);
	}


	
	
}