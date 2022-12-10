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
              <h3>Insert</h3>
            </div>
            <div class="card-body">
              <form action="insert_script.php?id=<?php echo $row['product_id']; ?>" method="post">
                <div class="row">
                  <div class="col-12 mt-4">
                    <label>Name :</label>
                    <input class="form-control" type="text" name="name_insert" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Genre :</label>
                    <select name="genre_insert" class="form-control">
                      <option>cartoon</option>
                      <option>kids</option>
                      <option>magazine</option>
                      <option>novel</option>
                      <option>textbook</option>
                    </select>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Info :</label>
                    <input class="form-control" type="text" name="info_insert" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>Url :</label>
                    <input class="form-control" type="text" name="url_insert" required>
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
