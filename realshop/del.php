<?php
  include "connect.php";

  $id = $_GET['product_id'];

  $sql = "DELETE FROM `tbl_product` WHERE `tbl_product`.`product_id`='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
