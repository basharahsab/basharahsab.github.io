<?php $pageTitle= "Single Project";
  include("includes/head.php"); ?>


<body>
<?php $activePage= "projects";
  include("includes/headermenuarea.php") ;?>

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Event Details</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="events.html">Events</a>
						<a href="event-details.html">Event Details</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->


	<!--================ Start Recent Event Area =================-->
	<section class="event_details section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<img src="img/event-details.jpg" alt="" class="img-fluid">
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="event_content">
						<div class="row">
							<div class="col-lg-4">
								<div class="left_content">
									<p>
										<i class="lnr lnr-calendar-full"></i>
										Saturday, 5th may, 2018
									</p>
									<p>
										<i class="lnr lnr-apartment"></i>
										Rocky beach Church
									</p>
									<p>
										<i class="lnr lnr-location"></i>
										Los Angeles, USA
									</p>
								</div>
							</div>
							<div class="col-lg-8">
								<div class="right_content">
									<h3>Spreading Peace to wvorld</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
										Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
										sint occaecat cupidatat non proident.</p>
									<p>sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Recent Event Area =================-->
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
