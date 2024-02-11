<?php 

 session_start();
 
?>
 <h1 class="text-center">Enter details of new Item.</h1>

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
   <input type="text" name="Item_id"  placeholder="Item_id"><br><br>
   <label >Item_name:</label><br>
   <input type="text" name="Item_name"  placeholder="Item_name"><br><br>
   <label >Price:</label><br>
   <input type="text" name="Price"   placeholder="Price"><br><br>
   
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
    
    $Item_id =  $_POST["Item_id"];
    $Item_name =  $_POST["Item_name"];
    $Price  = $_POST['Price'];
    
    $sql = "INSERT INTO `Items`(`Item_id`, `Item_name`, `Price`) VALUES ('$Item_id','$Item_name','$Price')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Items added successfully.')){window.location = "interface3.php?interface3=interface3";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Item. Some error occured")){window.location = "interface3.php?interface3=interface3";}
   
     </script>
   <?php
   }	 

  
  }

?>