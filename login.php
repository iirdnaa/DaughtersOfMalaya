<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
  </head>
<style>
body{  
    margin: 0;  
    padding: 0;  
    background-image: url("");  
    background-size: 100% 100%;
    font-family: 'Lobster', cursive;  
} 

.login{  
        width: 525px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: whitesmoke;  
        border-radius: 15px ;       
} 

header .li .a{
  background-color: transparent;
}


label{  
    color: whitesmoke;  
    font-size: 17px;  
}

#usernameemail{  
    width: 350px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}

#password{  
    width: 350px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;     
}  

#submit{  
    width: 350px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color:black; 
    background-color: white; 
} 


b{  
    float: left;  
    background-color: whitesmoke;
    color: #03045e;  
}

h4{
    font-size: 20px;
    color: #03045e;
    text-align: center;
}

p{
    font-size: 15px;
    color: #03045e;
    text-align: center;
}

</style>
  <body>
  <section id="header">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
<link rel="stylesheet" href="style.css"> 
        <a href="home.php"><img src="img/logo.png" width="167" height="115" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a href="products.php">Shops</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
                <li><a href="cart.php"><i class='bx bxs-cart'></i><span><?php echo $row_count; ?></span></a></li>
                <li><a class="active" href="login.php"><i class='bx bxs-user'></i></a></li>

      
            </ul>
        </div>
    </section><br><br>
    <form class="login" action="" method="post" autocomplete="off">
    <h4>Log In</h4>
    <p>New Customer?<a href="registration.php" style="background-color: whitesmoke; color:blueviolet">Register here</a></p>
      <b>Username or Email : </b><br>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br><br>
      <b>Password : </b><br>
      <input type="password" name="password" id = "password" required value=""> <br><br>
      <button type="submit" id="submit" name="submit">Login</button>
    </form>
  </body>
</html>