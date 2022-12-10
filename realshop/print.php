<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Shop</title>
  </head>
  <body onload="window.print()">
    <div class="container">
      <?php
      include "connect.php";

      $sql = "SELECT * FROM tbl_user WHERE user_id='$_SESSION[sess_id]'";
      $result = $con->query($sql);
      $row = $result->fetch_assoc();
      ?>
      <h5>User ID#<?php echo $row['user_id']; ?></h5>
      <p>Name : <?php echo $row['name'] ?></p>
      <table class="table table-responsive-lg">
        <thead>
          <th>Name</th>
          <th>Genre</th>
          <th>Amount</th>
        </thead>
        <?php
          include "connect.php";
          $id = $_GET['product_id'];

          $sql = "SELECT * FROM tbl_bill WHERE user_id='$_SESSION[sess_id]'";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
            $sql2 = "SELECT * FROM tbl_product WHERE product_id='$row[product_id]'";
            $result2 = $con->query($sql2);
            while ($row2 = $result2->fetch_assoc()) {
        ?>
        <tbody>
          <tr>
            <td><?php echo $row2['product_name']; ?></td>
            <td><?php echo $row2['product_genre']; ?></td>
            <td><?php echo $row['amount']; ?></td>
          </tr>
        </tbody>
        <?php }} ?>
      </table>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
