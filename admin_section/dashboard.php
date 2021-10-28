<?php
session_start();
//$_SESSION = [];
require('../conf/database.php');
require('../includes/functions.php');
require('../includes/init.php');
include('../filters/auth_filter.php');
require('../includes/constants.php');

  if (!empty($_GET['id'])) {
  //re uperer les infos sur l'utilisar=teur en base de donnée en utilisant son id
    $user = find_user_by_id($_GET['id']);

  /*  var_dump($user);
    die();*/
    if (!$user) {
      redirect('../index.php');
    }

}else {
  redirect('dashboard.php?id='.get_session('user_id'));
}

//
if (isset($_POST['update'])) {

// Si tous les champs ont été remplis
  $errors = [];

   if (not_empty(['name', 'prenom', 'sexe', 'birthday', 'tel', 'email', 'lieu', 'description'])) {

     extract($_POST);


     $q = $db->prepare('UPDATE users
                        SET name = :name, prenom = :prenom, sexe = :sexe, birthday = :birthday,
                        tel = :tel, email = :email, lieu = :lieu, description = :description,
                        ecole = :ecole, emploi = :emploi, postal = :postal, urgence = :urgence
                        WHERE id = :id');

     $q->execute([
       'name' => $name,
       'prenom' => $prenom,
       'sexe' => $sexe,
       'birthday' => $birthday,
       'tel' => $tel,
       'email' => $email,
       'lieu' => $lieu,
       'description' => $description,
       'ecole' => $ecole,
       'emploi' => $emploi,
       'postal' => $postal,
       'urgence' => $urgence,
       'id' => get_session('user_id'),
     ]);
        set_flash("Félicitation votre profil a été mis à jour!", 'isa_info');
  }else {
      save_input_data();
      $errors[] = "Veuillez remplir tous les champs obligatoires";
  }
}else {
  clear_input_data();
}




















include('views/dashboard.view.php');
