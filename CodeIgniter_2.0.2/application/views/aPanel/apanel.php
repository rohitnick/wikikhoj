<link href="/static/css/main1.css" type="text/css" rel="stylesheet">
<script src="/static/js/jquery.js" type="text/javascript"></script>

<style type="text/css">
.button{
	color:white;background-color:#666;font-size:16px;font-weight: bold;text-decoration: none;padding: 2px 10px 2px 10px;
}
.tab{
	background-color:#fff; width:100%; min-height: 300px; 
}
.tab table  {
		background-color:#eee;margin: 3px;font-size: 14px; width:99%;
}
.tabmenu{
	text-align:center;background-color:#999;font-weight: bolder;vertical-align: top;
}
</style>

<head><title>Admin Panel - WikiKhoj</title></head>
<center>
<div id="divcontainer" align="left" >
	<div id="content">
    		<div id="content_left1">
        		<div id="content_left_top">
                	<table id="menubar" width="100%" border="0" height="40px" style="text-align:center; border:thin solid #ccc;">
                		<tr style="background-color:#2C4762; color:#fff; cursor:pointer; border-radius:5px; box-shadow: 0px 0px 5px #8bad68; text-decoration:none;font-size:18px;">
                			<td id="menu_filt_div"><a onclick="a(1)">Filtered</a></td>
                			<td><a onclick="a(2)">Unfiltered</a></td>
                			<td><a onclick="a(3)">Spam</a></td>
                		</tr>
                	</table>
                    
                    <div id="currentDiv" class="tab" limit="0" >
    				<?php if(isset($unfilteredQuestionHtml)):?>
		                	<?php echo $unfilteredQuestionHtml;?>
					<?php endif; ?>
					</div>
                    <a id="Previous" class="button" style="float: left;margin: 5px 0 0 10px;display:	none " onclick="previous();"  > Previous</a>
<a id="Next" class="button" style="float: right;margin: 5px 10px 0 0;" onclick="next();">Next </a>	                		
<div style="clear:both"></div>
                    
                	</div>
                
                </div>
            	<div id="content_left_bot">
            
            	</div>
    		</div>
    	
	</div>
</div>
</center>

<script type="text/javascript" language="javascript">
lim = 0;
table="rawt" ;
function a(x)
{
	if(x==1)
	{
		lim=-5;
		table="filteredt";
		next();
	}
	else if (x == 2)
	{
		lim=-5;
		table="rawt";
		next();
	}
	else if (x == 3)
	{
		lim=-5;
		table="spamt";
		next();
	}
}

function getCategory()
{
	cat= document.getElementById("category").value;
	status= document.getElementById("ansStatus").value;
	$.post('/xyz123/getCategoryQuestion',{'category':cat,'ansStatus':status},function(response){
			var z = document.getElementById('currentDiv');
				z.innerHTML = response;	
		});
}

function next()
{
	lim=lim+5;
	$.post('/xyz123/getQuestions',{'limit':lim,'table':table},function(response){
			 var z = document.getElementById('currentDiv');
				z.innerHTML = response;	
				$('#Previous').show();
		});
}
function previous()
{
	if(lim!=0)
	{
		lim=lim-10;
		next();
	}
	else{
			$('#Previous').hide();
		}
}


</script>

<script type="text/javascript">

function notSpam($elem)
{
	qid=$elem.attr('qid');
		$.post('/xyz123/markGood',{'qid':qid},function(response){
			if(response){
			$elem.parent().parent().hide(500);
			}
		});
}
</script>

<script type="text/javascript">

function filterRow($elem)
{
	qid=$elem.attr('qid');
	$tr=$elem.parent().parent();
	tag1=$tr.find('#list1 option:selected').text();
	tag2=$tr.find('#list2 option:selected').text();
	tag3=$tr.find('#list3 option:selected').text();
	check=$tr.find('#chck').is(":checked");
	if(tag1 == "Set Tag" && check == false)
	{
		alert("Select any value");
	}
	else
	{
		$.post('/xyz123/filterQuestions',{'qid':qid,'tag1':tag1,'tag2':tag2,'tag3':tag3,'check':check},function(response){
			if(response){
			$elem.parent().parent().hide(500);
			}
		});
	}
}

</script>


