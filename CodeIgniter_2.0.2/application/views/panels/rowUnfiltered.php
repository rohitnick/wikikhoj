<?php foreach($Question as $row): ?>

<ul id="right_section_a" class="right_section_a">
	<table>
		<tr valign="top">
			<td width="45"><img src="/static/images/man.gif" />
			</td>
			<td width="525">
				<div class="normal">
					<?php echo $row['question'] ?>
				</div>
				<div class="sub" style="font-family: cambria; font-size: 12px;">
					<table width="450px;">
						<tr>
							<?php if(isset($row['answerCount'])) echo "<td width='160'>Total Answers: <b>". $row['answerCount']."</b></td>";?>
							<?php if(isset($row['qstatus'])) echo "<td width='160'>Status: <b>". $row['qstatus']."</b></td>";?>
							<td ><?php echo $row['email'];?></td>
						</tr>
						<tr>
							<td><?php echo $row['time'];?></td>
							<?php if(isset($row['setBy'])): ?>
								<td>Set By: <?php echo $row['setBy'];?></td>
								<td>Tags: <?php echo ($row['Tag1']."  ".$row['Tag2']."  ".$row['Tag3']);?></td>
							<?php endif;?>
						</tr>
					</table>

				</div>
			</td>
			<td vertical-align: middle;"><?php $this->load->view('/panels/panelAction/'.$row['status'],array('qid'=>$row['questionKaId']));?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: center;"><?php $this->load->view('panels/setTagDiv',array('qid'=>$row['questionKaId']));?>
			</td>
		</tr>
	</table>
</ul>
<?php endforeach;?>