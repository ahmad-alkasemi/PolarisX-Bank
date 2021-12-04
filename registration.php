<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/mainn.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
</head>
<body>
          <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/logo.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="createuser.php">Create User</a></li>
              <li class="scroll-to-section"><a href="transactionhistory.php">Transaction History</a></li>
              <li class="scroll-to-section"><a href="transfermoney.php">Make a Transaction</a></li>
              <li><div class="main-red-button-hover"><a href="login.php">Login Employee</a></div></li> 
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>

  </header>
  <br><br><br><br><br><br>
<?php
    require('config.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($conn, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($conn, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `employees` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($conn, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3> &nbsp; &nbsp; You are registered successfully.</h3><br/>
                  <p class='link'> &nbsp; &nbsp; &nbsp; &nbsp; Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3> &nbsp; &nbsp; Required fields are missing.</h3><br/>
                  <p class='link'> &nbsp; &nbsp; &nbsp; &nbsp; Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<?php
    }
?>

<div class="login-box">
  <h2>Registration</h2>
  <form class="app-form" method="post">
    <div class="user-box">
      <input class="app-form-control" placeholder="username" type="text" name="username" required>
      <label>Username</label>
    </div>
    <div class="user-box">
      <input class="app-form-control" placeholder="Email Adress" type="text" name="email" required>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input class="app-form-control" placeholder="password" type="password" name="password" required>
      <label>Password</label>
    </div>
    <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="Register" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
            <br>
            <p style="color:white;" class="link">Already have an account? <a href="login.php">Login here</a></p>
  </form>
</div>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br>

<div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>


    <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="assets/images/logo2.png" alt="PolarisX"></a>
            </div>
            <a>info@polarisx.org</a>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>Services</h4>
            <ul>
              <li><a href="createuser.php">Create User</a></li>
              <li><a href="transfermoney.php">Make a Transaction</a></li>
              <li><a href="transactionhistory.php">Transaction History</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Projects</h4>
            <ul>
              <li><a href="https://polarisx.org/">PolarisX</a></li>
              <li><a href="https://bscscan.com/token/0x8e15c0bb0b49bb71c03d64fecda33b8f1ec61d9b">Token</a></li>
              <li><a href="https://medium.com/@PolarisX/lost-star-4ca0fba77baa">Lost Star</a></li>
              <li><a href="https://www.polaris-pos.com/shop/">Online Store</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="subscribe-newsletters footer-item">
            <h4>Subscribe Newsletters</h4>
            <p>Get our latest news and ideas to your inbox</p>
            <form action="subscribe.php" method="post">
              <input type="email" name="subsc_email" placeholder="Your Email">
              <button type="submit" name="subscribe_btn"><i  class="fa fa-paper-plane-o"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright © 2021 PolarisX. All rights reserved. 
            <br>
            Designed by <a rel="nofollow" href="https://ahmadalkasemi.info/" title="Ahmad Alkasemi">Ahmad Alkasemi</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>
