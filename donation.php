<?php $pageTitle= "Donation";
  include("includes/head.php"); ?>

<body>
<?php $activePage= "donation";
  include("includes/headermenuarea.php") ;?>

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="overlay"></div>
			<div class="container">
				<div class="banner_content text-center">
					<h2>Make Donation</h2>
					<div class="page_link">
						<a href="index.html">Home</a>
						<a href="donation.html">Donation</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================ Start Make Donation Area =================-->
	<section class="make_donation section_gap">
		<div class="container">
			<div class="row justify-content-start section-title-wrap">
				<div class="col-lg-12">
					<h1>Make a Donation Today</h1>
					<p>
						Las Vegas has more than 100,000 hotel rooms to choose from. There is something for every budget, and enough.
					</p>
				</div>
			</div>

			<div class="donate_now_wrapper">
				<form>
					<div class="row">
						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="ten_doller">
									<label class="form-check-label d-flex justify-content-between" for="ten_doller">
										<div class="label_text">
											$10.00
										</div>
										<div class="label_text">
											USD
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="fifty_doller">
									<label class="form-check-label d-flex justify-content-between" for="fifty_doller">
										<div class="label_text">
											$50.00
										</div>
										<div class="label_text">
											USD
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box mb-30">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="hundred_doller">
									<label class="form-check-label d-flex justify-content-between" for="hundred_doller">
										<div class="label_text">
											$100.00
										</div>
										<div class="label_text">
											USD
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<div class="form-check">
									<input type="radio" class="form-check-input" name="donation" id="two_fifty__doller">
									<label class="form-check-label d-flex justify-content-between" for="two_fifty__doller">
										<div class="label_text">
											$250.00
										</div>
										<div class="label_text">
											USD
										</div>
									</label>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<div class="form-group">
									<input type="text" placeholder="Others" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Others'" class="form-control">
									<span class="fs-14">USD</span>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="donate_box">
								<button type="submit" class="main_btn w-100">donate now</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!--================ End Make Donation Area =================-->
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
