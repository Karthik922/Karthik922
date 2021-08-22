<?php
session_start();
	include("config.php");
	if(!isset($_SESSION['id']))
	{
	header("location:login.php?mes=<p>Please Login Here</p>"); 
	}
$res=$con->query("SELECT * FROM `comments`");
if($res->num_rows>0)
{
	while($row=$res->fetch_assoc())
	{
		echo "<li><b>{$row["UNAME"]}:</b>{$row["COMMENTS"]}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{$row["DATE"]}</li>";
	}
}
?>