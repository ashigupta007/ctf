<?php
	session_start();

	$answer_input= $_POST["answer-in"];
	$answer="you_are_the_best";

	if ($answer_input == $answer) 
	{
		$_SESSION["completed_tasks"]=$_SESSION["completed_tasks"]+1;
		$_SESSION["score"]= $_SESSION["score"]+50;
		$_SESSION["na"]=1;
		header("location:main.php");
	}
	else
	{
		header("location:main.php");
	}
?>