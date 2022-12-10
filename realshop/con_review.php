<div class="container bg-secondary mt-5">
  <?php
    $sql = "SELECT * FROM tbl_review";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
  ?>
  <div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
      <?php echo $row['review_info'] ?>
    </div>
  </div>
</div>
