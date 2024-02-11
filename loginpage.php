<?php 

session_start();

?>

<body> 
    <link rel="stylesheet" href="loginpage1.css"> 
    <form class= "box" method="post"> 
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
    width: 200px;
    outline: none;
    color: black;
    transition: 0.25s;
    cursor: pointer;
 }
  
</style>
    <h1><u>LOGIN_PAGE</u></h1>
       <button type="submit" formaction= loginpage1.php >ADMIN LOGIN</button> <br>
       <button type="submit" formaction= loginpage2.php class="submit">USER LOGIN</button> 
</body>        
    