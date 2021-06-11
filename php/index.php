<?php
require '../db_conn.php';
$sql = 'SELECT * FROM karasharamye';
$statement = $conn->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>

<div class="container">
  <div class="card mt-5">
    <div class="card-header">
    <!-- <a class="nav-link" style="color:black"href="../home.php">Home <span class="sr-only">(current)</span></a> -->
      <h2>All Transactions</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Tin Number</th>
          <th>Phone Number</th>
          <th>Status</th>
          <th>Amount</th>
          <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->name; ?></td>
            <td><?= $person->tin_number; ?></td>
            <td><?= $person->phone_number; ?></td>
            <td><?= $person->status; ?></td>
            <td><?= $person->amount; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">CONFIRM</a>
              <a onclick="return confirm('Are you sure you want to print invoice?')" class='btn btn-danger'>Print</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
      <a href="../home.php" class="btn btn-info">Back</a>
    </div>
  </div>
</div>
