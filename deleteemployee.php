<?php


    $con = mysqli_connect('localhost','root','','rsmgsys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }
	
date_default_timezone_set('Asia/Kolkata');
	       $date = date("Y-m-d");
           $ThisDate = date("d-m-Y", strtotime($date));
		   
// sql to delete a record

$delete_id = @$_GET['delete'];

$sql = "DELETE FROM `employee` WHERE  Emp_id='$delete_id'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
        if(!alert('Employee deleted successfully.')){window.location = "interface2.php?interface2=interface2";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not delete employee.Some error occured')){window.location = "interface2.php?interface2=interface2";}
   
     </script>
   <?php
   }

$con->close();
			  
?>