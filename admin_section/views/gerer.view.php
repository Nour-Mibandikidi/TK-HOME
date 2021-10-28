<?php include('partials/_header.php'); ?>


<!-- Content
================================================== -->
<div class="dashboard-content">

<!-- Titlebar -->
<div id="titlebar">
<div class="row">
  <div class="col-md-12">
    <h2>Liste des Biens actifs</h2>
    <!-- Breadcrumbs -->
    <nav id="breadcrumbs">
      <ul>
        <li><a href="../index.php">Accueil</a></li>
        <li><a href="dashboard.php">Profil</a></li>
        <li>liste des Biens actifs</li>
      </ul>
    </nav>
  </div>
</div>
</div>

<div class="row">

<!-- Listings -->
<div class="col-lg-12 col-md-12">
  <div class="dashboard-list-box margin-top-0">
    <h4>Bien actif</h4>
    <ul>
      <?php
      $sql = "SELECT * from ajouter a join categorie c on a.id_cat=c.id_cat join bien b on a.id_ajout=b.id_ajout    LIMIT 100";
      $query = $db -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      $cnt=1;
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {				?>
      <li>
        <div class="list-box-listing">
          <div class="list-box-listing-img"><a href="../detail_apparte.php?id_ajout=<?php echo $result->id_ajout; ?>"><img src="img/produit/<?php echo htmlentities($result->image);?>" style="width="150"; height="150";" alt="Image du bien"></a></div>
          <div class="list-box-listing-content">
            <div class="inner">
              <h3><a href="../detail_apparte.php?id_ajout=<?php echo $result->id_ajout; ?>"><?php echo $result->titre; ?></a></h3>
              <span><?php echo htmlentities($result->adresse);?></span>
            </div>
          </div>
        </div>
        <div class="buttons-to-right">
          <!--a href="edit_bien.php?id_ajout=<?php// echo $result->id_ajout; ?>" class="button gray"><i class="sl sl-icon-note"></i> Modifier</a-->
          <a href="delete_ajout.php?del=<?php echo $result->id_ajout;?>" class="button gray"><i class="sl sl-icon-close"></i> Supprimer</a>
    
        </div>
      </li>
      <?php $cnt=$cnt+1; }} ?>
    </ul>
  </div>
</div>


<?php include('partials/_footer.php'); ?>
