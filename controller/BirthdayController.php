<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array("birthdays" => getAllBirthdays()));
}

function create()
{
	render("birthday/create");
}

function createSave()
{
	if (!createBirthday())
	{
		header("Location: " . URL . "error/index");
		exit();
	}

	header("Location: " . URL . "birthday/index");
}

function edit()
{	
	render("birthday/edit",array("birthdays" =>getOneBirthday($_GET['id'])));
}	

function read(){
	render("birthday/getBirthday",array("birthdays" =>getOneBirthday($_GET['id'])));
}
	
function delete()
{
	deleteBirthday($_GET['id']);
	header("Location: " . URL . "birthday/index");
}

