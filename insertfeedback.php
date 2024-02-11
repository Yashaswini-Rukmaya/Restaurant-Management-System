<?php 

 session_start();
 
?>

<?php include ("header.php") ?>

   <h1 class="text-center">Enter details of new Feedback.</h1>

<form  class="items" method="POST">
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
   <label >Feedback_id:</label><br>
   <input type="text" name="Fdbk_id"  placeholder="Feedback_id"><br><br>
   <label >Food_quality:</label><br>
   <input type="text" name="Food_quality"   placeholder="Food_quality"><br><br>
   <label >Cleanness:</label><br>
   <input type="text" name="Cleanness"   placeholder="Cleanness"><br><br>
   <label >Service:</label><br>
   <input type="text" name="Service"   placeholder="Service"><br><br>
   <label >Customer_id:</label><br>
   <input type="text" name="Cust_id"   placeholder="Customer_id"><br><br>
   <button type="submit" name="submit" value="submit">submit</button>
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
    
    $Feedback_id =  $_POST["Fdbk_id"];
    $Food_quality =  $_POST["Food_quality"];
    $Cleanness  = $_POST['Cleanness'];
    $Service  = $_POST["Service"];
    $Customer_id  = $_POST["Cust_id"];

    $sql = "INSERT INTO `feedback`(`Fdbk_id`, `Food_quality`, `Cleanness`, `Service`, `Cust_id`) VALUES ('$Feedback_id','$Food_quality','$Cleanness','$Service','$Customer_id')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Feedback added successfully.')){window.location = "interface5.php?interface5=interface5";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Feedback. Some error occured")){window.location = "interface5.php?interface5=interface5";}
   
     </script>
   <?php
   }	 

  
  }

?>