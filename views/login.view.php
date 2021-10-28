<?php include('partials/_header1.php'); ?>

<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand" href="index.php">
                    <img class="brand-img" src="assets/dist/img/logo-dark.png" alt="brand" />
                </a>
                <div class="btn-group btn-group-sm">
                    <a href="index.php" class="btn btn-outline-secondary">Accueil</a>
                    <a href="register.php" class="btn btn-outline-secondary">S'enregistrer</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                  <div class="col-xl-5 pa-0">
                      <div class="auth-cover-img overlay-wrap" style="background-image:url(assets/dist/img/bg1.png);">
                          <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                              <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                  <h1 class="display-3 text-white mb-20">Trouvez facilement un logement.</h1>
                                  <p class="text-white">Brisez les distances avec Tkhome.</p>
                                  <!--div class="play-wrap">
                                      <a class="play-btn" href="#"></a>
                                      <span>How it works ?</span>
                                  </div-->
                              </div>
                          </div>
                          <div class="bg-overlay bg-trans-dark-50"></div>
                      </div>
                  </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                <form method="post" autocomplete="off">
																	<?php include('partials/_flash.php'); ?>
																	<?php include('partials/_errors.php'); ?>
                                    <h1 class="display-4 mb-10">Bienvenue Sur Tkhome</h1>
                                    <p class="mb-30">Connectez-vous et profitez de tous nos offres.</p>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Nom ou Adresse electronique" type="text" name="identifiant" value="<?= get_input('identifiant') ?>" id="identifiant">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Mot de passe" type="password" name="password" id="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" name="remember_me" id="remember_me">
                                        <label class="custom-control-label font-14" for="same-address">Rester connecter</label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit" name="login">Se connecter</button>

                                    <p class="text-center">Pas encore de compte? <a href="register.php">S'enregistrer'</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

<?php include('partials/_footer1.php'); ?>
