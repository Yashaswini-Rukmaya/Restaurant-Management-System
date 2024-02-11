<!DOCTYPE html> 
<html lang="en" dir="Itr"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Animated user interface Form</title> 
        <link rel="stylesheet" href="interface2a.css"> 
    </head> 
</html> 
<form class="box" action="index.html" method="post"> 
    <h1> EDIT EMPLOYEE</h1> 
    <input type="text" placeholder="Employee_id" > 
    <input type="text" placeholder="Employee_name" > 
    <input type="text" placeholder="Role" > 
    <input type="text" placeholder="Address" > 
    <input type="text" placeholder="Phone_number" > 
    <input type="text" placeholder="Salary" > 
    <input type="submit" name="" value="UPDATE"> 
    <?php 

 session_start();
 
 if(!isset($_SESSION['name'])) {
   
    header("location: admin_login.php"); 
    }
 else {

?>

<?php include ("header.php") ?>


<div class="container-fluid" style="background-color:lavenderblush";>

          <h1 class="h1_index text-center">Update Employee Details.</h1>
          <br>
		    <a class="a_color" href="dasboard.php"><button type="button" class="btn btn-primary btn-lg"> Dashboard</button></a>
		   <br>
        <div class="col-sm-10">
		
		<table class="table table-striped table-bordered">
   <thead>
      <tr>
        <th>Emp_Id</th>
        <th>Name</th>
        <th>Gender</th>
		<th>Email</th>
		<th>Date of Birth</th>
		<th>Contact No</th>
		<th>Department</th>
      </tr>
    </thead>
    <tbody>
		
  <form action="" method="post">
<?php


//make connection
$con = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `employee` WHERE Emp_id='$edit_id'";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   
   

      <tr>
        <td><?php echo $post['id']; ?></td>
        <td><input type="text" name="name" class="form-control" id="formGroupExampleInput" value="<?php echo $post['name']; ?>" placeholder="name"></td></td>
        <td><input type="text" name="gender" class="form-control" id="formGroupExampleInput" value="<?php echo $post['gender']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="email" class="form-control" id="formGroupExampleInput" value="<?php echo $post['email']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="dateofbirth" class="form-control" id="formGroupExampleInput" value="<?php echo $post['DOB']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="contact_no" class="form-control" id="formGroupExampleInput" value="<?php echo $post['contact_no']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="department" class="form-control" id="formGroupExampleInput" value="<?php echo $post['department']; ?>" placeholder="name"></td></td>
      </tr>
 

<?php } ?>    
     </tbody>
    </table>
	<div class="form-group">
    <button type="submit" name="update" value="update">update</button>
  </div>
   </form>
  </div>
</div>


<?php
if(isset($_POST['update'])) {

    $conn = mysqli_connect('localhost','root','','attendance');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];
 
   $name =  $_POST["name"];
   $gender  = $_POST['gender'];
   $email  = $_POST['email'];
   $DOB  = $_POST['dateofbirth'];
   $contact  = $_POST['contact_no'];
   $department = $_POST['department'];
   
 

$sql1 = "UPDATE `employee_details` SET `name`='$name',`gender`='$gender',`email`='$email',`DOB`='$DOB',`contact_no`='$contact',`department`='$department' WHERE id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Employee details updated successfully.')){window.location = "employee.php?view_employee=view_employee";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "employee.php?view_employee=view_employee";
          if(!alert("Can't update Employee details.Some error occured")){window.location = "employee.php?view_employee=view_employee";}
   
     </script>
   <?php
   }



  }

?>

<?php } ?>
    
    <input type="submit" name="" value="DELETE"> 
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

$Emp_id = @$_GET['delete'];

$sql = "DELETE FROM `employee` WHERE  Employee_id='$Emp_id'";

if ($con->query($sql) === TRUE) {
   ?>
   <script>
        if(!alert('Employee deleted successfully.')){window.location = "employee.php?view_employee=view_employee";}
   
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert('Can not delete employee.Some error occured')){window.location = "interface2.php?interface2.php=interface2.php";}
   
     </script>
   <?php
   }

$con->close();
			  
?>
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

    <input type="submit" formaction= interface2.php name="" value="Back">
    
</form> 
</body> 
</html> 

