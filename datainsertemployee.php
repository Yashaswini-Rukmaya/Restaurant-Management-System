<?php 

 session_start();
 
 
?>

<?php include ("header.php") ?>

<h1 class="text-center" >Add New Employee Here</h1>
  <br>

   <a href="dashboard.php"><button type="button" class="btn btn-primary btn-lg">Dashboard</button></a>

   <h1 class="text-center">Enter details of new Admin.</h1>

<form  action="" method="POST">

 
   <label >Name:</label>
   <input type="text" name="name"  placeholder="name">
   <label >Email:</label>
   <input type="text" name="email" class="form-control"  placeholder="email">
   <label >Username:</label>
   <input type="text" name="username"   placeholder="username">
   <label >Password:</label>
   <input type="text" name="password"   placeholder="password">
   <button type="submit" name="submit" value="submit">submit</button>
  </form>
   



<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

  
  
   $name =  $_POST["name"];
   $email =  $_POST["email"];
   $username =  $_POST["username"];
   $password  = $_POST['password'];
 

  $sql = "INSERT INTO `admin`(`name`, `email`, `username`, `password`) VALUES ('$name','$email','$username','$password')";


   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('new admin added Successfully.')){window.location = "dashboard.php";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add new admin. Some error occured")){window.location = "dashboard.php";}
   
     </script>
   <?php
   }	 
   
  }

?>

<?php } ?>


