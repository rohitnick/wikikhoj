<link href="/static/css/main1.css" type="text/css" rel="stylesheet">
<title>WikiKhoj - Answer The Question</title>
<center>
<div id="divcontainer" align="left">
	<div id="content">
    	<table><tr valign="top"><td>
    		<div id="content_left">
        		<div id="content_left_top">
        		<div id="askedQuestion"  style="color:black;font-weight:Bold; font-size:18px;" ><?php echo $question['ques'];?></div>
        		<div id="askedQuestionTime" style="color:#333;font-size: 10px;"><?php echo $question['time']?></div>
				
				</div><br />
                <div id="content_ans" >
                 <?php echo $answerRowsHtml;?>                
                </div>
                <center><div id="moreAnswerButtonDiv" style="background-color:rgba(255,255,180,0.5)";><a id="moreAnswerButton" href="javascript:void(0)" style="color:navy;">See More Answers</a></div></center>
             
                
        		
    		</div></td><td>
    	<div id="content_right">
    		<?php $this->load->view('side.php');?>
		</div>
        </td></tr>
        </table>
	</div>
	<hr />
</div>
</center>
<script type="text/javascript">
var lim=0;
var qid= <?php echo $question['qid']?> ;
$(document).ready(function() {

	$("#moreAnswerButton").click(function(){
		lim=lim+5;
		z = document.getElementById('moreAnswerButtonDiv');
		$.post('/answerIt/getMoreAnswers',{'lim':lim,'qid':qid},function(response){
			if(response){
				$('#content_ans').append(response);}
			else{
				z.innerHTML="Sorry No More Answers";
				$('#moreAnswerButtonDiv').fadeOut(3000);
			}
		});
	});

});


</script>