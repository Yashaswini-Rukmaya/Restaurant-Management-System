<?php 

session_start();

?>
<html lang="en" dir="Itr"> 
    <head> 
        <meta charset="utf-8"> 
        
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
    <h1>FEEDBACK</h1>
    <table style="width:100%">
    <?php

$servername="localhost";
$username="root";
$password="";
$dbname = "rsmgsys";

$con=mysqli_connect($servername,$username,$password,$dbname);
$query="select * from `feedback`";
$record= mysqli_query($con,$query);
    echo "<table>
    <tr>
    <th>Feedback_id</th>
    <th>Food_quality</th>
    <th>Cleanness</th>
    <th>Service</th>
    <th>Customer_id</th>
    </tr>";

  while($post=$record->fetch_assoc())
    {
        ?>
        <tr>
        <td><?php echo $post['Fdbk_id']; ?></td>
        <td><?php echo $post['Food_quality']; ?></td>
        <td><?php echo $post['Cleanness']; ?></td>
        <td><?php echo $post['Service']; ?></td>
        <td><?php echo $post['Cust_id']; ?></td>
        <tr>
    
    <?php } ?>
    </table>
       
    <button type="submit" name="Insert" formaction="insertfeedback.php">Insert</button>
      <input type="submit" formaction= loginpage.php name="" value="Back"> 
     
</form>
