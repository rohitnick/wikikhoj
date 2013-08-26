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
        		<div id="content_left_bot">
        		<div id="editorDiv"><?php echo $ckeditor?></div>
        		</div><br />
                <a href="javascript:void(0);" id="saveAnswer" style=" background-color:rgba(0,0,0,0.7); padding:5px 10px 5px 10px; color:#FFF;position: absolute;margin-left:  625px; ">Submit</a>
                <center><a href="javascript:void(0);" id="submitMoreAnswer" style="background-color:rgba(0,0,0,0.7); padding:5px 10px 5px 10px; color:#FFF;display:none; ">I have 1 more answer</a></center>
                <br/><br/>
                <div id="content_ans" >
                 <?php echo $answerRowsHtml;?>                
                </div>
                <center><div id="moreAnswerButtonDiv" style="background-color:rgba(255,255,180,0.5)";><a id="moreAnswerButton" href="javascript:void(0)" style="color:navy;">See More Answers</a></div></center>
             
                
        		
    		</div></td><td>
    	<div id="content_right">
    	
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
	var editor=CKEDITOR.instances.my_editor; //global declaration

	$('#saveAnswer').click(function(){
			var value=editor.getData();
		 	if(value.length>0){	
	 			$.post('/answerIt/savingAnswer',{'qid':qid,'answer':value},function(response){
	 				if(response){
						$('#editorDiv').hide(); //ckeditor ko hide kiya
						response=response + "<br />";
						$('#content_ans').prepend(response); //naya answer ko prepend kiya
						$('#saveAnswer').hide(); // save button ko hide kiya h 
						$('#submitMoreAnswer').show(250); // 1 more ko visible , uska function niche likha h 				
				 	 }
	 			});
			}
			else{
				alert("Answer the question first");			
			}
	});

	$('#submitMoreAnswer').click(function(){
			editor.setData('');
			$('#editorDiv').show(100);
			$('#saveAnswer').show();
			$('#submitMoreAnswer').hide(250);
	});

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