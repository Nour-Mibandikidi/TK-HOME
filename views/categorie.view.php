<?php include('partials/_header.php'); ?>

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <h2>Articles de la catégorie</h2><span>Explorez tous les articles</span>

      <!-- Breadcrumbs -->
      <nav id="breadcrumbs">
        <ul>
          <li><a href="#">Accueil</a></li>
          <li>Articles de la catégorie</li>
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
      <?php foreach ($results as $key => $result) {
      ?>
      <div class="col-lg-12 col-md-12">
        <div class="listing-item-container list-layout">
          <a href="detail_apparte.php?id_ajout=<?php echo $result->id_ajout; ?>" class="listing-item">

            <!-- Image -->
            <div class="listing-item-image">
              <img src="admin_section/img/produit/<?php echo htmlentities($result->image);?>" alt="Image du bien">
              <?php if ($result->cle == 'LOCATION SAISONNIERE'): ?>
              <span class="tag">LOCATION SAISONNIERE</span>
                <?php elseif ($result->cle == 'A VENDRE'): ?>
              <span class="tag">VENDRE</span>
              <?php elseif ($result->cle == 'LOCATIION MENSUELLE'): ?>
              <span class="tag">LOCATIION MENSUELLE</span>
              <?php elseif ($result->cle == 'LOCATIION JOURNALIERE'): ?>
              <span class="tag">LOCATIION JOURNALIERE</span>
            <?php else : ?>
            <?php endif; ?>
            </div>

            <!-- Content -->
            <div class="listing-item-content">
              <div class="listing-badge now-open"><?php echo htmlentities($result->nom_cat);?></div>
              <div class="listing-item-inner">
              <h3><?php echo $result->titre; ?> <i class="verified-icon"></i></h3>
              <span><?php echo htmlentities($result->adresse);?></span>
                <div class="star-rating">
                  <div class="rating-counter"><?php echo htmlentities($result->prix);?> <?php echo htmlentities($result->device);?></div>
                </div>
              </div>

              <div class="listing-item-details"><?php echo htmlentities($result->prix);?> <?php echo htmlentities($result->device);?></div>
            </div>
          </a>
        </div>
      </div>
      <?php } ?>

      <!-- Listing Item / End -->

    </div>
    <div id="pagination"><?= $pagination ?></div>
    <!-- Pagination -->
    <!--div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12">
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
    </div-->
    <!-- Pagination / End -->

  </div>

</div>
</div>



<?php include('partials/_footer.php'); ?>
