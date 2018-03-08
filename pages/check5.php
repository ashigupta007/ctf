<?php
	session_start();

	$answer_input= $_POST["answer-in"];
	$answer="fb-ufi-likelink";

	if ($answer_input == $answer) 
	{
		$_SESSION["completed_tasks"]=$_SESSION["completed_tasks"]+1;
		$_SESSION["score"]= $_SESSION["score"]+20;
		$_SESSION["mn"]=1;
		header("location:main.php");
	}
	else
	{
		header("location:main.php");
	}
?>