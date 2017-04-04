<div class="container">

<h1>Edit</h1>

<form action="<?=URL?>birthday/editBirthday" method="post">
<input type="hidden" name="id" value="<?=$birthdays['id']?>"> 
<input type="text" name="person" value="<?=$birthdays['person']?>">
<input type="number" name="day" value="<?=$birthdays['day']?>">
<input type="number" name="month" value="<?=$birthdays['month']?>">
<input type="number" name="year" value="<?=$birthdays['year']?>">
<a href="index.php">
<input type="submit" value="toevoegen">
</a>
</form>


</div>	