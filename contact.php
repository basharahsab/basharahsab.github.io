<?php $pageTitle= "Contact";
  include("includes/head.php"); ?>


<body>
<?php $activePage= "contact";
  include("includes/headermenuarea.php") ;?>

    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="contact.html">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area p_120">
        <div class="container">
            <div id="mapBox" class="mapBox">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Main Branch</h6>
                            <small>Tel Al-Hawa, Opposite that one building</small>
                            <h6>Rafah Branch</h6>
                            <small>Apple Round, Next to your mom's house</small>
                            <h6>Balah Branch</h6>
                            <small>Fruit lane, Salwa Saleh Road</small>
                        </div>
			<br>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>
                                <a href="#">+972 59 512 5692</a>
                            </h6>
                            <small>Main Branch</small>
                            <h6>
                                <a href="#">+972 59 933 0852</a>
                            </h6>
                            <small>Rafah Branch</small>
                            <h6>
                                <a href="#">+972 56 744 8375</a>
                            </h6>
                            <small>Balah Branch</small>
                        </div>
			<br>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6>
                                <a href="#">info@ferdaus.org</a>
                            </h6>
                            <p>Send us an email anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn submit_btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->

        <?php include("includes/footer.html") ?>

    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->

    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->




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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7nx22ZmINYk9TGiXDEXGVxghC43Ox6qA"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
