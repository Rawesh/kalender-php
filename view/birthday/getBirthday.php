<div class="container">
<h1>Info</h1>
<table width="800px" border="solid 1px">
	<tr>
		<th width="100px">ID</th>
		<th width="80">Person</th>
		<th width="80">Day</th>
		<th width="80">Month</th>
		<th width="80">Year</th>
	</tr>
	<tr>
		<td><?=$birthdays['id']?></td>
		<td><?=$birthdays['person']?></td>
		<td><?=$birthdays['day']?></td>	
		<td><?=$birthdays['month']?></td>
		<td><?=$birthdays['year']?></td>
	</tr>
</table>

<button>
	<a style="color: blue;" href="<?= URL ?> birthday/delete?id=<?=$birthdays['id']?>">delete</a>
</button>

</div>	