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
              <h3>Edit</h3>
            </div>
            <div class="card-body">
              <?php
                include "connect.php";
                $id = $_GET['product_id'];

                $sql = "SELECT * FROM tbl_product WHERE product_id='$id'";
                $result = $con->query($sql);
                $row = $result->fetch_assoc();
              ?>
              <form action="edit_script.php?id=<?php echo $row['product_id']; ?>" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>ID :</label>
                    <input class="form-control" name="id_edit" value="<?php echo $row['product_id']; ?>" disabled>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Name :</label>
                    <input class="form-control" type="text" name="name_edit" value="<?php echo $row['product_name']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Genre :</label>
                    <input class="form-control" type="text" name="genre_edit" value="<?php echo $row['product_genre']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Info :</label>
                    <input class="form-control" type="text" name="info_edit" value="<?php echo $row['product_info']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Url :</label>
                    <input class="form-control" type="text" name="url_edit" value="<?php echo $row['product_url']; ?>" required>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit">save</button>
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
