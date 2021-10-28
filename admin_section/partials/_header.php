<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/listeo2/dashboard-my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 11:02:32 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Tkhome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="shortcut icon" href="../asset/images/favicon.ico">
<link rel="icon" href="../asset/images/favicon.ico" type="image/x-icon">
<!-- CSS
================================================== -->
<link rel="stylesheet" href="../asset/css/style.css">
<link rel="stylesheet" href="../asset/css/main-color.css" id="colors">
<link rel="stylesheet" href="../asset/css/noti.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">

			<!-- Left Side Content -->
			<div class="left-side">

				<div id="logo">
					<a href="dashboard.php"><img src="../asset/images/logo.png" alt=""></a>
					<a href="dashboard.php" class="dashboard-logo"><img src="../asset/images/logo2.png" alt=""></a>
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
					<ul id="responsive">

						<li><a href="../index.php">TKHOME</a>
						</li>
						<li><a href="dashboard.php">Profil</a></li>


						<li><a class="current" href="#">Publications</a>
							<ul>
								<li><a href="ajout.php">Ajouter un Bien</a></li>
								<li><a href="gerer.php">Gerer un Bien</a></li>
							</ul>
						</li>

					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">

					<!-- User Menu -->
					<div class="user-menu">
						<div class="user-name"><span>
							<img src="img/profil/avatar.png" width="60" height="40" alt="Image de l'utilisateur"></span>Hi, <?= e($_SESSION['name'])?> !</div>
						<ul>
							<li><a href="change_password.php"><i class="sl sl-icon-settings"></i>Mot de passe</a></li>
							<li><a href="logout.php"><i class="sl sl-icon-envelope-open"></i> Se déconnecter</a></li>
						</ul>
					</div>

					
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" ></a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

	</div>
	</div>
	<!-- Navigation / End -->
