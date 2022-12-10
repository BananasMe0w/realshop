<?php
  include "connect.php";

  $id = $_GET['id'];

  $sql = "DELETE FROM `tbl_bill` WHERE bill_id='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='cart.php';
  </script>
  ";
?>
