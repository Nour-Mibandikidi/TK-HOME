<?php include('partials/_header.php'); ?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Listings</h2><span>Grid Layout With Sidebar</span>

      <!-- Breadcrumbs -->
      <nav id="breadcrumbs">
        <ul>
          <li><a href="#">Home</a></li>
          <li>Listings</li>
        </ul>
      </nav>

    </div>
  </div>
</div>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row">

  <div class="col-md-12">


    <div class="row">
      <!-- Listing Item -->
      <?php
  		$id_cat=$_GET['id_cat'];
  		$sql = "SELECT * from ajouter a join categorie c on a.id_cat=c.id_cat join bien b on a.id_ajout=b.id_ajout  WHERE a.statut='0' AND  a.id_cat='$id_cat' GROUP BY b.id_ajout";
  		$query = $db -> prepare($sql);
  		$query->execute();
  		$results=$query->fetchAll(PDO::FETCH_OBJ);
  		$cnt=1;
  		if($query->rowCount() > 0)
  		{
  		foreach($results as $result)
  		{				?>
      <div class="col-lg-12 col-md-12">
        <div class="listing-item-container list-layout">
          <a href="detail_apparte.php?id_ajout=<?php echo $result->id_ajout; ?>" class="listing-item">

            <!-- Image -->
            <div class="listing-item-image">
              <img src="admin_section/img/produit/<?php echo htmlentities($result->image);?>" alt="Image du bien">
              <span class="tag"><?php echo htmlentities($result->nom_cat);?></span>
            </div>

            <!-- Content -->
            <div class="listing-item-content">
              <div class="listing-badge now-open">Now Open</div>
              <div class="listing-item-inner">
              <h3><?php echo $result->titre; ?> <i class="verified-icon"></i></h3>
              <span><?php echo htmlentities($result->adresse);?></span>
                <div class="star-rating" data-rating="2.0">
                  <div class="rating-counter">(17 reviews)</div>
                </div>
              </div>

              <span class="like-icon"></span>

              <div class="listing-item-details"><?php echo htmlentities($result->prix);?> <?php echo htmlentities($result->device);?></div>
            </div>
          </a>
        </div>
      </div>
      <?php $cnt=$cnt+1; }} ?>

      <!-- Listing Item / End -->

    </div>

    <!-- Pagination -->
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
        <!-- Pagination -->
        <div class="pagination-container margin-top-20 margin-bottom-40">
          <nav class="pagination">
            <ul>
              <li><a href="#" class="current-page">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- Pagination / End -->

  </div>

</div>
</div>



<?php include('partials/_footer.php'); ?>
