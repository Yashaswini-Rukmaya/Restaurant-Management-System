<!DOCTYPE html> 
<html lang="en" dir="Itr"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Animated user interface Form</title> 
        <link rel="stylesheet" href="interface2a.css"> 
    </head> 
</html> 
<form class="box" action="index.php" method="post"> 
    <h1> EDIT FEEDBACK</h1> 
    <input type="text" placeholder="Feedback_id" > 
    <input type="text" placeholder="Customer_id" > 
    <input type="text" placeholder="Food_quality" >
    <input type="text" placeholder="Cleanness" > 
    <input type="text" placeholder="Sevice" > 
    <input type="submit" name="" value="UPDATE"> 
    <input type="submit" name="" value="DELETE"> 
    <input type="submit" name="" value="ADD"> 
    <?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

  
  
   $name =  $_POST["name"];
   $gender =  $_POST["gender"];
   $email  = $_POST['email'];
   $DOB  = $_POST["dateofbirth"];
   $Contact_No  = $_POST["contact"];
   $department  = $_POST["department"];



  $sql = "INSERT INTO `employee_details`(`name`, `gender`, `email`, `DOB`, `contact_no`, `department`) VALUES ('$name','$gender','$email','$DOB','$Contact_No','$department')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Employee added successfully.')){window.location = "employee.php?view_employee=view_employee";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add employee. Some error occured")){window.location = "employee.php?view_employee=view_employee";}
   
     </script>
   <?php
   }	 

  
  }

?>
    <input type="submit" formaction= interface5.php name="" value="Back">
    
</form> 
</body> 
</html> 