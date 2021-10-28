<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/listeo2/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 10:59:27 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Tkhome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Favicon -->
<link rel="shortcut icon" href="asset/images/favicon.ico">
<link rel="icon" href="asset/images/favicon.ico" type="image/x-icon">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="asset/css/style.css">
<link rel="stylesheet" href="asset/css/main-color.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<!-- Logo -->
				<div id="logo">
					<a href="index.php"><img src="asset/images/logo.png" alt="logo de l'entreprise"></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
						<?php if (is_logged_in()): ?>
						<?php else: ?>
					<ul id="responsive">
							<li><a class="current" href="index.php">Accueil</a></li>

							<li><a href="login.php"><i class="sl sl-icon-login"></i> Se connecter</a></li>

					</ul>
					<?php endif; ?>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<?php if (is_logged_in()): ?>
        <!-- User Menu -->
        <div class="user-menu">
          <div class="user-name"><span><img src="admin_section/img/profil/avatar.png" width="60" height="40" alt="image de de l'utilisateur"></span>Hi, <?= e($_SESSION['name']." ".$_SESSION['prenom']) ?>!</div>
          <ul>
            <li><a href="admin_section/dashboard.php?id=<?= get_session('user_id')?>"><i class="sl sl-icon-settings"></i> Profil</a></li>
            <li><a href="admin_section/gerer.php"><i class="fa fa-calendar-check-o"></i> Gerer un bien</a></li>
            <li><a href="admin_section/logout.php"><i class="sl sl-icon-power"></i> Se deconnecter</a></li>
          </ul>
        </div>
			 <a href="admin_section/ajout.php" class="button border with-icon">Ajouter <i class="sl sl-icon-plus"></i></a>
			<?php else: ?>
			<div class="right-side">
				<div class="header-widget">
					<a href="admin_section/ajout.php" class="button border with-icon">Ajouter <i class="sl sl-icon-plus"></i></a>
				</div>
			</div>
			<?php endif; ?>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
