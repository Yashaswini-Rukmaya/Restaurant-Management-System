<?php 

 session_start();

?>
<?php include("header.php") ?>

<style>
    body{
        background-color:snow;
    }
table, th, td {
    border: 1px solid black;
    color: black;
    width: 1000px;
    table-layout: auto;
    border-collapse: collapse;
    padding: 5px;
    background-color: snow;
    }
    input[type="text"]{
    border: 0; 
    background: none; 
    margin: 20px auto;
    text-align: center; 
    display: block;
    position: relative; 
    top: 80%;
    left: 0%; 
    border: 2px solid purple;
    padding: 14px 40px; 
    width: 200px;
    outline: none;
    color: black;
    transition: 0.25s;
    cursor: pointer;
}
button[type="submit"]{
    border: 0; 
    background: none; 
    margin: 20px auto;
    text-align: center; 
    display: inline-block;
    position: relative; 
    top: 80%;
    left: 0%; 
    border: 2px solid purple;
    padding: 14px 40px; 
    width: 200px;
    outline: none;
    color: black;
    transition: 0.25s;
    cursor: pointer;
}
button[type="submit"]:hover{
    background:purple;
</style>
  <form method="post">
          <h1>Update Employee Details</h1>
            <table>
   <thead>
      <tr>
      <th>Employee_id</th>
      <th>Employee_name</th>
      <th>Role</th>
      <th>Address</th>
      <th>Phone_number</th>
      <th>Salary</th>
      </tr>
    </thead>
    <tbody>
    <form action="" method="post">
<?php


//make connection
$con = mysqli_connect('localhost','root','','rsmgsys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "";
    }

//select database
$edit_id = @$_GET['edit'];

$sql="SELECT * FROM `employee` WHERE Emp_id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=$record->fetch_assoc()) {
  
   ?>
   <tr>
        <td><?php echo $post['Emp_id']; ?></td>
        <td><input type="text" name="Emp_name"  value="<?php echo $post['Emp_name']; ?>" placeholder="Employee_name"></td></td>
		    <td><input type="text" name="Role"  value="<?php echo $post['Role']; ?>" placeholder="Role"></td></td>
		    <td><input type="text" name="Address"  value="<?php echo $post['Address']; ?>" placeholder="Address"></td></td>
		    <td><input type="text" name="Phno"  value="<?php echo $post['Phno']; ?>" placeholder="Phone_number"></td></td>
		    <td><input type="text" name="Salary"  value="<?php echo $post['Salary']; ?>" placeholder="Salary"></td></td>
      </tr>
 

<?php } ?>    
     </tbody>
    </table>
    <button type="submit" name="update" class="submit" value="update">update</button>
   </form>
   </div>
   </div>
  

<?php
if(isset($_POST['update'])) {

    $con = mysqli_connect('localhost','root','','rsmgsys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];
 
   $Employee_id =  $_POST["Emp_id"];
   $Employee_name  = $_POST['Emp_name'];
   $Role  = $_POST['Role'];
   $Address = $_POST['Address'];
   $Phone_number  = $_POST['Phno'];
   $Salary = $_POST['Salary'];
   
$sql1 = "UPDATE `employee` SET `Emp_name`='$Employee_name',`Role`='$Role',`Address`='$Address',`Phno`='$Phone_number',`Salary`='$Salary' WHERE Emp_id='$update_id'";
 
 if (mysqli_query($con,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Employee details updated successfully.')){window.location = "interface2.php?interface2=interface2";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
       // window.location = "employee.php?view_employee=view_employee";
          if(!alert("Can't update Employee details.Some error occured")){window.location = "interface2.php?interface2=interface2";}
   
     </script>
   <?php
   }



  }

?>


