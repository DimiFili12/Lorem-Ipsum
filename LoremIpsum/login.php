<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<?php
		if (isset($_POST['usr'])){
			$cn=mysqli_connect("localhost","root","","db");
			$q=mysqli_query($cn,"select * from admin where usr='$_POST[usr]' and psw='$_POST[pwd]'");
			if(mysqli_num_rows($q)>0){
				$_SESSION['lg']=1;	
			}
			else{
				$_SESSION['lg']=0;
			}
		}
		
		if(@$_SESSION['lg']==0 || @$_SESSION['lg']==""){
			echo "<h1>Error on login</h1>";
		}
		else{
	?>
		<div class="container">
			<h2>Admin Page </h2>
			<form action="addroom.php" method=post>
			<div class="form-group">
				<label for="rm">Room:</label>
				<input type="number" class="form-control" id="rm" placeholder="Write only the number of the room" name="rm" min="1" required>
			</div>
			<button type="submit" class="btn btn-default">Add Room</button>
			</form>
			<br>
			<br>
			<a href='index.php'>Back</a>  
		</div>	 
	<?php
		}
	?>
</div>
</body>