<?php
  include "connect.php";

  $id = $_GET['id'];

  $name = $_POST['name_edit'];
  $genre = $_POST['genre_edit'];
  $info = $_POST['info_edit'];
  $url = $_POST['url_edit'];

  $sql = "UPDATE `tbl_product` SET `product_name`='$name',`product_genre`='$genre',`product_info`='$info',`product_url`='$url' WHERE product_id='$id'";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
