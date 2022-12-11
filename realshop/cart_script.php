<?php
  include "connect.php";

  $id = $_GET['product_id'];
  $genre = $_GET['product_genre'];
  $user_id = $_SESSION['sess_id'];

  $sql = "SELECT * FROM tbl_bill WHERE product_id='$id' AND user_id='$user_id'";
  $result = $con->query($sql);
  $row = $result->fetch_assoc();

  $newamount = $row['amount']+1;

  if ($result->num_rows>0) {
    $sql = "UPDATE `tbl_bill` SET `amount`='$newamount' WHERE product_id='$id' AND user_id='$user_id'";
    $result = $con->query($sql);

    echo "
    <script type='text/javascript'>
      alert('เพิ่มลงตะกร้าแล้ว');
      history.go(-1);
    </script>
    ";
  }else {
    $sql = "INSERT INTO `tbl_bill`(`user_id`, `product_id`, `amount`) VALUES ('$user_id','$id','1')";
    $result = $con->query($sql);

    echo "
    <script type='text/javascript'>
      alert('ลงตะกร้าแล้ว');
      history.go(-1);
    </script>
    ";
  }
?>
