<?php include('partials/_header.php'); ?>
<!-- Banner
================================================== -->
<div class="main-search-container" data-background-image="asset/images/main-search-background-01.jpg">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Trouvez le logement de vos  rêves</h2>
					<h4>Expolorez les meilleurs logements, les meilleurs activitées et autres</h4>
					<form class="" action="detail_apparte.php" method="post">
					<div class="main-search-input">

						<div class="main-search-input-item">
							<input autocomplete="off" type="text" id="recherche" placeholder="Que cherchez-vous......?" value="">
							<input type="hidden" id="recherche_id" name="recherche_id" value="">
							<div id="affiche_rep">
							</div>
						</div>

						<button type="submit" class="button recherche">Recherche</button>

					</div>
					</form>
				</div>
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-top-75">
				Recherche par catégorie
				<span>Explorez <i> tous les articles</i> classés par catégorie</span>
			</h3>
		</div>

	</div>
</div>


<!-- Categories Carousel -->
<div class="fullwidth-carousel-container margin-top-25">
	<div class="fullwidth-slick-carousel category-carousel">

		<!-- Item -->
		<?php
				$sql = "SELECT * from categorie";
				$query = $db -> prepare($sql);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{				?>
			<div class="fw-carousel-item">
				<div class="category-box-container">
					<a href="categorie.php?id_cat=<?php echo $result->id_cat; ?>" class="category-box" data-background-image="asset/images/categories/<?php echo $result->ima; ?>">
						<div class="category-box-content">
							<h3><?php echo htmlentities($result->nom_cat);?></h3>
							<?php if ($result->nom_cat == 'Hotels'): ?>
							<?php
							//Query for Listing count
							$sql = "SELECT id from ajouter a join categorie c on a.id_cat=c.id_cat WHERE a.id_cat='4'";
							$query = $db -> prepare($sql);
							$query->bindParam(':id',$id, PDO::PARAM_STR);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=$query->rowCount();
							?>
							<span><?php echo htmlentities($cnt);?> <?php echo htmlentities($result->nom_cat);?></span>
						<?php elseif ($result->nom_cat == 'Appartements'): ?>
							<?php
							//Query for Listing count
							$sql = "SELECT id from ajouter a join categorie c on a.id_cat=c.id_cat WHERE a.id_cat='2'";
							$query = $db -> prepare($sql);
							$query->bindParam(':id',$id, PDO::PARAM_STR);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=$query->rowCount();
							?>
							<span><?php echo htmlentities($cnt);?> <?php echo htmlentities($result->nom_cat);?></span>
						<?php elseif ($result->nom_cat == 'Parcelles'): ?>
							<?php
							//Query for Listing count
							$sql = "SELECT id from ajouter a join categorie c on a.id_cat=c.id_cat WHERE a.id_cat='3'";
							$query = $db -> prepare($sql);
							$query->bindParam(':id',$id, PDO::PARAM_STR);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=$query->rowCount();
							?>
							<span><?php echo htmlentities($cnt);?> <?php echo htmlentities($result->nom_cat);?></span>
						<?php elseif ($result->nom_cat == 'Restaurants'): ?>
							<?php
							//Query for Listing count
							$sql = "SELECT id from ajouter a join categorie c on a.id_cat=c.id_cat WHERE a.id_cat='5'";
							$query = $db -> prepare($sql);
							$query->bindParam(':id',$id, PDO::PARAM_STR);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=$query->rowCount();
							?>
							<span><?php echo htmlentities($cnt);?> <?php echo htmlentities($result->nom_cat);?></span>
						<?php elseif ($result->nom_cat == 'Evenements'): ?>
							<?php
							//Query for Listing count
							$sql = "SELECT id from ajouter a join categorie c on a.id_cat=c.id_cat WHERE a.id_cat='6'";
							$query = $db -> prepare($sql);
							$query->bindParam(':id',$id, PDO::PARAM_STR);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=$query->rowCount();
							?>
							<span><?php echo htmlentities($cnt);?> <?php echo htmlentities($result->nom_cat);?></span>
						<?php elseif ($result->nom_cat == 'Boutiques'): ?>
							<?php
							//Query for Listing count
							$sql = "SELECT id from ajouter a join categorie c on a.id_cat=c.id_cat WHERE a.id_cat='1'";
							$query = $db -> prepare($sql);
							$query->bindParam(':id',$id, PDO::PARAM_STR);
							$query->execute();
							$results=$query->fetchAll(PDO::FETCH_OBJ);
							$cnt=$query->rowCount();
							?>
							<span><?php echo htmlentities($cnt);?> <?php echo htmlentities($result->nom_cat);?></span>
						<?php endif; ?>
						</div>
						<span class="category-box-btn">EXPLOREZ</span>
					</a>
				</div>
			</div>
		<?php $cnt=$cnt+1; }} ?>

	</div>
</div>
<!-- Categories Carousel / End -->



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Récemments ajoutés
					<span>Découvrez les dermiers articles postés sur TKHOME</span>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

				<!-- Listing Item -->
				<?php
				$sql = "SELECT * from ajouter a join categorie c on a.id_cat=c.id_cat join bien b on a.id_ajout=b.id_ajout where a.statut='0'   GROUP BY b.id_ajout ORDER BY a.id_ajout DESC LIMIT 6";
				$query = $db -> prepare($sql);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{				?>
				<div class="carousel-item">
					<a href="detail_apparte.php?id_ajout=<?php echo $result->id_ajout; ?>" class="lien du Bien">
						<div class="listing-item">
							<img src="admin_section/img/produit/<?php echo htmlentities($result->image);?>" alt="Image du bien">
							<div class="listing-item-details">
								<ul>
									<li><?php echo htmlentities($result->prix);?> <?php echo htmlentities($result->device);?></li>
								</ul>
							</div>
							<div class="listing-badge now-open"><?php echo htmlentities($result->nom_cat);?></div>
							<div class="listing-item-content">
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
								<h3><?php echo $result->titre; ?> <i class="verified-icon"></i></h3>
								<span><?php echo htmlentities($result->adresse);?></span>
							</div>
						</div>
					</a>
				</div>
				<?php $cnt=$cnt+1; }} ?>
				<!-- Listing Item / End -->
				</div>

			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->


<!-- Info Section -->
<div class="container" id="comment">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="headline centered margin-top-80">
				Trouvez la Maison de vos reves
				<span class="margin-top-25">Explorez plusieurs offres de logements proche de chez vous.</span>
			</h2>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Map2"></i>
				<h3>Trouvez ce que vous cherchez</h3>
				<p>A l'aide de ses catégories et de son outil de recherche  TKHOME facilite vos recherches.</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Mail-withAtSign"></i>
				<h3>Regardez les infos de l'article</h3>
				<p>Plusieurs images sont mises à votre disposition pour avoir plus de détails sur l'article</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2">
				<i class="im im-icon-Checked-User"></i>
				<h3>Reservez, conactez ou appeler l'auteur de l'article</h3>
				<p>Les informations du proprietaire sont mises à votre disposition.</p>
			</div>
			</div>
		</div>
	</div>

</div>
<!-- Info Section / End -->


<?php include('partials/_footer.php'); ?>
