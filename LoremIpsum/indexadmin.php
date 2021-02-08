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
	<h2>Login Page</h2>
	<form action="login.php" method=post>
	<div class="form-group">
		<label for="username">Username:</label>
		<input type="text" class="form-control" id="usr" placeholder="Enter Username" name="usr">
    </div>
    
	<div class="form-group">
		<label for="pwd">Password:</label>
		<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default">Login</button>
	</form>
	<br>
	<br>
	<a href='index.php'>Back</a>
	</div>
</body>
</html>
