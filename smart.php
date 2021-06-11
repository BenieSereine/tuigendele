<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
     ?>
     <!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
     <div style="background-color: teal; text-align: center;border-radius: 5px;height:50px;margin-right: 100px; margin-left: 100px;">
<h1 >Welcome to TUIGENDELE</h1>
</div>
<div style="background-color:lightgreen;" class="title"> 
    <h3 style="padding-top:10px;padding-left: 10px;">You are logged in as: <?php echo $_SESSION['username']; ?><a style="float: right;text-decoration: none;padding-right: 10px" href="logout.php">Log out</a> </h3>
</div>
<h1 style="text-align:center;">SMARTPHONE</h1>
<div class="container" style="padding-top: 20px;" >
<a href="qrcode.php" class="box" style="background-color: orange;border-radius: 5px;">
  <img style="height:50px;width:70px;"src="images/mtn-mobile-money-logo.png">
  <p>MTN MOBILE MONEY</p>
</a>
<a href="qrcode.php" class="box" style="background-color: lightblue;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/tigo.jpg">
  <p>AIRTEL MONEY</p>
</a>
<a href="amount.php" class="box" style="background-color: lightgreen;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/money.jpg">
  <p>CASH</p>
</a>
<a href="qrcode.php" class="box" style="background-color: orange;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/bk.png">
  <p>BK</p>
</a>
<a href="qrcode.php" class="box" style="background-color: lightblue;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/equity.png">
  <p>EQUITY BANK</p>
</a>
<a href="qrcode.php" class="box" style="background-color: lightgreen;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/cogebank.png">
  <p>COGEBANK</p>
</a>
<a href="qrcode.php" class="box" style="background-color: orange;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/bpr.jpg">
  <p>BPR</p>
</a>
<a href="qrcode.php" class="box" style="background-color: lightblue;border-radius: 5px;">
<img style="height:50px;width:70px;"src="images/ecobank.png">
  <p>ECOBANK</p>
</a>
</div>
<footer>
<div class="copyright" style="border-radius: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center wow fadeInUp" style="font-size: 14px;color: white;text-align:center">Coded by <a href="index.html" style="color: white;">ALGORITHM Inc</a></div>
                        <a href="#" class="scrollToTop"><i class="fa fa-arrow-circle-o-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php 
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?>
