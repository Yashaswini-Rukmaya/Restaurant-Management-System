<?php 

 session_start();
 

?>
<style>
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
          <h1>Update Items Details</h1>
          <br>
		    
		
		<table>
   <thead>
      <tr>
      <th>Item_id</th>
      <th>Item_name</th>
      <th>Price</th>
      </tr>
    </thead>
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

$sql="SELECT * FROM `items` WHERE Item_id='$edit_id' ";

$record = mysqli_query($con,$sql);


while($post=mysqli_fetch_assoc($record)) {
  
   ?>
   <tr>
        <td><?php echo $post['Item_id']; ?></td>
        <td><input type="text" name="Item_name" value="<?php echo $post['Item_name']; ?>" placeholder="name"></td></td>
		<td><input type="text" name="Price"  value="<?php echo $post['Price']; ?>" placeholder="name"></td></td>
		
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

    $conn = mysqli_connect('localhost','root','','rsmgsys');

    if ($con->connect_error){
        die("connection error");
    }
    else{
        echo "connected successfully";
    }

 // $update_id = $_GET['id'];
  $update_id = @$_GET['edit'];
 
   $Item_id =  $_POST["Item_id"];
   $Item_name  = $_POST['Item_name'];
   $Price  = $_POST['Price'];
  
   
$sql1 = "UPDATE `items` SET `Item_name`='$Item_name',`Price`='$Price' WHERE Item_id='$update_id'";
 
 if (mysqli_query($conn,$sql1))
  {
    ?>
   <script>
     
	  if(!alert('Employee details updated successfully.')){window.location = "interface3.php?interface3=interface3";}
   </script>
   <?php
       } 
   else {
    ?>
     <script>
        //window.location = "employee.php?view_employee=view_employee";
          if(!alert("Can't update item details.Some error occured")){window.location = "interface3.php?interface3=interface3";}
   
     </script>
   <?php
   }
}

?>


