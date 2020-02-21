<?php $pageTitle= "About";
  include("includes/head.php"); ?>


<body>
<?php $activePage= "about";
  include("includes/headermenuarea.php") ;?>

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>About Us</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="about.html">About</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ Start About Us Section =================-->
	<section class="about_us section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="about_img">
						<img class="img-fluid" src="img/about-us.jpg" alt="">
					</div>
				</div>

				<div class="offset-lg-1 col-lg-6">
					<div class="content_wrapper">
						<h1>Ferdaus Association</h1>
						<p>Ever since its establishment in 2017, the Ferdaus Association for Woman and Child has been dedicating its efforts towards a better and more prosperous Palestine, starting with the Gaza Strip
						<p>The Ferdaus Charity strives first and foremost to enrich the most underprivileged groups of Palestine, namely that of Woman and Child</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="bottom_para">
						<h1>Our Mission</h1>
						<p>It's been known for the longest time that Palestine and its people have suffered greatly under an exruciating occupation, usually it's talks about politics, economics, or the general state of the conflict. Many a time has there been a lack of focus on the affected groups of this occupation, woman...</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End About Us Area =================-->


	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<hr>
			</div>
		</div>
	</div>

	<!--================ Start Clients Logo Area =================-->
	<section class="clients_logo_area section_gap">
		<div class="container">
			<div class="clients_slider owl-carousel">
				<div class="item">
					<img src="img/clients-logo/c-logo-1.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-2.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-3.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-4.png" alt="">
				</div>
				<div class="item">
					<img src="img/clients-logo/c-logo-5.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<!--================ End Clients Logo Area =================-->
        <?php include("includes/footer.html") ?>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- <script src="vendors/lightbox/simpleLightbox.min.js"></script> -->
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<!-- <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script> -->
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<!-- <script src="vendors/counter-up/jquery.waypoints.min.js"></script> -->
	<!-- <script src="vendors/flipclock/timer.js"></script> -->
	<!-- <script src="vendors/counter-up/jquery.counterup.js"></script> -->
	<script src="js/mail-script.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>
