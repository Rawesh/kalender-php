<div class="container">

	<?php 	
	$month = array ("","Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus", "September", "Oktober", "November", "December");
	$currentMonth = null; 
	?>

	<?php foreach ($birthdays as $birthday) { ?>
			
	<?php 

 			if($currentMonth !=$birthday["month"] ){
			$currentMonth=$birthday["month"];
			echo"<h1>"; echo $month[$birthday["month"]]; echo"</h1>";	
			}
 	?>	 
	<table border="solid 1px">
		<tr>
			<th width="200px;">Person</th>
			<th width="160px;">Day</th>
			<th width="160px;">Year</th>
		</tr>
		<tr>
			<td><?= $birthday['person']?></td>
			<td><?= $birthday['day']?></td>x
			<td><?= $birthday['year']?></td>
			<td>
				<button>
					<a style="color: blue;" href="<?= URL ?> birthday/read?id=<?=$birthday['id'] ?>">info</a>
				</button>
			</td>
			<td>
				<button>
					<a style="color: blue;" href="<?= URL ?> birthday/edit?id=<?=$birthday['id'] ?>">edit</a>
				</button>
			</td>
		</tr>
		<?php } ?>
	</table>


	<button><a href="<?= URL ?> birthday/create/" >add</a></button>
</div>