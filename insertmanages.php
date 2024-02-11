<?php 

 session_start();
 
?>
   <h1 class="text-center">Enter details of new Manages.</h1>

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
   <label >Employee_id:</label><br>
   <input type="text" name="E_id"  placeholder="Employee_id"><br><br>
   <label >Item_id:</label><br>
   <input type="text" name="It_id"   placeholder="Item_id"><br><br>
   
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
    
    $Employee_id =  $_POST["E_id"];
    $Item_id =  $_POST["It_id"];
    

    $sql = "INSERT INTO `manages`(`E_id`, `It_id`) VALUES ('$Employee_id','$Item_id')";

   if (mysqli_query($con,$sql))
  {
     ?>
   <script>
     
	  if(!alert('Manages added successfully.')){window.location = "interface10.php?interface10=interface10";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
          if(!alert("Can not add Manages. Some error occured")){window.location = "interface10.php?interface10=interface10";}
   
     </script>
   <?php
   }	 

  
  }

?>