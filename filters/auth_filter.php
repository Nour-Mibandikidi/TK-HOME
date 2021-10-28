<?php
  if (!isset($_SESSION['user_id']) || !isset($_SESSION['name'])) {
  $_SESSION['forwarding_url'] = $_SERVER['REQUEST_URI'];
  $_SESSION['notification']['message'] = 'Vous devez etes connecter pour acceder à cette pages.';
  $_SESSION['notification']['type'] = 'isa_error';
  header('Location: ../login.php');
  }
 ?>
