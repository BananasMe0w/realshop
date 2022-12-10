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
              <h3>Sign up</h3>
            </div>
            <div class="card-body">
              <form action="signup_script.php" method="post">
                <div class="row">
                  <div class="col-12">
                    <label>อีเมล :</label>
                    <input class="form-control" type="email" name="email_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>รหัสผ่าน :</label>
                    <input class="form-control" type="password" name="password_signup" minlenght="8" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>เช็ครหัสผ่าน :</label>
                    <input class="form-control" type="password" name="repassword_signup" minlenght="8" required>
                  </div>
                  <div class="col-12 mt-3">
                    <hr>
                  </div>
                  <div class="col-12">
                    <h5>ข้อมูลส่วนตัว</h5>
                  </div>
                  <div class="col-6 mt-4">
                    <label>ชื่อจริง :</label>
                    <input class="form-control" type="text" name="name_signup" required>
                  </div>
                  <div class="col-6 mt-4">
                    <label>นามสกุล :</label>
                    <input class="form-control" type="text" name="surname_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>ที่อยู่ :</label>
                    <input class="form-control" type="text" name="address_signup" required>
                  </div>
                  <div class="col-12 mt-4">
                    <label>เบอร์โทรศัพท์ :</label>
                    <input class="form-control" type="text" name="tel_signup" required>
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
