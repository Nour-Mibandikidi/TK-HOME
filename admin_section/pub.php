<?php
session_start();
//$_SESSION = [];
require('../conf/database.php');
require('../includes/functions.php');
require('../includes/init.php');
include('../filters/auth_filter.php');
require('../includes/constants.php');

if(isset($_POST['submit']))
  {
$intitule=$_POST['intitule'];
$car1=$_POST['car1'];
$car2=$_POST['car2'];
$car3=$_POST['car3'];
$car4=$_POST['car4'];
$vimage2=$_FILES["img1"]["name"];
$id=$_SESSION['user_id'];
move_uploaded_file($_FILES["img1"]["tmp_name"],"img/pub/".$_FILES["img1"]["name"]);
$q = $db->prepare('INSERT INTO pub (intitule,car1,car2,car3,car4,Vimage2)
                  VALUES(:intitule,:car1,:car2,:car3,:car4,:Vimage2)');
$q->execute(['intitule'=>$intitule,
             'car1'=>$car1,
             'car2'=>$car2,
             'car3'=>$car3,
             'car4'=>$car4,
             'Vimage2'=>$vimage2,
           ]);

}

 include('views/pub.view.php');

  ?>
