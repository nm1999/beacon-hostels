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
					<select  id="description" class="form-control">
						<option value="">Single</option>
						<option value="">Double</option>
						<option value="">Single and Self contained</option>
						<option value="">Double and self contained</option>
					</select>
					<label for="">fees</label>
					<input type="number" id="fees" class="form-control">
					<label for="">Status</label>
                    <input type="text" id="status" class="form-control">
					<button class="w3-btn" onclick ="submit()">Send</button>
				
			</div>




</body>
</html>