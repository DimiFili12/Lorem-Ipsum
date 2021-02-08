<?php
	$conn=mysqli_connect("localhost","root","","db");
	$sql= "insert into rooms (id,room_name) values ('$_POST[rm]','room $_POST[rm]')";
	mysqli_query($conn, $sql); 
	include("login.php");
?>