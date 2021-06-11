<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
     ?>
     <!DOCTYPE html>
<html>
<head>
	<title>karasharamye</title>
	<link rel="stylesheet" type="text/css" href="index.css">
    
</head>
<body>
     <div style="background-color: teal; text-align: center;border-radius: 5px;margin-right: 100px; margin-left: 100px;">
<h1 >Welcome to TUIGENDELE</h1>
</div>
<div style="background-color:lightgreen;" class="title"> 
    <h3 style="padding-top:10px;padding-left: 10px;">You are logged in as: <?php echo $_SESSION['username']; ?><a style="float: right;text-decoration: none;padding-right: 10px" href="logout.php">Log out</a> </h3>
</div>
<div style="padding-top: 50px">
<h1 style="text-align:center;">KARASHARAMYE</h1>
<form action="php/karashara.php">
<label style="padding-left:30px;">User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label style="padding-left:30px;">Tin Number</label>
     	<input type="number" name="number" placeholder="Tin number"><br>
        <label style="padding-left:30px;">Phone Number</label>
     	<input type="number" name="phonenumber" placeholder="Phone number"><br>
         <label style="padding-left:30px;">Amount</label>
     	<input type="number" name="amount" placeholder="Amount"><br>
         <button type="submit">Save</button>
         <form>
</div>
<footer>
<div class="copyright" style="margin-top: 60px;border-radius: 5px;">
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
