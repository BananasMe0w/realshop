<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Shop</title>
  </head>
  <body>
    <?php include "checknav.php"; ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3>Review</h3>
            </div>
            <div class="card-body">
              <?php
                include "connect.php";

                $id = $_GET['id'];
                $sql = "SELECT * FROM tbl_product WHERE product_id='$id'";
                $result = $con->query($sql);
              ?>
              <form action="review_script.php?id=<?php echo $row['product_id']; ?>" method="post">
                <div class="row">
                  <div class="col-12">
                    <select class="form-control" name="review">
                      <option>ไม่พอใจเลย</option>
                      <option>ค่อนข่างไม่พอใจ</option>
                      <option>เฉยๆ</option>
                      <option>ค่อนข่างพอใจ</option>
                      <option>พอใจมาก</option>
                    </select>
                  </div>
                  <div class="col-12 mt-4">
                    <label>comment :</label>
                    <textarea class="form-control" name="comment" rows="8" cols="80"> write what you think...</textarea>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit">review</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery.js" charset="utf-8"></script>
    <script src="js/bootstrap.js" charset="utf-8"></script>
  </body>
</html>
