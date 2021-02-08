<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h2>Home Page</h2>
	<ol>
		<li><a href='book.php'>Book Page</a></li>
		<li><a href='about.php'>About Page</a></li>
		<li><a href='indexadmin.php'>Admin Page</a></li>
	</ol>
	 
	<form name='filterform' method='POST' >
	<select name="room_name_selected" onchange='this.form.submit()' >
		<option value="" disabled selected>Select room</option>
			<?php
				$con=mysqli_connect("localhost","root","","db");
				$sqli = "SELECT * FROM rooms";
				$result = mysqli_query($con, $sqli);
				while ($row = mysqli_fetch_array($result)) 
				{
					echo '<option>'.$row['room_name'].'</option>';
				}
			?>
	</select>
	</form>
	
 	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$Search = $_REQUEST['room_name_selected'];
			if (strval($Search)!= "All") {
				$con=mysqli_connect("localhost","root","","db");
				$sqli = "SELECT * FROM books where room_name='$Search'";
				$result = mysqli_query($con, $sqli);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo "Room: " . $row["room_name"]. "   -   Name: " . $row["customer_name"]. "   -   From: " . $row["tfrom"]. "   -   Until: " .$row["tuntil"]. "<br>";
					}
				}
				else{
					echo "No bookings for this room";
				}
			}
			else{
				$con=mysqli_connect("localhost","root","","db");
				$sqli = "SELECT * FROM books";
				$result = mysqli_query($con, $sqli);
				while($row = $result->fetch_assoc()) {
					echo "Room: " . $row["room_name"]. "   -   Name: " . $row["customer_name"]. "   -   From: " . $row["tfrom"]. "   -   Until: " .$row["tuntil"]. "<br>";
				}
			}
		}
		else{
			$con=mysqli_connect("localhost","root","","db");
			$sqli = "SELECT * FROM books";
			$result = mysqli_query($con, $sqli);
			while($row = $result->fetch_assoc()) {
				echo "Room: " . $row["room_name"]. "   -   Name: " . $row["customer_name"]. "   -   From: " . $row["tfrom"]. "   -   Until: " .$row["tuntil"]. "<br>";
			}
		}
	?>
</div>
</body>