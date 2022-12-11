<?php
  include "connect.php";

  $id = $_GET['id'];
  $comment = $_POST['comment'];
  $star = $_POST['review'];

  $sql = "INSERT INTO `tbl_review`(`user_id`, `product_id`, `review_info`, `review_score`) VALUES ('$_SESSION[sess_id]','$id','$comment','$star')";
  $result = $con->query($sql);

  echo"
  <script type='text/javascript'>
    history.go(-2)
  </script>
  ";
?>
