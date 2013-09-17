<ul class="right_section_a">
<table style="table-layout:fixed;" width="640">
   	<tr valign="top">
   	<td width="45">
       <img src="/static/images/man.gif" /> 
    </td>
    <td width="515">    	
                	<div class="normal" > 
                   		<?php if(isset($singleAnswer)){echo $singleAnswer;}else{ echo $answer['answer'];}?>
                   		<hr style="margin-top:8px;" />
                   		<em>We are currently accepting Queries on E-shopping only.</em><br />
						<em>We will soon open our services for other domain as well.</em><br />
						<em>Thanks For visiting Wikikhoj.com</em>
                    </div>
                    <p class="sub">
                      <?php if(!(isset($singleAnswer))){
						echo $answer['timestamp']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Answered by: ";
						echo $answer['submittedBy'];}
						?>
                      <br />
                    </p>
    </td>
   <td style="margin-top:5px;">
   <?php if((!isset($singleAnswer))&& isset($this->session->userdata['moderator'])):?>
	   
	   <b>Rating &nbsp;</b>
	   		<input id="ratingBox" type="text" style="width:20px;color:blue;text-align: center" maxlength="2" value="<?php echo $answer['Rating']?>">
	   	 <a aid="<?php echo $answer['answerId']?>"  id="buttonPublish" onclick="buttonPublishClick($(this))"  href="javascript:void(0)" style="color:#007700;font-weight: normal;">Publish</a>
	<?php endif; ?>
	</td>
   </tr>
 </table>
</ul>

