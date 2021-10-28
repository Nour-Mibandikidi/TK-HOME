<?php
session_start();
//$_SESSION = [];
require('../conf/database.php');
require('../includes/functions.php');
require('../includes/init.php');
include('../filters/auth_filter.php');
require('../includes/constants.php');

if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from ajouter  WHERE id_ajout=:id_ajout";
$query = $db->prepare($sql);
$query -> bindParam(':id_ajout',$id, PDO::PARAM_STR);
$query -> execute();
set_flash("Bien supprimé", 'isa_success');

}
header('location:gerer.php');
exit();