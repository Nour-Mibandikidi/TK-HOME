<?php
session_start();
include('filters/guest_filter.php');
require"conf/database.php";
require"includes/functions.php";


if (!empty($_GET['n']) &&
is_already_in_use('name', $_GET['n'], 'users')
 && !empty($_GET['token'])
){
  $name = $_GET['n'];
  $token = $_GET['token'];

  $q = $db->prepare('SELECT id,email, password FROM users WHERE name = ?');
  $q->execute([$name]);

  $data = $q->fetch(PDO::FETCH_OBJ);

  //$token_verif = $token;
  $token_verif = sha1($name.$data->email.$data->password);

 if ($token == $token_verif) {
    $q = $db->prepare("UPDATE users SET active = '1' WHERE name = ?");
    $q->execute([$name]);

    set_flash('Votre compte a bien été activé', 'isa_success');
    redirect('login.php');
  }else {
    set_flash("Le lien d'activation de votre compte n'est plus valide", 'isa_error');
    redirect('register.php');
  }
}else {
  redirect('register.php');
}
