<?php
  include "connect.php";

  unset($_SESSION['sess_id']);
  unset($_SESSION['sess_name']);
  unset($_SESSION['sess_status']);
  session_start();

  echo "
  <script type='text/javascript'>
    alert('ออกจากระบบ');
    location='index.php';
  </script>
  ";
?>
