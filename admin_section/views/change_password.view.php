<?php include('partials/_header1.php'); ?>
        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-end align-items-center">
                <div class="btn-group btn-group-sm">

                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 pa-0">
                        <div class="auth-form-wrap pt-xl-0 pt-70">
                            <div class="auth-form w-xl-30 w-sm-50 w-100">
                              <?php include('../partials/_errors.php'); ?>
                                <a class="auth-brand text-center d-block mb-20" href="#">
                                    <img class="brand-img" src="../asset/images/logo-light.png" alt="brand" />
                                </a>
                                <form method="post">
                                    <h1 class="display-5 mb-30 text-center">Changement de mot passe</h1>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Entre votre mot de passe actuel" type="password" name="current_password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Nouveau mot de passe" type="password" name="new_password" required="required">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirmer votre nouveau mot de passe" type="password" name="new_password_confirmation" required="required">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block mb-20" type="submit" name="change_password">Changer de mot de passe</button>
                                    <p class="text-right"><a href="dashboard.php ">Revenir vers le profil</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
    <?php include('partials/_footer1.php'); ?>
