<?php 

session_start();

?> 
<html lang="en" dir="Itr"> 
    <head> 
        <meta charset="utf-8"> 
        <title>Animated interface2 form</title> 
        <link rel="stylesheet" href="interface2a.css"> 
    </head> 
    <style>
    
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
    }
     </style>
</html> 
<form class="box" action="index.php" method="post"> 
    <h1>ITEMS</h1>
    <table style="width:100%">
    <?php

$servername="localhost";
$username="root";
$password="";
$dbname = "rsmgsys";

$con= mysqli_connect($servername,$username,$password,$dbname);
$query="select * from `items`";
$record=mysqli_query($con,$query);
echo "<table>
    <tr>
    <th>Item_id</th>
    <th>Item_name</th>
    <th>Price</th>
    <th>Delete</th>
    <th>Edit</th>
    </tr>";
    
    while($post=$record->fetch_assoc())
    {
        ?>
        <tr>
        <td><?php echo $post['Item_id']; ?></td>
        <td><?php echo $post['Item_name']; ?></td>
        <td><?php echo $post['Price']; ?></td>
        <td><a href="edititems.php?edit=<?php echo $post['Item_id']; ?>">edit</a></td>
        <td><a href="deleteitems.php?delete=<?php echo $post['Item_id']; ?>">delete</a></td>
        <tr>
    
    <?php } ?>
    
    </table>
       
    <button type="submit" name="Insert" formaction="insertitems.php" >Insert</button> 
      <input type="submit" formaction= interface1.php name="" value="Back">
     

</form>


