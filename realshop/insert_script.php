<?php
  include "connect.php";

  $id = $_GET['id'];

  $name = $_POST['name_insert'];
  $genre = $_POST['genre_insert'];
  $info = $_POST['info_insert'];
  $url = $_POST['url_insert'];

  $sql = "INSERT INTO `tbl_product`(`product_name`, `product_genre`, `product_info`, `product_url`) VALUES ('$name','$genre','$info','$url')";
  $result = $con->query($sql);

  echo "
  <script type='text/javascript'>
    location='index.php';
  </script>
  ";
?>
