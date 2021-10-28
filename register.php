<?php
session_start();
//$_SESSION = [];
include('filters/guest_filter.php');
require('conf/database.php');
require('includes/functions.php');
require('includes/constants.php');


//Si le formulaire a été soumis
 if (isset($_POST['register'])) {

// Si tous les champs ont été remplis
    if (not_empty(['email', 'password', 'password_confirm', 'name', 'prenom', 'birthday'])) {

        $errors = []; //Tableau contenant l'ensemble des erreus

        extract($_POST);

        // verfivier la longueur du pseudo
        //if (mb_strlen($pseudo) < 3) {

        //  $errors[] = "Pseudo trop court (Minimum 3 caracteres)";
      //  }
      if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $errors[] = "Adresse email invalide";
      }
      if (mb_strlen($password) < 6) {

        $errors[] = "Mot de passe trop court (Minimum 6 caracteres)";
     }else {
       if ($password != $password_confirm) {

         $errors[] = "Les deux mots de passe ne concordent pas!";
       }
     }

     /*
     // verifier si le pseudo est déjà utilisé
      if (is_already_in_use ('pseudo', $pseudo, 'users')) {

        $errors[] = "Pseudo déjà utilisé";
      }*/
      if (is_already_in_use ('email', $email, 'users')) {

        $errors[] = "Adresse E-mail  déjà utilisé";
        }
        if (count($errors) == 0) {
          //ENvois d'un mail d'activation
          $secretKey = "6LdtmpgUAAAAALC6YXNTD3694iomm0BHaXu4sn6H";
          $responseKey = $_POST['g-recaptcha-response'];
          $userIP = $_SERVER['REMOTE_ADDR'];

          $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
          $response = file_get_contents($url);
          $response = json_decode($response);
          if ($response->success) {
            $password = sha1($password);

            $q = $db->prepare('INSERT INTO users(email, password, name, prenom, birthday)
                              VALUES(:email, :password, :name, :prenom, :birthday)');
            $q->execute([
              'email' => $email,
              'password' => $password,
              'name' => $name,
              'prenom' => $prenom,
              'birthday' => $birthday
            ]);
            set_flash("Votre Compte a été créé avec success", 'isa_success');
          }else {
                    $errors[] = "Veuillez cocher la case de vérification!";
                    save_input_data();
                }

        }else {
          save_input_data();
        }



}else {
  $errors[] = "Veuillez SVP remplir tous les champs! 'isa_error'";
  save_input_data();
}

}else {
  clear_input_data();
}

?>

<?php include('views/register.view.php'); ?>
