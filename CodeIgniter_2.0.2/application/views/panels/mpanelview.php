<link href="/static/css/main1.css" type="text/css" rel="stylesheet">

<style type="text/css">

.anchorCss
{
	display: block;background: #446688;position: relative;
	width: 100px;text-align: center;height: 21px;
	color:white;border:1px solid #999;
}
.selectedAnchorCss
{
		display: block;background: #446688;position: relative;
	width: 100px;text-align: center;height: 21px;
	color:white;
	
}
</style>

<center>
<div id="divcontainer"  align="left" >
	<div id="content"  >
   		<div id="content_left1">
			<div id="content_left_top" >
        		<table cellspacing=""><tr>
	        		<td><a id="unfilteredAnchor"  class="selectedAnchorCss"  >Unfiltered</a></td>
	        		<td><a id="filteredAnchor"  class="anchorCss" >Filtered</a></td>
	        		<td><a id="spamAnchor"  class="anchorCss" >Spam</a></td>
	        		</tr></table>
	        		<hr style="top:-2px;position: relative;" /><br />
	        		
					<table id="contentTable" >
					<tr >
					<td id="tdContaingUl" valign="top" width="650" class="right_section">
                    	<div id="currentQuestionDiv" >
							<!-- The Questions comes here from getQuestion() function -->
                    	</div>
                    	<div style="text-align: center;background: #8BAD68;">
	                 				<a class="normal" style="color:#333" id="moreQuestionsButton">See More Questions</a>
	                 				<span id="seeMoreQuestions" style="display:none;" >Sorry No More Questions </span>
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
	<div id="content_left_bot">
	            
	</div>
</div>
    	
</center>

<script type="text/javascript">
var lim=0;
var status=0;
$(document).ready(function() 
{
	getQuestion(0,0);
	$('#unfilteredAnchor').click(function(){ getQuestion(0,0); });
	$('#filteredAnchor').click(function(){ getQuestion(1,0); });
	$('#spamAnchor').click(function(){ getQuestion(2,0); });
	$('#moreQuestionsButton').click(function(){ lim=lim+10; getQuestion(status,lim); });
	
});

function getQuestion($val,$limit)
{
	lim = $limit;
	status = $val;
	$.post('/mpanel/getQuestions',{'status':status,'lim':$limit},function(response){
		if(response!="")
		{
			$('#currentQuestionDiv').html('');
			$('#currentQuestionDiv').html(response);
			$('#seeMoreQuestions').fadeOut(0);
			$('#moreQuestionsButton').fadeIn(500);
		}
		else
		{
			$('#moreQuestionsButton').fadeOut(0);
			$('#seeMoreQuestions').fadeIn(500);
		}
	});
	
}

function filterQueAndSetTag($elem){
		
	qid=$elem.attr('qid');
	$papa=$elem.parent();
	combo1=$papa.find('#combo1').val();
	combo2=$papa.find('#combo2').val();
	combo3=$papa.find('#combo3').val();

	if(!(combo1 =="" && combo2=="" && combo3=="")){
			$.post('/mpanel/filterQuestion',{'qid':qid,'tag1':combo1,'tag2':combo2,'tag3':combo3},function(response){
				if(response="success"){
					$x=$elem.parentsUntil('#currentQuestionDiv');//Getting the parent Div
					$x.hide(1000,function(){ $x.remove();});// Removing the current Question Row
					optimizeMagic($x,0);
					
				}
			});
	}
	else{
		$('#selectTagDiv').text("Select Tags First").css({'color':'#990000','font-weight':'bold',"text-decoration":'blink'});
	}

}


function optimizeMagic($x,status){
	y=$x.parent().children('#right_section_a').length; //Calculating the no. of question row remaining
	if(y<3){
		
		$.post('/mpanel/getQuestions',{'status':status,'lim':lim},function(response){
			$('#currentQuestionDiv').append(response);
			
		});
	}

}


function setSpam($elem)
{
	qid=$elem.attr('qid');
	$.post('/mpanel/setSpam',{'qid':qid},function(response){
		if(response="success"){
			$x=$elem.parentsUntil('#currentQuestionDiv');
			$x.hide(1000,function(){$x.remove()});
			optimizeMagic($x,0,limy);
			
		}
	})
}	

function showSetTagDiv($elem)
{ 		// Unfiltered question me tag set karne wala div show karne ke liye
	$elem.parentsUntil('.right_section_a').find('#setTagDiv').slideDown(500);
}

function unFilterme($elem)
{
	qid=$elem.attr('qid');
	status=$elem.attr('status');
	$.post('/mpanel/unFilter',{'qid':qid,'status':0},function(response){
		$x=$elem.parentsUntil('#currentQuestionDiv');//Getting the parent Div
		$x.hide(1000,function(){ $x.remove();});// Removing the current Question Row
		optimizeMagic($x,status,limy);  
	});	
}

function getCustomizeQuestion()
{
	category=$('#selectCategoryCombo').val();
	tag=$('#selectTagCombo').val();
		$.post('/mpanel/getCustomizeQuestion',{'category':category,'tag':tag},function(response){
			$('#currentQuestionDiv').html('').fadeOut();
			if(response!=""){
				$('#currentQuestionDiv').html(response).fadeIn();
			}else{
				$('#currentQuestionDiv').html('<h1>Sorry No Data Found</h1>').fadeIn();
			}
		});	
}
</script>