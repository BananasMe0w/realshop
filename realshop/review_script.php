<?php
  include "connect.php";

  $id = $_GET['id'];
  $comment = $_POST['comment'];

  $sql = "INSERT INTO `tbl_review`(`user_id`, `review_info`) VALUES ('$_SESSION[sess_id]','$comment')";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
