<?php
session_start();
require("db_connect.php");

$userid=$_POST["username"];
$pass=$_POST["pass"];;

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM registration WHERE userid='".$userid."' AND password='".$pass."'" ;
$query=mysqli_query($conn, $sql);
if ($query) 
{
	if(mysqli_num_rows($query)==1)
	{
		header("location:main.php");
		while($row = mysqli_fetch_assoc($query)) 
		{
			$_SESSION["team_name"]=$row["teamname"];
			$_SESSION["user_id"]=$row["userid"];
			$_SESSION["score"]=00;
  			$_SESSION["completed_tasks"]=00;
  			$_SESSION["flag"]=0;

		}
	}
	else
	{
		header("location:login_eror.html");
	}
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>