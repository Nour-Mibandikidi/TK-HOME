<?php
session_start();
//$_SESSION = [];
require('../conf/database.php');
require('../includes/functions.php');
require('../includes/init.php');
include('../filters/auth_filter.php');
require('../includes/constants.php');

if(!empty($_FILES)){
$image = $_FILES['file']['name'];
$nomTemp = $_FILES['file']['tmp_name'];
$dossier="img/produit/";
$target_file = $dossier . basename($image);
$id_ajout=0;
$id=$_SESSION['user_id'];

if (move_uploaded_file($nomTemp, $dossier.$image)) {
    $status = 1;
    $q = $db->prepare('INSERT INTO bien (image,id_ajout,id)
                      VALUES(:image,:id_ajout,:id)');
    $q->execute(['image' => $image, 'id_ajout'=>$id_ajout,'id'=>$id]);
}
}

?>

<?php

if(isset($_POST['submit']))
  {
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

$q = $db->prepare('INSERT INTO ajouter (titre,id_cat,cle,adresse,batiment,bp,pays,numero,email,ville,device,prix,decrire,caracteristique1,caracteristique2,caracteristique3,caracteristique4,caracteristique5,caracteristique6,lundi1,lundi2,mardi1,mardi2,mercredi1,mercredi2,jeudi1,jeudi2,vendredi1,vendredi2,samedi1,samedi2,dimanche1,dimanche2,articlename,articledes,articlepri,id)
                  VALUES(:titre,:id_cat,:cle,:adresse,:batiment,:bp,:pays,:numero,:email,:ville,:device,:prix,:decrire,:caracteristique1,:caracteristique2,:caracteristique3,:caracteristique4,:caracteristique5,:caracteristique6,:lundi1,:lundi2,:mardi1,:mardi2,:mercredi1,:mercredi2,:jeudi1,:jeudi2,:vendredi1,:vendredi2,:samedi1,:samedi2,:dimanche1,:dimanche2,:articlename,:articledes,:articlepri,:id)');
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
             'id'=>$id
           ]);
           set_flash("Enregistrement réussi", 'isa_success');
/*$sql="INSERT INTO ajouter(titre,id_cat,cle,adresse,batiment,bp,pays,numero,email,ville,device,prix,decrire,caractéristique1,caractéristique2,caractéristique3,caractéristique4;caractéristique5;caractéristique6,lundi1,lundi2,mardi1,mardi2,mercredi1,mercredi2,jeudi1,jeudi2,vendredi1,vendredi2,samedi1,samedi2,dimanche1,dimanche2,articlename,articledes,articlepri,id)
 VALUES(:titre,:id_cat,:cle,:adresse,:batiment,:bp,:pays,:numero,:email,:ville,:device,:prix,:decrire,:caractéristique1,:caractéristique2,:caractéristique3,:caractéristique4;:caractéristique5;:caractéristique6,:lundi1,:lundi2,:mardi1,:mardi2,:mercredi1,:mercredi2,:jeudi1,:jeudi2,:vendredi1,:vendredi2,:samedi1,:samedi2,:dimanche1,:dimanche2,:articlename,:articledes,:articlepri,:id)";
$query = $db->prepare($sql);
$query->bindParam(':titre',$titre,PDO::PARAM_STR);
$query->bindParam(':id_cat',$id_cat,PDO::PARAM_STR);
$query->bindParam(':cle',$cle,PDO::PARAM_STR);
$query->bindParam(':adresse',$adresse,PDO::PARAM_STR);
$query->bindParam(':batiment',$batiment,PDO::PARAM_STR);
$query->bindParam(':bp',$bp,PDO::PARAM_STR);
$query->bindParam(':pays',$pays,PDO::PARAM_STR);
$query->bindParam(':numero',$numero,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':ville',$ville,PDO::PARAM_STR);
$query->bindParam(':device',$device,PDO::PARAM_STR);
$query->bindParam(':prix',$prix,PDO::PARAM_STR);
$query->bindParam(':decrire',$decrire,PDO::PARAM_STR);
$query->bindParam(':caracteristique1',$caracteristique1,PDO::PARAM_STR);
$query->bindParam(':caracteristique2',$caracteristique2,PDO::PARAM_STR);
$query->bindParam(':caracteristique3',$caracteristique3,PDO::PARAM_STR);
$query->bindParam(':caracteristique4',$caracteristique4,PDO::PARAM_STR);
$query->bindParam(':caracteristique5',$caracteristique5,PDO::PARAM_STR);
$query->bindParam(':caracteristique6',$caracteristique6,PDO::PARAM_STR);
$query->bindParam(':lundi1',$lundi1,PDO::PARAM_STR);
$query->bindParam(':lundi2',$lundi2,PDO::PARAM_STR);
$query->bindParam(':mardi1',$mardi1,PDO::PARAM_STR);
$query->bindParam(':mardi2',$mardi2,PDO::PARAM_STR);
$query->bindParam(':mercredi1',$mercredi1,PDO::PARAM_STR);
$query->bindParam(':mercredi2',$mercredi2,PDO::PARAM_STR);
$query->bindParam(':jeudi1',$jeudi1,PDO::PARAM_STR);
$query->bindParam(':jeudi2',$jeudi2,PDO::PARAM_STR);
$query->bindParam(':vendredi1',$vendredi1,PDO::PARAM_STR);
$query->bindParam(':vendredi2',$vendredi2,PDO::PARAM_STR);
$query->bindParam(':samedi1',$samedi1,PDO::PARAM_STR);
$query->bindParam(':samedi2',$samedi2,PDO::PARAM_STR);
$query->bindParam(':dimanche1',$dimanche1,PDO::PARAM_STR);
$query->bindParam(':dimanche2',$dimanche2,PDO::PARAM_STR);
$query->bindParam(':articlename',$articlename,PDO::PARAM_STR);
$query->bindParam(':articledes',$articledes,PDO::PARAM_STR);
$query->bindParam(':articlepri',$articlepri,PDO::PARAM_STR);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
*/
$lastInsertId = $db->lastInsertId();
if($lastInsertId)
{
  $ret="select max(id_ajout) as id_ajout from ajouter WHERE id='$id'";
  $query= $db -> prepare($ret);
  //$query->bindParam(':id',$id, PDO::PARAM_STR);
  $query-> execute();
  $results = $query -> fetch(PDO::FETCH_OBJ);
  $q = $db->prepare('UPDATE bien
                     SET id_ajout = :id_ajout
                     WHERE id = :id AND id_ajout=0');

  $q->execute([
    'id_ajout' => $results->id_ajout,
    'id' => get_session('user_id')

  ]);
set_flash("Enregistrement réussi", 'success');
}
else
{
set_flash("Enregistrement échoué", 'success');
}

}



 include('views/ajout.view.php');

  ?>
