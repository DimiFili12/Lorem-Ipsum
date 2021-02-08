<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Book Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
	<script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script>
        $(function() {
            $( "#datepicker1" ).datepicker();
            $( "#datepicker2" ).datepicker();
         });
      </script>
</head>
<body>
<div class="container">
	<h2>Book Page</h2>
	
	<form action="addbook.php" method=post>
	<div class="form-group">
		<label for="datepicker1">From:</label>
		<input type="text" id="datepicker1" name="datepicker1">
		<br>
		
		<label for="datepicker2">Until:</label>
		<input type="text" id="datepicker2" name="datepicker2">
		<br>
			
		<label for="room_name">Room:</label>
		<select id="room_name" name="room_name" required>
		<option value="" disabled selected>Select room</option>
			<?php
				$con=mysqli_connect("localhost","root","","db");
				$sqli = "SELECT * FROM rooms WHERE NOT id = '0'";
				$result = mysqli_query($con, $sqli);
				while ($row = mysqli_fetch_array($result)) 
				{
					echo '<option>'.$row['room_name'].'</option>';
				}
			?>
		</select>
		<br>
		
		<label for="customer_name">Name:</label>
		<input type="text"  id="customer_name" name="customer_name">
		<br>
    </div>
    <button type="submit" class="btn btn-default">Add Room</button>
	</form>
  
    <br>
	<br>
	<a href='index.php'>Back</a>  
</div>	 
</body>