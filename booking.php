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
                                <a href="index.php" class="w3-btn btn nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://campusweekly.herokuapp.com" class="w3-btn btn nav-link">News</a>
                            </li>
                            <li class="nav-item">
                                <a href="booking.php" class="w3-btn btn nav-link">Book hostel</a>
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
	<!-- end of header div -->

  <!--  Body section -->
  <div class="row py-1">
       <?php  
       		 $conn= new mysqli("localhost","root","","beacon_hostel");
			 if (!$conn) {
			 	echo "Connection failed";
			 }
			 $extract ="SELECT * from hostel_records order by id desc";
			 $result = $conn->query($extract);
			 while ($row = $result->fetch_assoc()) {?>
  			  <div class="col-md-3 py-3">
                <div class="card">
                	<!-- <div class="img-fluid" style="background-image:url('<?php echo "admin/".$row['hostel_pic']?>');background-size:100% 100%;height:300px;">
			 			<h3 class="card-title" style="margin-top:250px;opacity:0.01;"><?php echo $row['hostel_name']?></h3>
			 		</div>                -->

						<img src="<?php echo "admin/".$row['hostel_pic']?>"  class="img-fluid"   alt="">
                    <div class="card-body">
                   		<h3 class="card-title" style="font-weight:bolder;"><?php echo $row['hostel_name']?></h3>
                        <div class="card-text d-flex justify-content-between">
                            <span> Fee: UGX 550000 <?php echo $row['status']?> </span>
                           <a class="btn btn-outline-secondary" href="details.php?w=<?php echo $row['hostel_name']?>">Details</a>
                        </div>                        
                    </div>
                </div>
            </div> 
			
			
<?php 
}?>
</div>  

  <!--  end body section -->








<!-- 	beginning of footer -->
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
	<!-- end of footer -->
</body>
</html>