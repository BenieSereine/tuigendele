<?php
require '../db_conn.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM karasharamye WHERE id=:id';
$statement = $conn->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['name'])  && isset($_POST['tin_number']) && isset($_POST['phone_number']) && isset($_POST['status'])) {
  $name = $_POST['name'];
  $tin_number = $_POST['tin_number'];
  $phonenumber = $_POST['phone_number'];
  $status = $_POST['status'];
  $sql = 'UPDATE karasharamye SET name=:name, tin_number=:tin_number, phone_number=:phone_number, status=:status WHERE id=:id';
  $statement = $conn->prepare($sql);
  if ($statement->execute([':name' => $name, ':tin_number' => $tin_number,':phone_number' => $phonenumber, ':status' => $status, ':id' => $id])) {
    header("Location: index.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Transaction</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?= $person->name; ?>" type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="tin_number">Tin Number</label>
          <input type="tin_number" value="<?= $person->tin_number; ?>" name="tin_number" id="tin_number" class="form-control">
        </div>
        <div class="form-group">
          <label for="phone_number">Phone Number</label>
          <input type="phone_number" value="<?= $person->phone_number; ?>" name="phone_number" id="phone_number" class="form-control">
        </div>
        <div class="form-group">
          <label for="status">Status</label>
          <input type="status" value="<?= $person->status; ?>" name="status" id="status" class="form-control">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update Transaction</button>
        </div>
      </form>
    </div>
  </div>
</div>
