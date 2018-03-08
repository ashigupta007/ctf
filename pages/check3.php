<?php
	session_start();

	$answer_input= $_POST["answer-in"];
	$answer="ram_rahim_milta_hai_gufa_mein";

	if ($answer_input == $answer) 
	{
		$_SESSION["completed_tasks"]=$_SESSION["completed_tasks"]+1;
		$_SESSION["score"]= $_SESSION["score"]+40;
		$_SESSION["ca"]=1;
		header("location:main.php");
	}
	else
	{
		header("location:main.php");
	}
?>