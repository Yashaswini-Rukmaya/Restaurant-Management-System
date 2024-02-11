<?php 

session_start();

?>
<body> 

    <link rel="stylesheet" href="loginpage1.css"> 
    <form class= "box"  method="post"> 
	<style>
    button[type="submit"]{
    border: 0; 
    background: purple; 
    margin: 20px auto;
    text-align: center; 
    display: block;
    position: relative; 
    top: 80%;
    left: 0%; 
    border: 2px solid purple;
    padding: 14px 40px; 
    width: 400px;
    outline: none;
    color: black;
    transition: 0.25s;
    cursor: pointer;
 }
  
</style>
    <h1>ADMIN_LOGIN</h1> 
           <b>Username</b> <br>
           <input type="text" placeholder="Enter Username" name="Username" > 
           <b>Password</b> <br> 
           <input type="password" placeholder="Enter Password" name="Password" > 
           <button type="submit" name="submit1" class="buttn">Login</button> 
           <button type="submit" name="submit2" formaction= loginpage.php class="buttn">Back</button>
     </form> 
</body> 
<?php 

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "rsmgsys";

//make connection
$con =  mysqli_connect(
	"localhost","root","","rsmgsys");
//echo "hi";
if ($con->connect_error){
	die("connection error");
}
else{
	
if(isset($_POST['submit1'])) {
	
     $user_name = $_POST['Username'];
     $user_password = $_POST['Password'];
	 
	 //$encrypt = md5($user_password);
	 
	 $admin_login_query = "SELECT * FROM admin_login WHERE Username='$user_name' AND Password='$user_password'";
	 //echo "$admin_login_query";
	  $run = mysqli_query($con,$admin_login_query);
	  
	  if(mysqli_num_rows($run)>0) { 
		   
		   $_SESSION['user_name'] = $username;
		   
		   echo "<script>window.open('interface1.php','_self')</script>";
	          }
	  else
  		  {
				
		  echo "<script>alert('Username or password is wrong')</script>";
	       }  
   }
}
	  ?>
        
