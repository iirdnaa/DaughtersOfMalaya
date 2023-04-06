<section id="header">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
<link rel="stylesheet" href="style.css"> 
        <a href="home.php"><img src="img/logo.png" width="167" height="115" class="logo" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="home.php">Home</a></li>
                <li><a class="active" href="products.php">Shops</a></li>
                <li><a href="admin.php">Add Products</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
                <li><a href="cart.php"><i class='bx bxs-cart'></i><span><?php echo $row_count; ?></span></a></li>
                <li><a href="login.php"><i class='bx bxs-user'></i></a></li>

      
            </ul>
        </div>
    </section>
