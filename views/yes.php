<?php include('partials/_header.php'); ?>

<!-- Slider
================================================== -->
<?php
if(!empty($_POST['recherche_id']))
  $id_ajout=$_POST['recherche_id'];
else if(!empty($_GET['id_ajout']))
  $id_ajout=$_GET['id_ajout'];
else
  $id_ajout='';
$sql = "SELECT * from  bien b,ajouter a,users u,profil p,categorie c, commentaire t  WHERE a.id_ajout=b.id_ajout AND a.id=u.id AND u.id=p.id AND a.id_cat=c.id_cat AND a.id_ajout=t.id_ajout  AND a.id_ajout='$id_ajout' ";
$query = $db -> prepare($sql);
$query->execute();
$result=$query->fetch(PDO::FETCH_OBJ);
$results=$query->fetchAll(PDO::FETCH_OBJ);

 ?>
<div class="listing-slider mfp-gallery-container margin-bottom-0">
<?php foreach ($results as $key => $value) {
?>
<a href="admin_section/img/produit/<?php echo $value->image; ?>" data-background-image="admin_section/img/produit/<?php echo $value->image; ?>" class="item mfp-gallery" alt="lien de l'image du bien"></a>
<?php } ?>
</div>


<!-- Content
================================================== -->
<div class="container">
<div class="row sticky-wrapper">
<div class="col-lg-8 col-md-8 padding-right-30">

<!-- Titlebar -->
<div id="titlebar" class="listing-titlebar">
  <div class="listing-titlebar-title">
    <h2><?php echo $result->titre; ?><span class="listing-tag"><?php echo $result->nom_cat; ?></span></h2>
    <span>
      <a href="#listing-location" class="listing-address">
        <i class="fa fa-map-marker"></i>
        <?php echo $result->adresse; ?>
      </a>
    </span>
    <div class="star-rating" >
      <div class="rating-counter"><a href="#listing-reviews">(31 reviews)</a></div>
    </div>
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
  <ul class="listing-features checkboxes margin-top-0">
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
    <ul>
      <li>
        <div class="avatar"><img src="admin_section/img/profil/<?php echo $result->imagee; ?>" width="60" height="60" alt=" imade de l'utilisateur" /></div>
        <div class="comment-content"><div class="arrow-comment"></div>
  				<div class="comment-by"><?php echo $result->prenom; ?> <?php echo $result->name; ?><i class="tip" data-tip-content="Person who left this review actually was a customer"></i>
          <span class=" date timeago" title="<?php echo $result->created_at; ?>"><?php echo $result->created_at; ?></span>
  				</div>
  				<p><?php echo $result->content; ?></p>
  			</div>
      </li>
     </ul>
  </section>

  <!-- Pagination -->
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12">
      <!-- Pagination -->
      <div class="pagination-container margin-top-30">
        <nav class="pagination">
          <ul>
            <li><a href="#" class="current-page">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
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


<!-- Verified Badge -->
<div class="verified-badge with-tip" data-tip-content="Listing has been verified and belongs the business owner or manager.">
  <i class="sl sl-icon-check"></i> Verified Listing
</div>

<!-- Book Now -->
<?php if ( $result->nom_cat == 'Hotels'): ?>
<div class="boxed-widget booking-widget margin-top-35">
  <h3><i class="fa fa-calendar-check-o "></i> Reserver une chambre</h3>
  <div class="row with-forms  margin-top-0">

    <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
    <form class="" action="index.html" method="post">
    <div class="col-lg-12">
      <input type="date" id="date-picker" name="date_hotel" placeholder="Date" r>
    </div>

    <!-- Panel Dropdown -->
    <div class="col-lg-12">
      <div class="panel-dropdown time-slots-dropdown">
          <input type="text" name="heure_hotel" placeholder="12h à ... facutaltif" value="">
      </div>
    </div>
    <!-- Panel Dropdown / End -->

    <!-- Panel Dropdown -->
    <div class="col-lg-12">
      <div class="panel-dropdown">
        <select class="chosen-select-no-single" name="lit_hotel">
          <option label="blank">Type de chambre</option>
          <option>Un Lit</option>
          <option>Deux lits</option>
        </select>
      </div>
    </div>
    <!-- Panel Dropdown / End -->
    </form>

  </div>

  <!-- Book Now -->
  <a href="add_friend.php" class="button book-now fullwidth margin-top-5">Reserver</a>
</div>

<!-- Book Now / End -->
<?php elseif (($result->nom_cat == 'Appartements') OR ($result->nom_cat == 'Parcelles') OR ($result->nom_cat == 'Boutiques')): ?>
  <div class="boxed-widget booking-widget margin-top-35">
    <h3><i class="fa fa-calendar-check-o "></i> Envoyez un méssage</h3>
    <div class="row with-forms  margin-top-0">

      <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
      <div class="col-lg-12">
        <textarea name="name" rows="1" cols="20"></textarea>
      </div>

    </div>

    <!-- Book Now -->
    <a href="pages-booking.html" class="button book-now fullwidth margin-top-5">Envoyer</a>
  </div>
<?php elseif ($result->nom_cat == 'Restaurants'): ?>

  <div class="boxed-widget booking-widget margin-top-35">
    <h3><i class="fa fa-calendar-check-o "></i> Booking</h3>
    <div class="row with-forms  margin-top-0">

      <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
      <div class="col-lg-12">
        <input type="text" id="date-picker" placeholder="Date" readonly="readonly">
      </div>

      <!-- Panel Dropdown -->
      <div class="col-lg-12">
        <div class="panel-dropdown time-slots-dropdown">
          <a href="#">Time Slots</a>
          <div class="panel-dropdown-content padding-reset">
            <div class="panel-dropdown-scrollable">

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-1">
                <label for="time-slot-1">
                  <strong>8:30 am - 9:00 am</strong>
                  <span>1 slot available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-2">
                <label for="time-slot-2">
                  <strong>9:00 am - 9:30 am</strong>
                  <span>2 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-3">
                <label for="time-slot-3">
                  <strong>9:30 am - 10:00 am</strong>
                  <span>1 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-4">
                <label for="time-slot-4">
                  <strong>10:00 am - 10:30 am</strong>
                  <span>3 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-5">
                <label for="time-slot-5">
                  <strong>13:00 pm - 13:30 pm</strong>
                  <span>2 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-6">
                <label for="time-slot-6">
                  <strong>13:30 pm - 14:00 pm</strong>
                  <span>1 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-7">
                <label for="time-slot-7">
                  <strong>14:00 pm - 14:30 pm</strong>
                  <span>1 slots available</span>
                </label>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Panel Dropdown / End -->

      <!-- Panel Dropdown -->
      <div class="col-lg-12">
        <div class="panel-dropdown">
          <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
          <div class="panel-dropdown-content">

            <!-- Quantity Buttons -->
            <div class="qtyButtons">
              <div class="qtyTitle">Adults</div>
              <input type="text" name="qtyInput" value="1">
            </div>

            <div class="qtyButtons">
              <div class="qtyTitle">Childrens</div>
              <input type="text" name="qtyInput" value="0">
            </div>

          </div>
        </div>
      </div>
      <!-- Panel Dropdown / End -->

    </div>

<?php elseif ($result->nom_cat == 'Evenement'): ?>
  <div class="boxed-widget booking-widget margin-top-35">
    <h3><i class="fa fa-calendar-check-o "></i> Booking</h3>
    <div class="row with-forms  margin-top-0">

      <!-- Date Range Picker - docs: http://www.daterangepicker.com/ -->
      <div class="col-lg-12">
        <input type="text" id="date-picker" placeholder="Date" readonly="readonly">
      </div>

      <!-- Panel Dropdown -->
      <div class="col-lg-12">
        <div class="panel-dropdown time-slots-dropdown">
          <a href="#">Time Slots</a>
          <div class="panel-dropdown-content padding-reset">
            <div class="panel-dropdown-scrollable">

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-1">
                <label for="time-slot-1">
                  <strong>8:30 am - 9:00 am</strong>
                  <span>1 slot available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-2">
                <label for="time-slot-2">
                  <strong>9:00 am - 9:30 am</strong>
                  <span>2 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-3">
                <label for="time-slot-3">
                  <strong>9:30 am - 10:00 am</strong>
                  <span>1 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-4">
                <label for="time-slot-4">
                  <strong>10:00 am - 10:30 am</strong>
                  <span>3 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-5">
                <label for="time-slot-5">
                  <strong>13:00 pm - 13:30 pm</strong>
                  <span>2 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-6">
                <label for="time-slot-6">
                  <strong>13:30 pm - 14:00 pm</strong>
                  <span>1 slots available</span>
                </label>
              </div>

              <!-- Time Slot -->
              <div class="time-slot">
                <input type="radio" name="time-slot" id="time-slot-7">
                <label for="time-slot-7">
                  <strong>14:00 pm - 14:30 pm</strong>
                  <span>1 slots available</span>
                </label>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Panel Dropdown / End -->

      <!-- Panel Dropdown -->
      <div class="col-lg-12">
        <div class="panel-dropdown">
          <a href="#">Guests <span class="qtyTotal" name="qtyTotal">1</span></a>
          <div class="panel-dropdown-content">

            <!-- Quantity Buttons -->
            <div class="qtyButtons">
              <div class="qtyTitle">Adults</div>
              <input type="text" name="qtyInput" value="1">
            </div>

            <div class="qtyButtons">
              <div class="qtyTitle">Childrens</div>
              <input type="text" name="qtyInput" value="0">
            </div>

          </div>
        </div>
      </div>
      <!-- Panel Dropdown / End -->

    </div>
<?php endif; ?>


<!-- Coupon Widget -->
<div class="coupon-widget" style="background-image: url(asset/images/single-listing-01.jpg);">
  <a href="#" class="coupon-top">
    <span class="coupon-link-icon"></span>
    <h3>Order 1 burger and get 50% off on second!</h3>
    <div class="coupon-valid-untill">Expires 25/10/2019</div>
    <div class="coupon-how-to-use"><strong>How to use?</strong> Just show us this coupon on a screen of your smartphone!</div>
  </a>
  <div class="coupon-bottom">
    <div class="coupon-scissors-icon"></div>
    <div class="coupon-code">L1ST30</div>
  </div>
</div>


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


<!-- Contact -->
<div class="boxed-widget margin-top-35">
  <div class="hosted-by-title">
    <h4><span>Posté par</span> <a href="pages-user-profile.html"><?php echo $result->name; ?> <?php echo $result->prenom; ?></a></h4>
    <a href="pages-user-profile.html" class="hosted-by-avatar"><img src="admin_section/img/profil/<?php echo $result->imagee; ?>" width="80" height="65" alt="image de l'hote"></a>
  </div>
  <ul class="listing-details-sidebar">
    <li><i class="sl sl-icon-phone"></i> <span><?php echo $result->tel; ?></li>
    <!-- <li><i class="sl sl-icon-globe"></i> <a href="#">http://example.com</a></li> -->
    <li><i class="fa fa-envelope-o"></i> <a href="#"><span class="__cf_email__" data-cfemail="96e2f9fbd6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</span></a></li>
  </ul>

</div>
<!-- Contact / End-->


<!-- Share / Like -->
<div class="listing-share margin-top-40 margin-bottom-40 no-border">
  <button class="like-button"><span class="like-icon"></span> Ajoutez aux favoris</button>
  <span>159 people bookmarked this place</span>

    <!-- Share Buttons -->
    <ul class="share-buttons margin-top-40 margin-bottom-0">
      <li><a class="fb-share" href="#"><i class="fa fa-facebook"></i> Share</a></li>
      <li><a class="twitter-share" href="#"><i class="fa fa-twitter"></i> Tweet</a></li>
      <li><a class="gplus-share" href="#"><i class="fa fa-google-plus"></i> Share</a></li>
      <!-- <li><a class="pinterest-share" href="#"><i class="fa fa-pinterest-p"></i> Pin</a></li> -->
    </ul>
    <div class="clearfix"></div>
</div>

</div>
<!-- Sidebar / End -->

</div>
</div>



<?php include('partials/_footer.php'); ?>
