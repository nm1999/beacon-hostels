
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
    <script src="jquery.js"></script>
    <script src="jquery.min.js"></script>
    <link rel="stylesheet" href="jquery.js">
    <script>
        $(document).ready(function(){
			$(".frame").load("home.php");
			$("#home").click(function(){
					$("#home").css({"color":"white","text-decoration":"none"});
                    $(".frame").load("home.php");
                });

            $("#add").click(function(){
                $("#add").css({"color":"white","text-decoration":"none"});
                $(".frame").load("addhostel.php");
                
                
            });
        });
    </script>
</head>
<style>
	ul li{		
		list-style-type: none;
		padding:55px 25px;
	}
	ul li a:hover{
		text-decoration:none;
        color:white;
	}
	.links{
		background-color:lightgrey;
		
	}

	.footer{
		background-color:lightgrey;
		height:auto;
	}
    .frame{
		border:5px solid grey;
		width:90%;
	}
	.inner_div{
		padding:20px;
	}
	.links .fa{
		padding:5px;
		font-size:20px;
		color:red;
    }
    .btn-link{
        color:black;
        font-size:18px;
    }
    .btn-link:hover{
        text-decoration:none;
        color:white;
    }
 
	
	</style>
<body>
<div>

		<div class="d-flex">
				<div class="div " style="width:20%;">
					<ul class="links ">
						<li ><i class="fa fa-home"></i>  <button class="btn btn-link"  id="home">Home</button></li>
						<li><i class="fa fa-plus"></i> <button class="btn btn-link"  id="add">Add hostel</button></li>				
						<li ><i class="fa fa-bell"></i> <button class="btn btn-link"  id="view">View requests</button> </li>
                        <li ><i class="fa fa-gear"></i> <button class="btn btn-link"  id="settings">Settings</button> </li>
                        <li><i class="fa fa-power-off"></i><a href="index.php" class="btn btn-link">logout</a> </li>
					</ul>
				</div>
				<div class=" div  frame">					
					<!-- loading other pages from here -->


				</div>
			</div>
			<div class="footer">
					
							<div class="container">
								<div class="row">
									<div class="col-md-4">
										<hr style="border: 1px solid black;">
										<h3>Follow us</h3>
										<hr style="border: 1px solid black;">
										<div class="icon">
					
											<a href=""><i class="fa fa-facebook"></i></a>
											<a href=""><i class="fa fa-envelope-open"></i></a>
											<a href=""><i class="fa fa-instagram"></i></a>
										</div>
					
					
									</div>
									<div class="col-md-4">
										<hr style="border: 1px solid black;">
										<h3>Address</h3>
										<hr style="border: 1px solid black;">
										<i class="fa fa-map-marker"></i> &nbsp;&nbsp;&nbsp; Lira university<br>
										<i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;lirauni.ac.ug@yahoo.com
					
					
									</div>
									<div class="col-md-4">
										<hr style="border: 1px solid black;">
										<h3>Comment</h3>
										<hr style="border: 1px solid black;">
										<div>
											<label>Write your comment</label><br>
											<textarea placeholder="Your comment" class="form-control"></textarea><br>
											<input type="submit" name="submit" class="btn btn-success">
										</div>
									</div>
								</div>
						
			</div>

</div>



</body>

</html>