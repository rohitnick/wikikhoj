<table id="unfilteredTable" cellspacing="3" >
<tr id="tableMenu" class="tabmenu">
<td>S.No</td> <td style="text-align:center">Question</td><td>Time</td><td>Spam</td><td>Tag1</td><td>Tag2</td><td>Tag3</td><td>Click</td></tr>
<?php foreach($unfilteredQuestion as $row):?>
<tr id="commonRows"  style="background-color:rgba(0,0,0,0.05);vertical-align: top;">
<td><?php echo $row['qid']?></td>
<td style="width: 400px"><textarea  readonly="readonly" rows="3" cols="46" style="font-size:14px;" ><?php echo $row['ques']?></textarea></td>
<td width="120px;"><?php echo $row['time']?></td><td><input id="chck" type='checkbox' value='0'  /></td>
<td><select id='list1' style="width: 100px;"><option>Set Tag</option><option>tech</option><option>acad</option><option>affair</option><option>sex</option><option>phil</option><option>Myass</option></select></td>
<td><select id='list2' style="width: 100px;"><option>Set Tag</option><option>tech</option><option>acad</option><option>affair</option><option>sex</option><option>phil</option><option>Myass</option></select></td>
<td><select id='list3' style="width: 100px;"><option>Set Tag</option><option>tech</option><option>acad</option><option>affair</option><option>sex</option><option>phil</option><option>Myass</option></select></td>
<td><a qid="<?php echo $row['qid'] ?>" id="filter" onclick="filterRow($(this));" > Filter</a></td>
</tr>
<?php endforeach;?>
</table>

