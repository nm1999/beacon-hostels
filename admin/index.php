<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
	<link rel="shortcut icon" type="icon/x-image" href="images/log.png">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="w3schools.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	.modal-content{
		width:45%;
		margin-top:80px;
	}
</style>
<body>
 <div>
 	<div class="modal-content container">
 		<h2 class="text-center">Login</h2>
 		<form method="post" action="adminpage.php">
 			<label>Email :</label>
 			<input type="email" name="email" class="form-control" required="">
 			<label>Password :</label>
 			<input type="password" name="psw" class="form-control" required=""><br>
 			<input type="submit" name="submit" class="w3-btn btn-success " style="margin-bottom:10px;">
 		</form>
 	</div>
 </div>
</body>
</html>