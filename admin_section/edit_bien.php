<?php
session_start();
//$_SESSION = [];
require('../conf/database.php');
require('../includes/functions.php');
require('../includes/init.php');
include('../filters/auth_filter.php');
require('../includes/constants.php');

if (isset($_POST['update'])) {

// Si tous les champs ont été remplis
  $errors = [];

   if (not_empty(['titre', 'id_cat', 'ville', 'adresse', 'pays', 'decrire', 'numero', 'device', 'prix'])) {
     $titre=$_POST['titre'];
     $id_cat=$_POST['id_cat'];
     $cle=$_POST['cle'];
     $adresse=$_POST['adresse'];
     $batiment=$_POST['batiment'];
     $bp=$_POST['bp'];
     $pays=$_POST['pays'];
     $numero=$_POST['numero'];
     $email=$_POST['email'];
     $ville=$_POST['ville'];
     $device=$_POST['device'];
     $prix=$_POST['prix'];
     $decrire=$_POST['decrire'];
     $caracteristique1	=$_POST['caracteristique1'];
     $caracteristique2 =$_POST['caracteristique2'];
     $caracteristique3 =$_POST['caracteristique3'];
     $caracteristique4 =$_POST['caracteristique4'];
     $caracteristique5=$_POST['caracteristique5'];
     $caracteristique6 =$_POST['caracteristique6'];
     $lundi1 =$_POST['lundi1'];
     $lundi2 =$_POST['lundi2'];
     $mardi1 =$_POST['mardi1'];
     $mardi2 =$_POST['mardi2'];
     $mercredi1 =$_POST['mercredi1'];
     $mercredi2 =$_POST['mercredi2'];
     $jeudi1 =$_POST['jeudi1'];
     $jeudi2 =$_POST['jeudi2'];
     $vendredi1 =$_POST['vendredi1'];
     $vendredi2 =$_POST['vendredi2'];
     $samedi1 =$_POST['samedi1'];
     $samedi2 =$_POST['samedi2'];
     $dimanche1 =$_POST['dimanche1'];
     $dimanche2 =$_POST['dimanche2'];
     $articlename =$_POST['articlename'];
     $articledes =$_POST['articledes'];
     $articlepri =$_POST['articlepri'];
     $id=$_SESSION['user_id'];
     $id_ajout=$_GET['id_ajout'];


     $q = $db->prepare('UPDATE ajouter
                        SET titre= :titre,id_cat=:id_cat,cle=:cle,adresse=:adresse,
                        batiment=:batiment,bp=:bp,pays=:pays,numero=:numero,email=:email,ville=:ville,device=:device,prix=:prix,decrire=:decrire,caracteristique1=:caracteristique1,caracteristique2=:caracteristique2,caractéristique3=:caracteristique3,caracteristique4=:caracteristique4,caracteristique5=:caracteristique5,caracteristique6=:caracteristique6,lundi1=:lundi1,lundi2=:lundi2,mardi1=:mardi1,mardi2=:mardi2,mercredi1=:mercredi1,mercredi2=:mercredi2,jeudi1=:jeudi1,jeudi2=:jeudi2,
                        vendredi1=:vendredi1,vendredi2=:vendredi2,samedi1=:samedi1,samedi2=:samedi2,dimanche1=:dimanche1,dimanche2=:dimanche2,articlename=:articlename,articledes=:articledes,articlepri=:articlepri,id=:id
                        WHERE id_ajout = :id_ajout');
                        $q->execute(['titre' => $titre,
                                     'id_cat'=>$id_cat,
                                     'cle'=>$cle,
                                     'adresse'=>$adresse,
                                     'batiment'=>$batiment,
                                     'bp'=>$bp,
                                     'pays'=>$pays,
                                     'numero'=>$numero,
                                     'email'=>$email,
                                     'ville'=>$ville,
                                     'device'=>$device,
                                     'prix'=>$prix,
                                     'decrire'=>$decrire,
                                     'caracteristique1'=>$caracteristique1,
                                     'caracteristique2'=>$caracteristique2,
                                     'caracteristique3'=>$caracteristique3,
                                     'caracteristique4'=>$caracteristique4,
                                     'caracteristique5'=>$caracteristique5,
                                     'caracteristique6'=>$caracteristique6,
                                     'lundi1'=>$lundi1,
                                     'lundi2'=>$lundi2,
                                     'mardi1'=>$mardi1,
                                     'mardi2'=>$mardi2,
                                     'mercredi1'=>$mercredi1,
                                     'mercredi2'=>$mercredi2,
                                     'jeudi1'=>$jeudi1,
                                     'jeudi2'=>$jeudi2,
                                     'vendredi1'=>$vendredi1,
                                     'vendredi2'=>$vendredi2,
                                     'samedi1'=>$samedi1,
                                     'samedi2'=>$samedi2,
                                     'dimanche1'=>$dimanche1,
                                     'dimanche2'=>$dimanche2,
                                     'articlename'=>$articlename,
                                     'articledes'=>$articledes,
                                     'articlepri'=>$articlepri,
                                     'id'=>$id,
                                     'id_ajout'=>$id_ajout
                                   ]);
        set_flash("Félicitation votre profil a été mis à jour!", 'isa_info');
  }else {
      save_input_data();
      $errors[] = "Veuillez remplir tous les champs obligatoires";
  }
}else {
  clear_input_data();
}












 include('views/edit_bien.view.php');
