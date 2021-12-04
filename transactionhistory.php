<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/mainn.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
</head>

<body style="background-color : #ffffff;">

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
              <li><div class="main-red-button-hover"><a href="logout.php">Logout</a></div></li> 
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>

  </header>

	<div class="container">
  <br><br><br><br><br><br><br><br>
    <h2 class="text-center pt-4" style="color : black;">Transaction History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php
            session_start();
            if(!isset($_SESSION["username"])) {
            header("Location: login.php");
            exit();
          }
    
            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>

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