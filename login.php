<?php
session_start();
//$_SESSION = [];
include('filters/guest_filter.php');
require('conf/database.php');
require('includes/functions.php');
require('includes/constants.php');
//Si le formulaire a été soumis
 if (isset($_POST['login'])) {

// Si tous les champs ont été remplis
    if (not_empty(['identifiant', 'password'])) {

      extract($_POST);

        $q = $db->prepare("SELECT id, name, password, email,prenom,role FROM users
           WHERE (name = :identifiant OR email = :identifiant)
           AND active = '1'");

      $q->execute([
        'identifiant' => $identifiant,
        'password' => sha1($password)
      ]);
      $user = $q->fetch(PDO::FETCH_OBJ);

       if ($q->rowCount() > 0) {

        $_SESSION['user_id'] = $user->id;
        $_SESSION['name'] = $user->name;
        $_SESSION['prenom'] = $user->prenom;
        $_SESSION['email'] = $user->email;
        $_SESSION['role'] = $user->role;

        set_flash("Bienvenu dans votre espace personel", 'isa_success');
        redirect_intent_or('admin_section/dashboard.php?id='.$user->id);
      }else {
        set_flash("Vérifiez vos parametres de connexion", 'isa_error');
        save_input_data();
      }
   }
 }else {
   clear_input_data();
 }

 ?>

 <?php include('views/login.view.php'); ?>
