<table id="sTable" cellspacing="3" >
<tr id="sTableMenu" class="tabmenu">
<td>S.No</td> <td style="text-align:center">Question</td><td>Email</td><td>S Count</td><td>Time</td>
</tr>
<?php foreach($spamQuestion as $row):?>
<tr id="sCommonRows"  style="background-color:rgba(0,0,0,0.05);vertical-align: top;">
<td><?php echo $row['qid']?></td>
<td style="width: 400px"><textarea  readonly="readonly" rows="3" cols="46" style="font-size:14px;" ><?php echo $row['ques']?></textarea></td>
<td><?php echo $row['eid'] ?></td>
<td width="120px;"><?php echo $row['scount']?></td>
<td><?php echo $row['time']?></td>
<td><a qid="<?php echo $row['qid'] ?>" onclick="notSpam($(this));">Mark As Good</a></td>
</tr>
<?php endforeach;?>
</table>
