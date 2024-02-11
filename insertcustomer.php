<?php 

 session_start();
 
?>

<?php include ("header.php") ?>

   <h1 class="text-center">Enter details of new Customer.</h1>

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
   <label >Customer_id:</label><br>
   <input type="text" name="Cust_id"  placeholder="Customer_id"><br><br>
   <label >Customer_name:</label><br>
   <input type="text" name="Cust_name"  placeholder="Customer_name"><br><br>
   <label >Customer_address:</label><br>
   <input type="text" name="Cust_address"   placeholder="Customer_address"><br><br>
   <label >Contact_no:</label><br>
   <input type="text" name="Contact_no"   placeholder="Contact_no"><br><br>
   
   <button type="submit" name="submit" class="" value="submit">submit</button>
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
    
    $Customer_id =  $_POST["Cust_id"];
    $Customer_name =  $_POST["Cust_name"];
    $Customer_address  = $_POST['Cust_address'];
    $Contact_number  = $_POST["Contact_no"];

    $sql = "INSERT INTO `customer`(`Cust_id`, `Cust_name`, `Cust_address`, `Contact_no`) VALUES ('$Customer_id','$Customer_name','$Customer_address','$Contact_number')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Customer added successfully.')){window.location = "interface4.php?interface4=interface4";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add customer. Some error occured")){window.location = "interface4.php?interface4=interface4";}
   
     </script>
   <?php
   }	 
}

?>