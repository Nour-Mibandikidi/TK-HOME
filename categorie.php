<?php
session_start();
//$_SESSION = [];
require('conf/database.php');
require('includes/functions.php');
require('includes/init.php');
require('includes/constants.php');

$id_cat=$_GET['id_cat'];
$req = $db->query("SELECT id_ajout FROM ajouter WHERE statut='0'");

	$nbre_total_bien = $req->rowCount();

	$nbre_bien_par_page = 4;

	$nbre_pages_max_gauche_et_droite = 4;

	$last_page = ceil($nbre_total_bien / $nbre_bien_par_page);

	if(isset($_GET['page']) && is_numeric($_GET['page'])){
		$page_num = $_GET['page'];
	} else {
		$page_num = 1;
	}

	if($page_num < 1){
		$page_num = 1;
	} else if($page_num > $last_page) {
		$page_num = $last_page;
	}

	$limit = 'LIMIT '.($page_num - 1) * $nbre_bien_par_page. ',' . $nbre_bien_par_page;

	//Cette requête sera utilisée plus tard
  $sql = "SELECT * from ajouter a join categorie c on a.id_cat=c.id_cat join bien b on a.id_ajout=b.id_ajout  WHERE a.statut='0' AND  a.id_cat='$id_cat'  GROUP BY b.id_ajout ORDER BY a.id_ajout DESC $limit";
  $query = $db -> prepare($sql);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);

	$pagination = '<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12">
			<div class="pagination-container margin-top-20 margin-bottom-40">
				<nav class="pagination">
					<ul>';

	if($last_page != 1){
		if($page_num > 1){
			$previous = $page_num - 1;
			$pagination .= '<li><a href="categorie.php?page='.$previous.'&id_cat='.$id_cat.'"></a></li>';

			for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
				if($i > 0){
					$pagination .= '<li><a href="categorie.php?page='.$i.'&id_cat='.$id_cat.'">'.$i.'</a></li>';
				}
			}
		}

		$pagination .= '<li><a href="#" class="current-page">'.$page_num.'</a></li>';

		for($i = $page_num+1; $i <= $last_page; $i++){
			$pagination .= '<a href="categorie.php?page='.$i.'&id_cat='.$id_cat.'">'.$i.'</a> ';

			if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
				break;
			}
		}

		if($page_num != $last_page){
			$next = $page_num + 1;
			$pagination .= '<li><a href="categorie.php?page='.$next.'&id_cat='.$id_cat.'"><i class="sl sl-icon-arrow-right"></i></a></li>';
		}
  }
	$pagination .='  </ul>
	</nav>
</div>
</div>
</div>';

include('views/categorie.view.php');
