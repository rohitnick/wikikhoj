<link href="/static/css/main1.css" type="text/css" rel="stylesheet">
<title>WikiKhoj - Home</title>


<center>

<div id="divcontainer"  align="left" >
	<div id="content"  >
   		<div id="content_left1">
			<div id="content_left_top" >
        		<table id="contentTable" >
					<tr >
                    <td valign="top" width="650" class="right_section">
                        <table cellspacing="10"><tr>
					 		<td><img style="max-height:64px; max-width:64px;"  src="<?php if((isset($user))) echo $user['fbpic']; else echo '/static/images/man.gif' ?>" /></td>
                            <td valign="top" width="450" style="font-size:24px;"><?php if(!(isset($user))) echo $email; else echo $user['fbname'] ?> </td>
                            <td valign="bottom"> <a id="newQuestion" onclick="showDiv()"  href="javascript:void(0)" style="color:#007700; font-size:17px;">Ask a Query</a></td>
                 		</tr></table>
                        <div id="askQuestion" style="display:none;">
                            <span class="heading">New Search Query</span>
                            <hr style="margin-left:140px; margin-top:-13px;" />
                            <table width="640" cellspacing="5" style="margin:10px 0;"><tr>
                                <td><textarea id="questionText" class="text_field" style="width:530px; max-width:530px;" > </textarea></td>
                                <td valign="bottom"><button onclick="submitQuestion()" class="button_me">Submit</button></td></tr>
                                <tr>
                                <td colspan="2"><input type="checkbox" id="notifyMe" name="notifyMe" />&nbsp; Notify answer through mail
                                </td></tr>
                            </table>
                        </div>
                        <span class="heading">Your Search Queries</span>
                        <hr style="margin-left:150px; margin-top:-13px;" />
                        <br />
					 	 <div id="currentQuestionDiv" >
							<!-- The Questions comes here from getQuestion() function -->
                    	</div>
                    	<div id="seeMoreQuestions" style="text-align: center;background: #8BAD68;">
	                 				<a class="normal" style="color:#333" id="moreQuestionsButton">See More Queries</a>
	                 	</div>
						<br /><hr /><br /> 
					</td>
					<td   valign="top">
						<?php include 'userside.php'; ?>
					</td></tr>
				</table>		
    		</div>
		</div>
	</div>
</div>
</center>

<script type="text/javascript">
lim=0;
$(document).ready(function() 
{
	userQuestions(0);
	$('#moreQuestionsButton').click(function(){ lim=lim+10; userQuestions(lim);});
				
});
	function showDiv($elem)
	{ // Naya Question submit karne wala div show karne ke liye
		$("#askQuestion").slideDown(1000);
		$("#newQuestion").fadeOut(1000);
	}
	function submitQuestion()
	{
		usrQuestion=$("#questionText").attr('value');
		usrNotify=$('#notifyMe').attr('checked');
		if(usrNotify)
			usrNotify=1;

		$.post('/home/submitQuestion',{'userQuestion': usrQuestion,'userNotify':usrNotify},function(response){	
			if( response = "success")
			{
				window.location="../home";
			}
		});
	}
	function userQuestions($limit)
	{
		lim=$limit;
		z = document.getElementById('seeMoreQuestions');
		$.post('/home/userQuestions',{'lim':$limit},function(response){
			if(response!="")
				$('#currentQuestionDiv').append(response);
			else
			{
				z.innerHTML="Sorry No More Queries";
				$('#seeMoreQuestions').fadeOut(3000);
			}
		});
		
	}
	
</script>