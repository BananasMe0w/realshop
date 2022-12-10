<!DOCTYPE html>
<html lang="th" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <meta charset="utf-8">
    <title>Shop</title>
  </head>
  <body>
    <?php include "navbar.php"; ?>

    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3>Log in</h3>
            </div>
            <div class="card-body">
              <form action="login_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>อีเมล :</label>
                    <input class="form-control" type="email" name="email_login" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>รหัสผ่าน :</label>
                    <input class="form-control" type="password" name="password_login" required>
                  </div>
                  <div class="col-12 mt-4">
                    <button class="btn btn-success" type="submit">submit</button>
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
