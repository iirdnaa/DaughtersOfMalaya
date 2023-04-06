<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
  </head>
  <style>
body{  
    margin: 0;  
    padding: 0;  
    background-image: url("");  
    background-size: 100% 100%;
    font-family: 'Lobster', cursive;  
} 

.registration{  
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

#name{  
    width: 350px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}

#username{  
    width: 350px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}

#email{  
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

#confirmpassword{  
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
    </section>
    <br><br><br>
    <form class="registration" action="" method="post" autocomplete="off">
        <h4>Register</h4>
      <p>Please fill in this form to create an account</p><br>
      <b>Name : </b>
      <input type="text" name="name" id = "name" required value=""> <br><br>
      <b>Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br><br>
      <b">Email : </b>
      <input type="email" name="email" id = "email" required value=""> <br><br>
      <b>Password : </b>
      <input type="password" name="password" id = "password" required value=""> <br><br>
      <b>Confirm Password : </b>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br><br>
      <button type="submit" id="submit" name="submit">Register</button>
    <br>
    <p>Already have an account?<a href="login.php" style="background-color: whitesmoke; color:blueviolet">Login in</a></p>
</form>
</html>