<?php include('partials/_header.php'); ?>

<!-- Slider
================================================== -->
<div class="listing-slider mfp-gallery-container margin-bottom-0">
  <?php
  if(!empty($_POST['recherche_id']))
    $id_ajout=$_POST['recherche_id'];
  else if(!empty($_GET['id_ajout']))
    $id_ajout=$_GET['id_ajout'];
  else
    $id_ajout='';
  $sql = "SELECT * from  bien b,ajouter a WHERE a.id_ajout=b.id_ajout  AND a.id_ajout='$id_ajout' ";
  $query = $db -> prepare($sql);
  $query->execute();
  $results=$query->fetchAll(PDO::FETCH_OBJ);
  $cnt=1;
  if($query->rowCount() > 0)
  {
  foreach($results as $result)
  {  ?>

<a href="admin_section/img/produit/<?php echo $result->image; ?>" data-background-image="admin_section/img/produit/<?php echo $result->image; ?>" class="item mfp-gallery" alt="lien de l'image du bien"></a>
<?php }} ?>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row sticky-wrapper">
<div class="col-lg-8 col-md-8 padding-right-30">

<!-- Titlebar -->
<?php
$sql = "SELECT * from  ajouter a,categorie c WHERE   a.id_cat=c.id_cat  AND a.id_ajout='$id_ajout' ";
$query = $db -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
 ?>
<div id="titlebar" class="listing-titlebar">
  <div class="listing-titlebar-title">
    <h2><?php echo $result->titre; ?><span class="listing-tag"><?php echo $result->nom_cat; ?></span></h2>
    <span>
      <a href="#listing-location" class="listing-address">
        <i class="fa fa-map-marker"></i>
        <?php echo $result->adresse; ?>
      </a>
    </span>
  
  </div>
</div>
<!-- Listing Nav -->
<div id="listing-nav" class="listing-nav-container">
  <ul class="listing-nav">
    <li><a href="#listing-overview" class="active">Description du bien</a></li>
    <li><a href="#listing-pricing-list">Articles</a></li>
    <li><a href="#listing-reviews">Commentaires</a></li>
    <li><a href="#add-review">Ajoutez un commentaire</a></li>
  </ul>
</div>

<!-- Overview -->
<div id="listing-overview" class="listing-section">

  <!-- Description -->

  <p><?php echo $result->decrire; ?>  </p>

  <!-- Listing Contacts -->
  <div class="listing-links-container">

    <ul class="listing-links contact-links">
      <li><a  class="listing-links"><i class="fa fa-phone"></i> <?php echo $result->numero; ?></a></li>
      <li><a class="listing-links"><i class="fa fa-envelope-o"></i> <span class="__cf_email__" data-cfemail="e885898184a88d90898598848dc68b8785"><?php echo $result->email; ?></span></a>
      </li>
    </ul>
    <div class="clearfix"></div>

    <div class="clearfix"></div>

  </div>
  <div class="clearfix"></div>


  <!-- Amenities -->
  <h3 class="listing-desc-headline">Caractériqtiques du Bien</h3>
  <ul class="listing-features  margin-top-0">
    <li><?php echo $result->caracteristique1; ?></li>
    <li><?php echo $result->caracteristique2; ?></li>
    <li><?php echo $result->caracteristique3; ?></li>
    <li><?php echo $result->caracteristique4; ?></li>
    <li><?php echo $result->caracteristique5; ?></li>
    <li><?php echo $result->caracteristique6; ?></li>
  </ul>
</div>

<?php if (($result->nom_cat == 'Hotels') OR  ($result->nom_cat == 'Boutiques')): ?>
<!-- Food Menu -->
<div id="listing-pricing-list" class="listing-section">
  <h3 class="listing-desc-headline margin-top-70 margin-bottom-30">Nos articles</h3>

  <div class="show-more">
    <div class="pricing-list-container">

      <!-- Food List -->
      <h4><?php echo $result->titre; ?></h4>
      <ul>
        <li>
          <h5><?php echo $result->articlename; ?></h5>
          <p><?php echo $result->articledes; ?></p>
          <span><?php echo $result->articlepri; ?></span>
        </li>
      </ul>
    </div>
  </div>
  <a href="#" class="show-more-button" data-more-title="voir moins" data-less-title="Voir plus"><i class="fa fa-angle-down"></i></a>
</div>
<!-- Food Menu / End -->
<?php else : ?>
<?php endif; ?>
<?php }} ?>
<!-- Reviews -->
<div id="listing-reviews" class="listing-section">
  <h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Les commentaires des <span>Clients</span></h3>

  <!-- Rating Overview -->
  <div class="rating-overview">
    <div class="rating-overview-box">
    </div>

    <div class="rating-bars">
        <div class="rating-bars-item">
        </div>
        <div class="rating-bars-item">
        </div>
    </div>
  </div>
  <!-- Rating Overview / End -->


  <div class="clearfix"></div>

  <!-- Reviews -->
  <section class="comments listing-reviews">
    <?php
    $id_ajout=$_GET['id_ajout'];
    $req = $db->query("SELECT id FROM commentaire");

    	$nbre_total_commentaire = $req->rowCount();

    	$nbre_commentaire_par_page = 3;

    	$nbre_pages_max_gauche_et_droite = 3;

    	$last_page = ceil($nbre_total_commentaire / $nbre_commentaire_par_page);

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

    	$limit = 'LIMIT '.($page_num - 1) * $nbre_commentaire_par_page. ',' . $nbre_commentaire_par_page;
      //Cette requête sera utilisée plus tard
      $sql = "SELECT * from  users u, profil p, commentaire c WHERE   u.id=p.id  AND p.id=c.user_id AND c.id_ajout='$id_ajout' '$limit' ORDER BY c.id DESC ";
      $query = $db -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {
       ?>
      <ul>
        <li>
          <div class="avatar"><img src="admin_section/img/profil/avatar.png" width="60" height="60" alt=" imade de l'utilisateur" /></div>
          <div class="comment-content"><div class="arrow-comment"></div>
    				<div class="comment-by"><?php echo $result->prenom; ?> <?php echo $result->name; ?><i class="tip" data-tip-content="Person who left this review actually was a customer"></i>
            <span class=" date timeago" title="<?php echo $result->created_at; ?>"><?php echo $result->created_at; ?></span>
    				</div>
    				<p><?php echo $result->content; ?></p>
    			</div>
        </li>
       </ul>
       <?php $pagination = '<div class="clearfix"></div>
     	<div class="row">
     		<div class="col-md-12">
     			<div class="pagination-container margin-top-20 margin-bottom-40">
     				<nav class="pagination">
     					<ul>';

     	if($last_page != 1){
     		if($page_num > 1){
     			$previous = $page_num - 1;
     			$pagination .= '<li><a href="detail_apparte.php?page='.$previous.'&id_ajout='.$id_ajout.'"></a></li>';

     			for($i = $page_num - $nbre_pages_max_gauche_et_droite; $i < $page_num; $i++){
     				if($i > 0){
     					$pagination .= '<li><a href="detail_apparte.php?page='.$i.'&id_ajout='.$id_ajout.'">'.$i.'</a></li>';
     				}
     			}
     		}

     		$pagination .= '<li><a href="#" class="current-page">'.$page_num.'</a></li>';

     		for($i = $page_num+1; $i <= $last_page; $i++){
     			$pagination .= '<a href="detail_apparte.php?page='.$i.'&id_ajout='.$id_ajout.'">'.$i.'</a> ';

     			if($i >= $page_num + $nbre_pages_max_gauche_et_droite){
     				break;
     			}
     		}

     		if($page_num != $last_page){
     			$next = $page_num + 1;
     			$pagination .= '<li><a href="detail_apparte.php?page='.$next.'&id_ajout='.$id_ajout.'"><i class="sl sl-icon-arrow-right"></i></a></li>';
     		}
       }
     	$pagination .='  </ul>
     	</nav>
     </div>
     </div>
     </div>'; ?>

  <?php }} ?>
  </section>

  <!-- Pagination -->

  <div class="clearfix"></div>
  <!-- Pagination / End -->
</div>

<?php if (is_logged_in()): ?>
<!-- Add Review Box -->
<div id="add-review" class="add-review-box">

  <!-- Add Review -->
  <h3 class="listing-desc-headline margin-bottom-10">Ajoutez un commentaire</h3>
  <p class="comment-notes">Votre adresse email ne sera pas publiée.</p>
  <!-- Review Comment -->
  <form method="POST"  action="commentaire.php" id="add-comment" class="add-comment">
    <fieldset>

      <div class="row">
      <div>
        <label>Votre commentaire:</label>
        <textarea cols="40" rows="3" name="content" id="content" placeholder="Postez un commentaire" required="required"></textarea>
      </div>
      <input type="hidden" name="id_ajout" value="<?php echo $_GET['id_ajout']; ?>">

    </fieldset>

    <button type="submit" name="publish" class="button">Postez votre commentaire</button>
    <div class="clearfix"></div>
  </form>

</div>
</div>
<!-- Add Review Box / End -->
<?php else: ?>
  <!-- Add Review Box -->
  <div id="add-review" class="add-review-box">
    <!-- Add Review -->
    <h3 class="listing-desc-headline margin-bottom-10">Vous devez etre connecter pour poster un commentaire</h3>
    <!-- Review Comment -->
    <form method="POST"  action="commentaire.php" id="add-comment" class="add-comment">
      <fieldset>
        <div class="row">
      </fieldset>
      <div class="clearfix"></div>
    </form>

  </div>
  </div>
<?php endif; ?>




<!-- Sidebar
================================================== -->
<div class="col-lg-4 col-md-4 margin-top-75 sticky">

  <?php
      $sql = "SELECT cle FROM ajouter WHERE id_ajout='$id_ajout' ";
      $query = $db -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {				?>
<!-- Verified Badge -->
<?php if ($result->cle == 'LOCATION SAISONNIERE'): ?>
<div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
  <i class="sl sl-icon-check"></i> LOCATION SAISONNIERE
</div>
<?php elseif ($result->cle == 'A VENDRE'): ?>
  <div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
    <i class="sl sl-icon-check"></i> A VENDRE
  </div>
  <?php elseif ($result->cle == 'LOCATIION MENSUELLE'): ?>
    <div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
      <i class="sl sl-icon-check"></i> LOCATIION MENSUELLE
    </div>
    <?php elseif ($result->cle == 'LOCATIION JOURNALIERE'): ?>
      <div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
        <i class="sl sl-icon-check"></i> LOCATIION JOURNALIERE
      </div>
    <?php else : ?>
    <?php endif; ?>
      <?php }} ?>
<!-- Coupon Widget -->

<div class="coupon-widget" style="background-image: url(asset/images/ezali.png);">
  <a href="https://ezali.fr/" class="coupon-top">
    <span class="coupon-link-icon"></span>
    <h3>Vendez, Achetez et troquer en ligne sur Ezali.fr </h3>
    <div class="coupon-valid-untill">Cliquez pour acceder</div>
    <div class="coupon-how-to-use"><strong>une plateforme 100% Africaine conçu pour développer le commerce électronique Africain</div>
  </a>
  <div class="coupon-bottom">
    <div class="coupon-scissors-icon"></div>
    <div class="coupon-code">TKHOME</div>
  </div>
</div>

<?php
    $sql = "SELECT * from categorie c join ajouter a on c.id_cat=a.id_cat AND id_ajout='$id_ajout' ";
    $query = $db -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
    foreach($results as $result)
    {				?>
<!-- Opening Hours -->
<?php if (($result->nom_cat == 'Hotels') OR ($result->nom_cat == 'Restaurants') OR ($result->nom_cat == 'Boutiques')): ?>
<div class="boxed-widget opening-hours margin-top-35">
  <div class="listing-badge now-open">Ouvert</div>
  <h3><i class="sl sl-icon-clock"></i> Heures d'ouverture</h3>
  <ul>
    <li>Lundi <span><?php echo $result->lundi1; ?> - <?php echo $result->lundi2; ?></span></li>
    <li>Mardi <span><?php echo $result->mardi1; ?> - <?php echo $result->mardi2; ?></span></li>
    <li>Mercredi <span><?php echo $result->mercredi1; ?> - <?php echo $result->mercredi2; ?></span></li>
    <li>Jeudi <span><?php echo $result->jeudi1; ?> - <?php echo $result->jeudi2; ?></span></li>
    <li>Vendredi <span><?php echo $result->vendredi1; ?> - <?php echo $result->vendredi2; ?></span></li>
    <li>Samedi <span><?php echo $result->samedi1; ?> - <?php echo $result->samedi2; ?></span></li>
    <li>Dimanche <span><?php echo $result->dimanche1; ?> - <?php echo $result->dimanche2; ?></span></li>
  </ul>
</div>
<!-- Opening Hours / End -->
<?php else: ?>
<?php endif; ?>
<?php }} ?>

<!-- Contact -->
<?php
    $sql = "SELECT * from users u join ajouter a on u.id=a.id WHERE a.id_ajout='$id_ajout' ";
    $query = $db -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0)
    {
    foreach($results as $result)
    {				?>
<div class="boxed-widget margin-top-35">
  <div class="hosted-by-title">
    <h4><span>Posté par</span> <a href="#"><?php echo $result->name; ?> <?php echo $result->prenom; ?></a></h4>
    <a href="#" class="hosted-by-avatar"><img src="admin_section/img/profil/avatar.png" width="80" height="65" alt="image de l'hote"></a>
  </div>
  <ul class="listing-details-sidebar">
    <li><i class="sl sl-icon-phone"></i> <span><?php echo $result->tel; ?></li>
    <!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
  </ul>

</div>
<?php }} ?>
<!-- Contact / End-->
<!-- Share / Like -->
<div class="listing-share margin-top-40 margin-bottom-40 no-border">
  <ul class="share-buttons margin-top-40 margin-bottom-0">
    <!--li><a class="fb-share"  href="ajouter_like.php?id=<?php// echo $result->id_ajout; ?>"> Ajoutez aux favoris</a></li-->
    </ul>

  <span>Partagez sur les réseaux sociaux</span>

    <!-- Share Buttons -->
    <ul class="share-buttons margin-top-40 margin-bottom-0">
      <li><a class="fb-share" data-url="hservice.000webhostapp.com" ><i class="fa fa-facebook"></i></a></li>
      <li><a class="twitter-share" data-url="hservice.000webhostapp.com" ><i class="fa fa-twitter"></i></a></li>
      <li><a class="gplus-share" data-url="hservice.000webhostapp.com" ><i class="fa fa-google-plus"></i></a></li>
      <li><a class="linkedin-share" data-url="hservice.000webhostapp.com" ><i class="fa fa-linkedin"></i>linkedin</a></li>
      <!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
    </ul>
    <div class="clearfix"></div>
</div>
</div>
<!-- Sidebar / End -->
</div>
</div>



<?php include('partials/_footer.php'); ?>
