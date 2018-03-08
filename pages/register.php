<?php
session_start();
require("db_connect.php");

$userid=$_POST["username"];
$pass=$_POST["pass"];
$team_name=$_POST["team_name"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT into registration (userid, password, teamname) VALUES ('".$userid."', '".$pass."', '".$team_name."')";

if (mysqli_query($conn, $sql)) 
{
    header("location:../index.php");
}
else
{
	header("location:already_registered.html");
}
?>