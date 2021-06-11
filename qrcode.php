<?php

if (isset($_POST["submit"])) {
    $var=';';
    $data1 = "Mount meru";
    $data2 = "123456789";
    $data3 = "0780464007";
    $token = bin2hex(random_bytes(16));
    $data4 = $_POST["choice"];
    $data5 = $_POST["amount"];

    $data = $data1.$var.$data2.$var.$data3.$var.$data4.$var.$data5.$var.$token;
    if ($_POST["width"] != "") {
        $width = $_POST["width"];
    } else {
        $width = "250";
    }
    if ($_POST["height"] != "") {
        $height = $_POST["height"];
    } else {
        $height = "250";
    }

    $url = "https://chart.googleapis.com/chart?cht=qr&chs={$width}x{$height}&chl={$data}";
    $output["img"] = $url;
}

?>
<?php  
 //login_success.php  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>QR Code Generator</title>
</head>
<body class="bg-light">
<div style="background-color: teal; text-align: center;border-radius: 5px;margin-right: 100px; margin-left: 100px;">
<h1 >Welcome to TUIGENDELE</h1>
</div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-5 col-12 shadow bg-white border mx-auto p-4">
                <h2 class="text-center fw-bold mb-3">QR Code Generator</h2>
                <?php if (isset($output)) { ?>
                <div class="mb-3">
                    <img src="<?php echo $output["img"] ?>" alt="QR Code" width="100%" height="100%">
                </div>
                <?php } ?>
                <form action="" method="post">
                <div class="form-group mb-3">
                   <select name="choice" class="form-control">
                        <option value="Mazutu">Mazutu</option>
                        <option value="Petrole" selected>Petrole</option>
                        <option value="Gas">Gas</option>
                        <option value="Esanze">Esanze</option>
                   </select>
                </div>
                    <div class="form-group mb-3">
                        <label for="data" class="form-label">Amount</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount" required>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="width" class="form-label">Width</label>
                            <input type="number" class="form-control" id="width" name="width" placeholder="Ex: 250px">
                        </div>
                        <div class="col-6">
                            <label for="height" class="form-label">Height</label>
                            <input type="number" class="form-control" id="height" name="height" placeholder="Ex: 250px">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="submit" class="btn btn-primary" style="background-color: teal;">Generate QR Code!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
 }  
 else  
 {  
      header("location:index.php");  
 }  
 ?>