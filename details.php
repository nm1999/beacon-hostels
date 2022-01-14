<!DOCTYPE html>
<?php
$n =$_GET['w'];
   
    $conn= new mysqli("localhost","root","","beacon_hostel");
    if (!$conn) {
        echo "Connection failed";
    }
 $select = "SELECT * FROM  detailed_table INNER JOIN  hostel_records ON detailed_table.hostel_name = hostel_records.hostel_name where  hostel_records.hostel_name='$n' " ;
 $result =$conn->query($select);
 $row =$result->fetch_assoc();
?>
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
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" href="w3css.css">
	<script type="text/javascript">
	$(document).ready(function(){
		$(".w3-closebtn").click(function(){
			$(".modal").hide();
		});
	});
		
		function book(){

			document.getElementsByClassName("modal")[0].style.display="block";
		}
		

	</script>
</head>
<style type="text/css">
			.icons{
		justify-content: space-around;
		margin-top: 5px;
		background-color:#3a5caa;
		padding: 5px;
		width:100%;
	}
    .fa{
		color:white;
	}
	.icon1 i{
		padding:5px;
	}
	.major{
		border-bottom:1px solid black;
		box-shadow:1px 1px 20px 1px;
		top:0px;
		left:0px;
		background-color: white;
	}
	a:hover{
		text-decoration:none;
	}
  .nav1 a{
		margin-left:20px;
		color:white;
	}
	/*.nav1{
		padding-top:10px;
	}*/
	footer{
		background-color:#3a5caa;
	}
</style>
<body>
<div class="main">
 <div class="major  sticky-top">
            <!-- navbar-->
            <div class="icons d-flex">
                <div class="nav1">
                  
                    <a href="https://student.lirauni.ac.ug">Student portal</a>
                    <a href="https://lirauni.ac.ug">Lirauniversity website</a>
                </div>
                <div class="icon1">
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-whatsapp"></i>
                    <i class="fa fa-envelope"></i>
                    <i class="fa fa-phone"></i>
                </div>
            </div>
            <!-- narbar -->
            <div class="navbar navbar-expand-md  navbar-light  ">
                <div class="container-fluid">
                    <div>
                        <div class="d-flex">
                            <img src="beacon log.png" style="max-width:100%;border-radius: 100%;height:90px;">

                            <div style="margin-top:20px;margin-left:5px;font-size:14px;">
                                <h5>Beacon Hostels</h5>
                                <p> comfort estates</p>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="navbar-toggler btn btn-success " data-toggle="collapse"
                        data-target="#navbarResponsive">
                        <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse text-right " id="navbarResponsive">

                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item active">
                                <a href="index.php" class=" btn nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://campusweekly.herokuapp.com" class=" btn nav-link">News</a>
                            </li>
                            <li class="nav-item">
                                <a href="booking.php" class=" btn nav-link">Book hostel</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><input type="text" class=" form-control" name="search"
                                        placeholder="Search hostel">
                                </a>
                            </li>
                        </ul>


                    </div>
                </div>

            </div>
        </div>
	<!-- body scetion -->
		<div class="">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active  w3-animate-fade">
				<img class="d-block img-fluid "  src="<?php echo "admin/".$row['hostel_pic']?>" alt="First slide">
				<div class="carousel-caption">
					<h3 class="display-4">Visit, Book And <br>Secure Your Hostel </h3>
					<button type="button" class="btn btn-outline-light btn-lg">Get Hostel</button>
					
				</div>
			</div>
			<div class="carousel-item w3-animate-zoom">
				<img class="d-block  img-fluid " src="<?php echo "admin/".$row['frontend']?>" alt="Second slide">
			</div>
			<div class="carousel-item w3-animate-spin">
				<img class="d-block  img-fluid  " src="<?php echo "admin/".$row['backend']?>" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
		</div>


			<!-- table of hostels -->

			<div class="row jumbotron ">
				<div class="col">
							<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>				
			</div>

				<table class="table">

                <tr>
                    <th>Hostel Name</th>
                    <th>Description</th>
                    <th>Fees</th>
                    <th>Status</th>
                </tr>
                    <?php
                        while($row =$result->fetch_assoc()){
                          echo "  <tr>
						<td>". $row['room_name']."</td>
						<td>" .$row['descriptions']."</td>
						<td>".$row['fee']."</td>
						<td>". $row['stats']."</td>
					</tr>";
                        }
                    ?>
					
					
				</table>
			<!-- end of hostels -->
	<!-- end of body section -->
	<!-- beginnig of footer -->
	<footer>
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
        </footer>
</div>
<div>
	
	<!-- end of footer -->
	<div class="modal" id="modal" style="width:75%;margin:0 auto;">
		
		<div class="modal-content " >
			<div class="bg-light closeButton" onclick="close()" >
			<span class="w3-closebtn">X</span>
		    </div>
		<div class="container">
			<form>
				
				<label>Surname</label>
				<input type="text" name="surname" class="form-control">
				<label>Other name</label>
				<input type="text" name="othername" class="form-control">
				<label>Course / program</label>
				<input type="text" name="course" class="form-control">
				<label>Gender</label>
				<select class="form-control">
					<option>Male</option>
					<option>Female</option>
				</select>
				<label>Contact</label>
				<input type="number" name="Contact" class="form-control">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
				<label>Deposit</label>
				<input type="number" name="money" class="form-control">
				<input type="submit" name="submit" class="w3-btn btn-success">
			
			</form>
			 </div>
		</div>
	</div>
</body>
</html>