<?php
  if (isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
    header('Location: admin_section/dashboard.php');
  }
 ?>
