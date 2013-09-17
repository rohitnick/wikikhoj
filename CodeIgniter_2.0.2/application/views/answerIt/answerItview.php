<link href="/static/css/main1.css" type="text/css" rel="stylesheet">
<title>WikiKhoj - Answer The Question</title>
<center>
<div id="divcontainer"  align="left" >
	<div id="content"  >
   		<div id="content_left1">
			<div id="content_left_top" >
        		<table id="contentTable" >
					<tr >
					<td valign="top" style="width: 650px;" class="right_section">
						
					 		<div class="right_section_a" >
					 			<table>
									<tr valign="top">
										<td style="padding-right: 15px;"><img src="/static/images/man.gif" />
										</td>
										<td >
											<div class="normal">
												<?php echo $question['question'] ?>
											</div>
											<div class="sub">
												<?php echo $question['time'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												&nbsp;&nbsp; Posted By: <?php echo $question['email'];?>
			
											</div>
										</td>
								</table>
								<?php if(isset($ckeditor)): ?><div id="editorDiv" style="padding: 3px;"><hr /> <br /><?php echo $ckeditor?></div>
								<div style="margin-top: 10px;margin-right:5px;text-align: right" ><a href="javascript:void(0);" id="closeAnswer" class="button_me" style="">Close Question</a>
								<a href="javascript:void(0);" id="saveAnswer" class="button_me" style="">Submit The Answer</a> <?php endif; ?>
								</div>
								<br />
								<ul id="submitMoreAns" class="right_section" style="display:none;">
									<center>
	            					<a class="normal" id="submitMoreAnswer" href="javascript:void(0)">I would like to add one more answer</a>
	            					</center>
	            				</ul>
	            				<ul id="UndoClosedDiv" class="right_section" style="display:none;">
									<center>
	            					<a class="normal" id="undoClosed" href="javascript:void(0)" style="color:red">Undo Closed</a>
	            					</center>
	            				</ul>
                			</div>
                			<br />
						 	
						 	<div id="content_ans">
						 		<center><div id="answerRatingInfo" class="info" style="color:green;"></div></center>	                 			   
	                 		</div>
	                 			<div id="seeMoreAnswer" style="text-align: center;background: #8BAD68;">
	                 				<a class="normal" onclick="getAnswers();" style="color:#333" id="moreAnswerButton">See More Answers</a>
	                 			</div>
							<br /><hr /><br />                
	                		
					</td>
					<td  valign="top">
						<?php $this->load->view('panels/modside'); ?>
					</td>
					</tr>
					</table>		
    		</div>
		</div>
	</div>
</div>
</center>
<script type="text/javascript">
var lim=-5;
var qid= <?php echo $question['qid']?> ;
$(document).ready(function() 
{
	getAnswers();
	<?php if(isset($ckeditor)): ?>var editor=CKEDITOR.instances.my_editor; //global declaration<?php endif;?>

	$('#saveAnswer').click(function(){
		var value=editor.getData();
	 	if(value.length>0){	
 			$.post('/answerIt/savingAnswer',{'qid':qid,'answer':value},function(response){
 				if(response){
					$('#editorDiv').hide(); //ckeditor ko hide kiya
					response=response + "<br />";
					$('#content_ans').prepend(response); //naya answer ko prepend kiya
					$('#saveAnswer').hide(); // save button ko hide kiya h 
					$('#submitMoreAns').show(250); // 1 more ko visible , uska function niche likha h 				
			 	 }
 			});
		}
		else{
			alert("Answer the question first");			
		}
	});
	
	

	$('#closeAnswer').click(function(){
		var value=$('#content_ans').children().length;
		if(value > 0){
			$.post('/answerIt/changeQuestionTagStatus',{'qid':qid,'qstatus':"closed"},function(){
					$('#editorDiv').hide();
					$('#saveAnswer').hide();
					$('#closeAnswer').hide();
					$('#submitMoreAns').hide();
					$('#UndoClosedDiv').show();				
			});
		}
		else alert("You Cannot Close the Answer. It should have atleast One Answer");		
	});

	$('#undoClosed').click(function(){
		$.post('/answerIt/changeQuestionTagStatus',{'qid':qid,'qstatus':"answered"},function(){
					$('#editorDiv').show();
					$('#saveAnswer').show();
					$('#closeAnswer').show();
					$('#UndoClosedDiv').hide(); 
				
			});
	});
			

	$('#submitMoreAnswer').click(function(){
			editor.setData('');
			$('#editorDiv').show(100);
			$('#saveAnswer').show();
			$('#submitMoreAns').hide(250);
	});

});
function getAnswers()
{
	lim=lim+5;
	z = document.getElementById('seeMoreAnswer');
	$.post('/answerIt/getMoreAnswers',{'lim':lim,'qid':qid},function(response){
		if(response){
			$('#content_ans').append(response);}
		else{
			z.innerHTML="Sorry No More Answers";
			$('#seeMoreAnswer').fadeOut(3000);
		}
	});
}

function buttonPublishClick($elem){
	
	var rating=$elem.parent().find('#ratingBox').attr('value');
	if(rating>-2 && rating < 21){
		$.post('/answerIt/changeAnswerRating',{'aid':$elem.attr('aid'),'rating':rating},function(response){
			if(rating >0)
				showInfoMsg("#answerRatingInfo","Answer Published");
			else{
				if(rating == 0)
					showInfoMsg("#answerRatingInfo","Answer Unpublished");
				else
					showInfoMsg("#answerRatingInfo","Answer Rejected");
			}
		});	
	}
	else alert('Please Provide Correct Rating Value');		
}
	
</script>