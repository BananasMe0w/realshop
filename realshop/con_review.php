<h4 class="text-center"><b>Review Product</b> </h4>
<hr>
<div class="container bg-secondary mt-5">
  <div class="row">
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
        <p class="text-light mt-3">ชื่อสินค้า : <?php echo $row2['product_name']; ?></p>
        <p class="text-warning mt-n3"><?php echo $row['review_score']; ?></p>
        <p class="text-light mt-n3">รีวิว : <?php echo $row['review_info']; ?></p>
        <?php
          if($_SESSION['sess_id']==$row['user_id']){
        ?>
          <a href="delete_review.php?id=<?php echo $row['review_id']; ?>"><button class="btn btn-danger" type="button">delete</button></a>
        <?php } ?>
        <hr>
      </div>
    <?php }} ?>
  </div>
</div>
