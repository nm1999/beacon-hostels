<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="shortcut icon" type="icon/x-image" href="images/log.png">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="w3schools.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
	if (isset($_POST['submit'])) {
		$name =$_POST['hostel'];
		$status =$_POST['status'];

		$file_name =$_FILES['file']['name'];
		$tmp_name =$_FILES['file']['tmp_name'];
		$storage ="uploads/".$file_name;

		$file_name2 =$_FILES['file2']['name'];
		$tmp_name2 =$_FILES['file2']['tmp_name'];
		$storage2 ="uploads/".$file_name2;
		move_uploaded_file($tmp_name2, $storage2);

	


		$file_name3 =$_FILES['file3']['name'];
		$tmp_name3 =$_FILES['file3']['tmp_name'];
		$storage3 ="uploads/".$file_name3;	
		move_uploaded_file($tmp_name3 , $storage3);




		if (move_uploaded_file($tmp_name,$storage)) {
		 	echo "Uploded";
		 }else{
		 	echo "error";
		 }
		 $conn= new mysqli("localhost","root","","beacon_hostel");
		 if (!$conn) {
		 	echo "Connection failed";
		 }

		$insert ="INSERT INTO hostel_records(hostel_name,status,hostel_pic ,backend,frontend)VALUES('$name','$status','$storage','$storage2','$storage3') ";
		if ($conn->query($insert)===TRUE) {
			echo "Information stored <br><br>";?>
			
			<script>
        function submit(){
            var hostel_name = "<?php echo $name?>" ;
            var r_name = document.getElementById("room_name").value;
            var desc =document.getElementById("description").value;
            
            var fees =document.getElementById("fees").value;
            var status =document.getElementById("status").value;

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                document.getElementById("result").innerHTML=xmlhttp.responseText;
            };
            xmlhttp.open("POST","result.php",true);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xmlhttp.send("r_name="+r_name+"&desc="+desc+"&fees="+fees+"&status="+status+"&hostel_name="+hostel_name);
        }
    </script>
</head>
<body>

<div id="result">

</div>
<div class="contianer col-md-5 modal-content">
			<header>
				<h3 class="text-center"> Hostel details</h3>
				</header>				
					<label for="">Room Name</label>
					<input type="text" id="room_name" class="form-control" >
					<label for="">Description</label>
					<select  class="form-control">
						<option value=""></option>
						<option value=""  id="description">Single</option>
						<option value=""  id="description">Double</option>
						<option value=""  id="description">Single and Self contained</option>
						<option value=""  id="description">Double and self contained</option>
					</select>
					<label for="">fees</label>
					<input type="number" id="fees" class="form-control">
					<label for="">Status</label>
					<select name="" id="status">
						<OPTIon id="status">Booked</OPTIon>
						<option value="" id="status">Book now</option>
					</select>
					<button class="w3-btn" onclick ="submit()">Send</button>
				
			</div>





				<?php 
		}else{
			echo "Not stored";
		}
		









	}else{
		header('location:index.php');
	}
?>
	
	</body>
</html>