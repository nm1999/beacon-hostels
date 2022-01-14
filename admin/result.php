<?php 
    $room =$_POST['r_name'];
    $description =$_POST['desc'];
    $fees =$_POST['fees'];
    $status =$_POST['status'];
    $h_name=$_POST['hostel_name'];
    echo $description;

 $conn = new mysqli("localhost","root","","beacon_hostel");
 if(!$conn){
     echo"connection failed";
 }
 $insert ="INSERT INTO detailed_table(room_name,descriptions,fee,stats,hostel_name)values('$room','$description','$fees','$status','$h_name')";
 if($conn->query($insert)===TRUE){
     echo "Room details have been stored";
 }else{
     echo"Room details have NOT  BEEn stored";
 }
?>