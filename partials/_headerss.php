<!DOCTYPE html>

<!-- Mirrored from www.vasterad.com/themes/listeo2/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Mar 2019 10:59:27 GMT -->
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
					<a href="index.php"><img src="asset/images/logo.png" alt=""></a>
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
          <div class="header-widget">
            <!-- User Menu -->
            <div class="user-menu">
              <div class="user-name"><span><img src="admin_section/img/profil/<?= e($_SESSION['imagee']) ?>" width="60" height="40" alt="image de de l'utilisateur"></span>Hi, <?= e($_SESSION['name']." ".$_SESSION['prenom']) ?>!</div>
              <ul>
                <li><a href="admin_section/dashboard.php?id=<?= get_session('user_id')?>"><i class="sl sl-icon-settings"></i> Profile</a></li>
                <li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
                <li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
                <li><a href="admin_section/logout.php"><i class="sl sl-icon-power"></i> Se deconnecter</a></li>
              </ul>
            </div>
          </div>
          <?php else: ?>
					<ul id="responsive">

						<li><a class="current" href="login.php">Se connecter</a>
						</li>

					</ul>
          <?php endif; ?>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->

			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget">
					<a href="admin_section/ajout.php" class="button border with-icon">Ajouter un bien <i class="sl sl-icon-plus"></i></a>
				</div>
			</div>
			<!-- Right Side Content / End -->


		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->
