<div class="container bg-secondary mt-5">
  <div class="row">
    <div class="col-12">
      <h4 class="text-light">Review Product</h4>
    </div>
  <?php
    $sql = "SELECT * FROM tbl_review";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
      $sql2 = "SELECT * FROM tbl_product WHERE product_id='$row[product_id]'";
      $result2 = $con->query($sql2);
      while ($row2 = $result2->fetch_assoc()) {
  ?>
    <div align="center" class="col-4 mt-4">
      <img class="d-block w-50" src="<?php echo $row2['product_url']; ?>">
      <p>รีวิว : <?php echo $row['review_info']; ?></p>
    </div>
  <?php }} ?>
  </div>
</div>
