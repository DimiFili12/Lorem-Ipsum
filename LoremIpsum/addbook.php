<?php
	$conn=mysqli_connect("localhost","root","","db");
	$sql= "insert into books (room_name,customer_name,tfrom,tuntil) values ('$_POST[room_name]','$_POST[customer_name]','$_POST[datepicker1]','$_POST[datepicker2]')";
	mysqli_query($conn, $sql); 
	include("book.php");
?>