<?php
  include "connect.php";

  $id = $_GET['id'];

  $sql = "DELETE FROM `tbl_review` WHERE `tbl_review`.`review_id` = '$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    alert('ลบรีวิว');
    history.go(-1);
  </script>
  ";
?>
