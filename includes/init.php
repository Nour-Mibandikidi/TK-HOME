<?php
 if (!empty($_COOKIE['name']) && !empty($_COOKIE['user_id'])) {
   $_SESSION['name']= $_COOKIE['name'];
   $_SESSION['user_id']= $_COOKIE['user_id'];
   $_SESSION['imagee'] = $_COOKIE['imagee'];
 }
 ?>
