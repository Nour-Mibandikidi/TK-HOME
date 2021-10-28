<?php include('partials/_header.php'); ?>
	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Mon Profil</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="../index.php">Accueil</a></li>
							<li><a href="dashboard.php">Profil</a></li>
							<li>Mon Profil</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="row">
			<?php include('../partials/_flash.php'); ?>
			<?php include('../partials/_errors.php'); ?>
			<!-- Profile -->
			<div class="col-lg-12 col-md-12">
				<div class="dashboard-list-box margin-top-0">
					<h4 class="gray">Détails du profil </h4>
					<div class="dashboard-list-box-static">
						<?php if (!empty($_GET['id']) && $_GET['id'] == get_session('user_id')) : ?>

						<!-- Details -->
						<form action="" method="post">
						<div class="my-profile">
							<div class=" col-lg-6 col-col-md-12">
							<label>Votre Nom *</label>
							<input  type="text"  name="name" placeholder="Votre nom" value="<?= get_input('name') ? get_input('name') : e($user->name) ?>" required="required">
						</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Prénom *</label>
							<input  type="text" name="prenom" placeholder="Votre prénom"  value="<?=  get_input('prenom') ? get_input('prenom') : e($user->prenom) ?>" required="required">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Sexe *</label>
							<select class="chosen-select-no-single" name="sexe">
								<option  value="H" <?= $user->sexe == 'H' ? "selected" : "" ?>>Homme</option>
								<option  value="F" <?= $user->sexe == 'F' ? "selected" : "" ?>>Femme</option>
							</select>
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Date de naissance</label>
							<input  type="date" placeholder="Exemple : 09/12/2019" name="birthday"  value="<?=  get_input('birthday') ? get_input('birthday') : e($user->birthday) ?>"  required="required">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Téléphone *</label>
							<input  type="text" placeholder="+12 345 678 910" name="tel" value="<?=  get_input('tel') ? get_input('tel') : e($user->tel) ?>" required="required">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Adresse E-mail *</label>
							<input  type="text" placeholder="crescens@domain.com" name="email" value="<?=  get_input('email') ? get_input('email') : e($user->email) ?>" required="required">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Aresse physique</label>
							<input type="text" name="lieu" placeholder="Eg: Charbonnage, Libreville, Gabon" value="<?=  get_input('lieu') ? get_input('lieu') : e($user->lieu) ?>" required="required">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Votre établissemnt</label>
							<input  type="text" placeholder="Eg: Institut Africain D'informatique"   name="ecole" value="<?=  get_input('ecole') ? get_input('ecole') : e($user->ecole) ?>">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Votre emploi</label>
							<input  type="text" placeholder="Eg: Programmeur" name="emploi" value="<?=  get_input('emploi') ? get_input('emploi') : e($user->emploi) ?>">
							</div>
							<div class=" col-lg-6 col-col-md-12">
							<label>Adresse postal</label>
							<input  type="text" placeholder="Eg: 2298" name="postal" value="<?=  get_input('postal') ? get_input('postal') : e($user->postal) ?>">
							</div>
							<div class=" col-lg-12 col-col-md-12">
							<label>Contact d'urgence</label>
							<input  type="text" placeholder="+12 345 678 910" name="urgence" value="<?=  get_input('urgence') ? get_input('urgence') : e($user->urgence) ?>">
							</div>
							<div class=" col-lg-12 col-col-md-12">
							<label>Notes</label>
							<textarea  id="notes" cols="30" rows="10" placeholder="Eg: Je suis un entrepreneur" name="description" required="required" value="<?=  get_input('description') ? get_input('description') : e($user->description) ?>"></textarea>
							</div>
						</div>

						<button type="submit" class="button margin-top-15" name="update">Mettre à jour</button>
						</form>

					</div>
					<?php endif; ?>
				</div>
			</div>




<?php include('partials/_footer.php'); ?>
