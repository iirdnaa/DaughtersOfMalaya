<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>   
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
  </head>
<style>
    body{
        padding:0 300px;
        font-family: 'Lobster', cursive;
    }
    .index{  
        width: 500px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: whitesmoke;  
        border-radius: 15px ;       
    } 
    h1{
        font-family: 'Lobster', cursive;
        font-size: 20px;
        text-align: center;
    }
    a{    
    background-color:whitesmoke;
    color: blueviolet; 
    text-align: center; 
    font-family: 'Lobster', cursive;
    }
</style>
  <body><br>
  <form class="index" action="" method="post" autocomplete="off">
    <h1>Welcome <?php echo $row["name"]; ?></h1>
    <a href="logout.php">Logout</a>
    <a href="home.php">Home</a>
    <a href="MyAccount.php">My Account</a>
    <form>
  </body>
</html>