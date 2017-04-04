<div class="container">
	<h1>Add</h1>
	<form action="<?= URL ?>birthday/createSave" method="post">
		<label>Naam</label> <br>
		<input type="text" name="person"><br><br>		
		<label>Dag</label> <br>
		<input  type="number" name="day" min="1" max="31"><br><br>
		<label>Maand</label> <br>
		<input  type="number" name="month" min="1" max="12"><br><br>
		<label>Jaar</label> <br>
		<input  type="number" name="year" min="1900"><br><br>
		<br>
		<a href="index.php">
		<input id="add_to_calendar" type="submit" value="Toevoegen">
		</a>
	</form>
</div>