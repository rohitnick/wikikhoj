<center>
<select id='category' style="width: 250px;" ><option>Set Tag</option><option>tech</option><option>acad</option><option>affair</option><option>sex</option><option>phil</option><option>Myass</option></select>
<select id='ansStatus' style="width: 250px;"><option value="0">Unanswered</option><option value="1">Being Answered</option><option value="2">Answered</option></select> 
<input type="submit" onclick="getCategory();"/>
</center>
<table id="fTable" cellspacing="3" >
<tr id="fTableMenu" class="tabmenu">
<td>S.No</td> <td style="text-align:center">Question</td><td>Email</td><td>Time</td><td>A Status</td><td>A Count</td><td>Click</td>
</tr>
<?php foreach($filteredQuestion as $row):?>
<tr id="fCommonRows"  style="background-color:rgba(0,0,0,0.05);vertical-align: top;">
<td><?php echo $row['qid']?></td>
<td style="width: 400px"><textarea  readonly="readonly" rows="3" cols="46" style="font-size:14px;" ><?php echo $row['ques']?></textarea></td>
<td><?php echo $row['eid'] ?></td>
<td width="120px;"><?php echo $row['time']?></td>
<td><?php echo $row['astatus']?></td>
<td><?php echo $row['acount']?></td>
<td><a  href="/answerIt/<?php echo $row['qid'] ?>">Answer It</a></td>
</tr>
<?php endforeach;?>
</table>

