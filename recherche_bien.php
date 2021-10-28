<?php
session_start();
//$_SESSION = [];
//include('filters/guest_filter.php');
require('conf/database.php');
require('includes/functions.php');
//require('includes/constants.php');
//var_dump($_POST);
 ?>
 <!DOCTYPE html>
 <html lang="fr">
     <head>

          <style type="text/css">
            .hide
            {
             display: none;
            }
            .test{
            	/*margin-left:15px;*/
            	margin-top:10px;
            	margin-bottom: 10px;
            	padding: 10px;

            	/*border:10px solid #e0e0e0;*/
            }
            .in{
            	padding-top: 10px;
            }

            .souris:hover{background-color:#f5f5f5; color: #f91942;}

          </style>
     </head>


 <?php

  $val=$_POST['val'];
  //$q = $db->prepare('SELECT * FROM ajouter a,categorie c WHERE a.id_cat=c.id_cat
                  //  AND (titre LIKE :val OR ville LIKE :val
                    //OR pays LIKE :val OR prix LIKE :val OR nom_cat LIKE :val)');
  $q = $db->prepare('SELECT *,concat(pays," ",nom_cat," ",titre) AS recherche FROM ajouter a,categorie c WHERE a.id_cat=c.id_cat
                                      HAVING (recherche LIKE :val)');

  $q->execute(array('val'=>'%'.$val.'%'));

  $data = $q->fetchAll(PDO::FETCH_ASSOC);
  $outpout='';
  $outpout='<ul class="list-unstyled test "  >';
  if(empty($data))
    $outpout .='<li class="in test souris li"><b> non trouvee!!! </b></li>';
  foreach ($data as $key => $datum) {
    $outpout.='<li class="in test souris li" style="cursor:pointer"><b class="libelle"> '.$datum['recherche']."</b><span class='id_ajout' style='display:none;'>".$datum['id_ajout']."</span></li>";
  }
  $outpout.="</ul>";
  echo $outpout;
  ?>

 <!--  <script type="text/javascript">
  	$(document).ready(function(){
        $('li').mouseenter(function(){

           $(this).css("background-color","white");
        });
  	});
  </script> -->
  <script>
     $('.test').on('click','.li',function(){
             var libelle=$(this).find(".libelle").text();

             var id_ajout=$(this).find(".id_ajout").text();
             $("#affiche_rep").fadeOut();
             $("#recherche").val(libelle.trim());
             $("input[name='recherche_id']").val(id_ajout.trim());
            // $("#id_qua").val(code.trim());
             // for(i=0;i<id.length-2; i++){
             //    tab+=id[i]+" ";
             // }
             // alert(tab);
             // alert(pop+"   "+id[id.length-2]);
             // $('#student').val(tab);
             // $('#cache').val(id[id.length-2]);
             // $("#affiche_direction").fadeOut();

         })
  </script>
