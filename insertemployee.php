<?php 

 session_start();
 
?>

   <h1 class="text-center">Enter details of new Employee.</h1>

<form  class="submit" method="POST">
<style>
  body{
    background:oldlace;
  }
    button[type="submit"]{
    border: 0; 
    background:none; 
    margin: 20px auto;
    text-align: center; 
    display: inline-block;
    position: relative; 
    top: 80%;
    left:2%;
    border: 2px solid purple;
    padding: 14px 40px; 
    width: 175px;
    outline: none;
    color: black;
    transition: 0.25s;
    cursor: pointer;
 } 
</style>
   <br><label >Employee_id:</label><br>
   <input type="text" name="Emp_id"   placeholder="Employee_id"><br><br>
   <br><label >Employee_name:</label><br>
   <input type="text" name="Emp_name"   placeholder="Employee_name"><br><br>
   <br><label >Role:</label><br>
   <input type="text" name="Role"  placeholder="Role"><br><br>
   <br><label >Address:</label><br>
   <input type="text" name="Address"  placeholder="Address"><br><br>
   <br><label >Phone_number:</label><br>
   <input type="text" name="Phno"   placeholder="Phone_number"><br><br>
   <br><label >Salary:</label><br>
   <input type="text" name="Salary"   placeholder="Salary"><br><br>

   <br><button type="submit" name="submit" class="submit" value="submit">submit</button>
  </form>

<?php


 if(isset($_POST['submit'])) {

    $con = mysqli_connect('localhost','root','','rsmgsys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }
    
    $Employee_id =  $_POST["Emp_id"];
    $Employee_name =  $_POST["Emp_name"];
    $Role  = $_POST['Role'];
    $Address  = $_POST["Address"];
    $Phone_number  = $_POST["Phno"];
    $Salary  = $_POST["Salary"];

    $sql = "INSERT INTO `employee`(`Emp_id`, `Emp_name`,`Role`, `Address`, `Phno`, `Salary`) VALUES ('$Employee_id','$Employee_name','$Role','$Address','$Phone_number','$Salary')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Employee added successfully.')){window.location = "interface2.php?interface2=interface2";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add employee. Some error occured")){window.location = "interface2.php?interface2=interface2";}
   
     </script>
   <?php
   }	 
 }
?>