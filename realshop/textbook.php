<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Shop</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>
    <hr>
      <h3 class="text-center">textbook</h3>
    <hr>
    <div class="container mt-3">
      <div align="right">
        <a href="insert.php?product_id=<?php echo $row['product_id'] ?>">
          <button class="btn btn-outline-success" type="button">insert</button>
        </a>
      </div>
      <div class="row">
        <?php
          include "connect.php";

          $sql = "SELECT * FROM tbl_product WHERE product_genre='textbook'";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-3 mt-5">
          <div class="card">
            <div class="card-header">
              <img class="d-block w-100"  style="height:16rem;" src="<?php echo $row['product_url']; ?>">
            </div>
            <div class="card-body">
              <p>ชื่อ: <?php echo $row['product_name']; ?></p>
              <p>ประเภท: <?php echo $row['product_genre']; ?></p>
              <p>ข้อมูล: <?php echo $row['product_info']; ?></p>
            </div>
            <div class="text-center mb-3">
              <?php
                include "connect.php";
                if($_SESSION['sess_status']==2){
              ?>
              <a href="edit.php?product_id=<?php echo $row['product_id'] ?>">
                <button class="btn btn-info" type="button">edit</button>
              </a>
              <a href="del.php?product_id=<?php echo $row['product_id'] ?>">
                <button class="btn btn-danger" type="button">delete</button>
              </a>
            <?php }else{ ?>
              <?php if($_SESSION['sess_status']==1){ ?>
                <a href="cart_script.php?product_id=<?php echo $row['product_id'] ?>,product_genre=<?php echo $row['product_genre']; ?>">
                  <button class="btn btn-success" type="button">เพิ่มลงตะกร้า</button>
                </a>
                <a href="review.php?product_id=<?php echo $row['product_id'] ?>">
                  <button class="btn btn-warning rounded-circle" type="button">รีวิว</button>
                </a>
              <?php }else{ ?>
                <a href="cart_script.php?product_id=<?php echo $row['product_id'] ?>,product_genre=<?php echo $row['product_genre']; ?>">
                  <button class="btn btn-success" type="button" disabled>เพิ่มลงตะกร้า</button>
                </a>
                <a href="review.php?product_id=<?php echo $row['product_id'] ?>">
                  <button class="btn btn-warning rounded-circle" type="button" disabled>รีวิว</button>
                </a>
                <p class="text-danger">สมัครสมาชิกก่อน</p>
              <?php } ?>
            <?php } ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
