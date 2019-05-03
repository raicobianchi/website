<!DOCTYPE HTML>
<html lang="zxx">
	<head>
		<?php include './header-content.php'; ?>
	</head>
	<body data-spy="scroll" data-target=".header" data-offset="50">
		<?php include './disclaimer.php'; ?>
		<!-- Page loader -->
	    <div id="preloader"></div>
		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="#home"><img src="assets/img/logo.png" alt="logo" class="logoMain" /></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					   	<?php 
					    	$jijos = basename(__FILE__);
					    	include './navbar.php'; 
					    ?>
					</div>
				</div>
			</div>
		</header><!-- header section end -->
		<!-- hero area start -->
		<section class="hero-area" id="home">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="hero-area-content">
							<h1>Investors & Partners</h1>
							<p>Swiss Realty is here to revolutionize the way people invest in Real Estate accross the world. By using the power of new technologies, we are able to open a stable and profitable market to a broader audience than ever before</p>
						</div>
					</div>
					
				</div>
			</div>
		</section><!-- hero area end -->

		<!-- footer section start -->
		<?php include './footer.php'?>

		<a href="#" class="scrollToTop">
			<i class="icofont icofont-arrow-up"></i>
		</a>

		<!-- jquery main JS -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick nav JS -->
		<script src="assets/js/jquery.slicknav.min.js"></script>
		<!-- Slick JS -->
		<script src="assets/js/slick.min.js"></script>
		<!-- owl carousel JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Popup JS -->
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Counter JS -->
		<script src="assets/js/jquery.counterup.min.js"></script>
		<!-- Counterup waypoints JS -->
		<script src="assets/js/waypoints.min.js"></script>
	    <!-- YTPlayer JS -->
	    <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
		<!-- jQuery Easing JS -->
		<script src="assets/js/jquery.easing.1.3.js"></script>
		<!-- Gmap JS -->
		<script src="assets/js/gmap3.min.js"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
		<!-- Custom map JS -->
		<script src="assets/js/custom-map.js"></script>
		<!-- WOW JS -->
		<script src="assets/js/wow-1.3.0.min.js"></script>
		<!-- Switcher JS -->
		<script src="assets/js/switcher.js"></script>
		<!-- main JS -->
		<script src="assets/js/main.js"></script>
	</body>
	<!-- Script to check for the disclaimer cookie -->
	<script type="text/javascript">
		var checkDis = checkDisclaimer();
		if (checkDis == 'yes') {
			document.getElementById('random123').style.display = 'none';
		}
	</script>
</html>