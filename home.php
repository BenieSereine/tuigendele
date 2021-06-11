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
     <div style="background-color: teal; text-align: center;border-radius: 5px;margin-right: 100px; margin-left: 100px;">
<h1 >Welcome to TUIGENDELE</h1>
</div>
<div style="background-color:lightgreen;" class="title"> 
    <h3 style="padding-top:10px;padding-left: 10px;">You are logged in as: <?php echo $_SESSION['username']; ?><a style="float: right;text-decoration: none;padding-right: 10px" href="logout.php">Log out</a> </h3>
</div>
<div class="container" style="padding-top: 50px;" >
<a href="smart.php" class="box" style="background-color: orange;border-radius: 5px;">
SMARTPHONE
</a>
<a href="karasharamye.php" class="box" style="background-color: lightblue;border-radius: 5px;">
  KARASHARAMYE
</a>
<a href="amount.php" class="box" style="background-color: lightgreen;border-radius: 5px;">
TYPE AMOUNT
</a>
<a href="php/index.php" class="box" style="background-color: lightblue;border-radius: 5px;">
ALL TRANSACTIONS
</a>
</div>
<footer>
<div class="copyright" style="margin-top: 220px;border-radius: 5px;">
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
