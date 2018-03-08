<?php
	session_start();

	$answer_input= $_POST["answer"];
	$answer="the caesar is the oldest known cryptography technique known to the man and it just helped you earn points";

	if ($answer_input == $answer) 
	{
		$_SESSION["completed_tasks"]=$_SESSION["completed_tasks"]+1;
		$_SESSION["score"]= $_SESSION["score"]+25;
		$_SESSION["in"]=1;
		header("location:main.php");
	}
	else
	{
		header("location:main.php");
	}
?>