<?php include('partials/_header1.php'); ?>
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand" href="#">
                    <img class="brand-img" src="assets/dist/img/logo-dark.png" alt="Logo de tkhome" />
                </a>
                <div class="btn-group btn-group-sm">
                    <a href="index.php" class="btn btn-outline-secondary">Accueil</a>
                    <a href="login.php" class="btn btn-outline-secondary">Se connecter</a>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div class="auth-cover-img overlay-wrap" style="background-image:url(assets/dist/img/bg1.png);">
                            <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                    <h1 class="display-3 text-white mb-20">Enregistrez vous afin de profiter de tous nos offres</h1>
                                    <p class="text-white">Avec Tkhome regardez le monde de haut.</p>
                                </div>
                            </div>
                            <div class="bg-overlay bg-trans-dark-50"></div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-100">
															<?php include('partials/_flash.php'); ?>
															<?php include('partials/_errors.php'); ?>
                                <form method="post" autocomplete="off">
                                    <h1 class="display-4 mb-10">S'inscrire gratuitement</h1>
                                    <p class="mb-30">Create your account and start your free trial today</p>
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Votre nom"  type="text" value="<?= get_input('name') ?>" name="name" required="required" >
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Votre prénom"  type="text" value="<?= get_input('prenom') ?>" name="prenom" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Adresse mail"  type="email" value="<?= get_input('email') ?>" name="email" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mot de passe" type="password" name="password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirmation de mot de passe" type="password" name="password_confirm" required="required">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
																		<div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Date de naissance" type="date" value="<?= get_input('birthday') ?>" name="birthday" required="required">
                                            <div class="input-group-append">
                                                <span class="input-group-text"></span>
                                            </div>
                                        </div>
                                    </div>
																		<div class="g-recaptcha" data-sitekey="6LdtmpgUAAAAADSTw6OlIaJldtT3eBfx7NB0IaXR"></div>
																		<br/>
                                    <button  class="btn btn-primary btn-block" type="submit" name="register">S'inscrire</button>


                                    <p class="text-center">Déjà membre? <a href="login.php">Se connecter</a></p>
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
