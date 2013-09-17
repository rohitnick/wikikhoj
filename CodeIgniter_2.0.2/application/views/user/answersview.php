<link href="/static/css/main1.css" type="text/css" rel="stylesheet">
<title>WikiKhoj - Answer The Question</title>
<center>
<div id="divcontainer"  align="left" >
	<div id="content"  >
   		<div id="content_left1">
			<div id="content_left_top" >
        		<table id="contentTable" >
					<tr >
					<td valign="top" width="650" class="right_section">
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
												<?php echo $question['time'];?>
											</div>
										</td>
								</table>
                			</div>
                			
                            <span style="font-size:16px; margin-left:5px;"><b> Query Results</b></span>
                            <hr style="margin-left:110px; margin-top:-13px;" />
                                
                             <br />
						 	<div id="content_ans">
	                 			<!-- ajax answers -->
	                 		</div>
	                 			<div id="seeMoreAnswer" style="text-align: center;background: #8BAD68;"><a class="normal" style="color:#333" id="moreAnswerButton" href="javascript:void(0)">See More Results</a></div>
							<br /><hr /><br />                     
					</td>
					<td valign="top">
						<?php $this->load->view('user/userside'); ?>
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
	$("#moreAnswerButton").click(function(){ getAnswers(); });

});
function getAnswers()
{
	lim=lim+5;
	z = document.getElementById('seeMoreAnswer');
	$.post('/home/getMoreAnswers',{'lim':lim,'qid':qid},function(response){
		if(response)
			$('#content_ans').append(response);
		else{
			z.innerHTML="Sorry No Answers To Show";
			$('#seeMoreAnswer').fadeOut(3000);
		}
	});
}

</script>

