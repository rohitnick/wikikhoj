<?php foreach($Question as $row):?>

<ul id="right_section_a" class="right_section_a">
	<li >
	<table style="width:100%">
		<tr valign="top">
			<td width="45"><img src="/static/images/man.gif" />
			</td>
			<td >
				<div class="normal">
					<?php echo $row['question']; $answer=$this->usermodel->getBestAnswer($row['questionKaId']); ?>
				</div>
				<div class="sub" style="font-family: cambria; font-size: 12px;">
					<table width="450">
						<tr>
							<td width="160"><?php echo $row['time'];?></td>
							
							<td width="160">Status :
							<?php 
								if($row['status'] == 2)
								{
									echo "<b>Rejected</b>";
								}
								else if($row['status'] == 0 || $row['qstatus']=="unanswered")
								{
									echo "<b>In Que</b>";
								}
								else if ( $row['qstatus']=="closed" )
								{
									echo "<b>Closed</b>";
								}
								else
									echo "<b>Being Answered</b>";
							//YEH KYA H  :X	 // Figure out a better method of showing status if u can. :X.	
							 ?>
							</td>
							<td ><?php if(isset($answer['answerCount'])) echo "Total Answers: <b> ". $answer['answerCount'];?></b></td>								
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>
	</li>
    <li >
    	<?php 
			if (isset($answer['answer'])):
		?>
				<div id="questionsBestAnswer" class="right_section">
                	<table><tr>
                    <td width="450">
					<u><b>Top Answer</b></u><br/>
                        <?php echo substr($answer['answer'],0,350);?>
                        <?php if (strlen($answer['answer']) > 350):?>
                            ......
                        <?php endif?>
                     </td><td valign="bottom">
                            ..<a href="/home/answers/<?php echo $row['questionKaId']?>">View More</a>
                    </td></tr></table>
				</div>
		<?php endif?>
    </li>
</ul>				
<style>
#questionsBestAnswer a{ color:#007700; }
#questionsBestAnswer {  margin-left:100px;margin-top:10px;} 
</style>

<?php endforeach;?>