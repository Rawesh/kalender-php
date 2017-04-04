<?php

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthdays` ORDER BY month ASC, day ASC, year ASC";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetchAll();

}

function getOneBirthday($id){

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	return $query->fetch();

}

function editBirthday() 
{

$db = openDatabaseConnection();

$id = $_POST['id'];

$query = $db -> prepare ("UPDATE birthdays SET `person` = :person, `day` = :day, `month` = :month, `year` = :year WHERE id=:id"); 
	
$query->bindParam(':id', $_POST["id"]);
$query->bindParam(':person', $_POST["person"]);
$query->bindParam(':day', $_POST["day"]);
$query->bindParam(':month', $_POST["month"]);
$query->bindParam(':year', $_POST["year"]);
   
$query->execute();
render("birthday/index", array("birthdays" => getAllBirthdays()));

}

function deleteBirthday($id) 
{
	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays  WHERE id=$id";
	$query = $db->prepare($sql);

	$query->execute(array('id' => $_GET['id']));

	$db = null;
}

function createBirthday() 
{
	$person = $birthday['person'];

	if (strlen($person) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays (person, day, month, year)
	VALUES (:person, :day, :month, :year)";
	$query = $db->prepare($sql);

	$query->bindParam(':person', $birthday["person"]);
	$query->bindParam(':day', $birthday["day"]);
	$query->bindParam(':month', $birthday["month"]);
	$query->bindParam(':year', $birthday["year"]);

	$query->execute();

	$db = null;

	return true;
}

