
<body>
<div class="right_section" style="width:220px; margin-left:5px;" >
	<ul class="right_section_a" >
		<li>
			<table cellspacing="10">
            	<tr>
            	<td align="center">Select Category:</td>
                <td><select id="selectCategoryCombo" >
						<option value="1' or '1=1">Select All</option>
						<option value="unanswered">In Que</option>
					    <option value="answered">Answered</option>
						<option value="closed">Closed</option>
					</select>
				</td></tr>
				<tr><td>Select Tag:</td>
                <td><select id="selectTagCombo" >
						<option value="1' or '1=1">Select All</option>
						<option value="volvo">Volvo</option>
						<option value="saab">Saab</option>
						<option value="mercedes">Mercedes</option>
						<option value="audi">Audi</option>
						</select>&nbsp;&nbsp;
				</td></tr>
				<tr>
                <td colspan="2" align="center" >
					<button onClick="getCustomizeQuestion()" class="button_me" style="font-size:11px;">Submit Query</button>
				</td></tr>
			</table>
	    </li>			 							 	
	</ul>
    <ul class="right_section_a">
		<li>
			<input class="input_text" type="text" id="usrEmail" name="usrEmail"/><label class="input_label" >Enter User Email</label>
		</li>
        <li><center><button onClick="showHome()" class="button_me" style="font-size:11px;">View Home</button></center></li>
	</ul>
</div>
</body>

<script type="text/javascript">
function showHome()
{
	var email=$("#usrEmail").attr('value');
	$.post('/mpanel/showHome',{'usrEmail':email},function(response){	
		if(response=="error")
			alert("InValid Email or Password !!");
		else 
			window.location=response;
		});
}
</script>