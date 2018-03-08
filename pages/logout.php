<?php
	session_start();
	require("db_connect.php");
	$user_id=$_SESSION["user_id"];
	$score=$_SESSION["score"];
  	$completed_tasks=$_SESSION["completed_tasks"];

  	$conn = mysqli_connect($servername, $username, $password, $dbname);

  	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}

	$sql="INSERT into score (userid, score, taskscompleted) VALUES ('".$user_id."', '".$score."', '".$completed_tasks."')";

	if (mysqli_query($conn, $sql)) 
	{
	session_destroy();
    header("location:../index.php");
	}
	else
	{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}


?>