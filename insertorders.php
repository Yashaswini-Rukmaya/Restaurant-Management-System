<?php 

 session_start();
 
?>
   <h1>Enter details of new Order.</h1>

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
   <label >Item_id:</label><br>
   <input type="text" name="I_id" placeholder="Item_id"><br><br>
   <label >Customer_id:</label><br>
   <input type="text" name="C_id" placeholder="Customer_id"><br><br>
   <label >Date:</label><br>
   <input type="text" name="Date" placeholder="Date"><br><br>
   <label >Quantity:</label><br>
   <input type="text" name="Quantity" placeholder="Quantity"><br><br>
   
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
    
    $Item_id =  $_POST["I_id"];
    $Customer_id =  $_POST["C_id"];
    $Date  = $_POST["Date"];
    $Quantity = $_POST["Quantity"];
    
    $sql = "INSERT INTO `orders`(`I_id`, `C_id`, `Date`, `Quantity`) VALUES ('$Item_id','$Customer_id','$Date','$Quantity')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Order added successfully.')){window.location = "interface11.php?interface11=interface11";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Order. Some error occured")){window.location = "interface11.php?interface11=interface11";}
     </script>
   <?php
   }	 

  
  }

?>