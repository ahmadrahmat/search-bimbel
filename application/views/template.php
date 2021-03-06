<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>SB Admin - <?= ucwords(str_replace('_', ' ', $this->uri->segment(1))) ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link rel="stylesheet" href="<?= base_url() ?>assets/summernote/summernote-bs4.css">
	<link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/select2/css/select2.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('home') ?>" target="_blank">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-laugh-wink"></i>
				</div>
				<div class="sidebar-brand-text mx-3">SB Admin</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item -->
			<li class="nav-item <?= $this->uri->segment(1) == 'dashboard' ? 'active' : '' ?>">
				<a class="nav-link" href="<?= site_url('dashboard') ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>
			<?php if ($this->fungsi->user_login()->bimbel_user_type_id != 1) : ?>
				<!-- Nav Item -->
				<li class="nav-item <?= $this->uri->segment(1) == 'email' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= site_url('email') ?>">
						<i class="fas fa-fw fa-envelope"></i>
						<span>Email</span></a>
				</li>
			<?php endif ?>
			<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 1) : ?>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item 
			<?= $this->uri->segment(1) == 'bimbel_user' ||
					$this->uri->segment(1) == 'bimbel_user_type' ? 'active' : '' ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDU" aria-expanded="true" aria-controls="collapseDU">
						<i class="fas fa-fw fa-users"></i>
						<span>Data User</span>
					</a>
					<div id="collapseDU" class="collapse 
					<?= $this->uri->segment(1) == 'bimbel_user' ||
						$this->uri->segment(1) == 'bimbel_user_type' ? 'show' : '' ?>" aria-labelledby="headingDU" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<!-- <h6 class="collapse-header"></h6> -->
							<a class="collapse-item <?= $this->uri->segment(1) == 'bimbel_user' ? 'active' : '' ?>" href="<?= site_url('bimbel_user') ?>">Bimbel User</a>
							<!--<a class="collapse-item <?= $this->uri->segment(1) == 'bimbel_user_type' ? 'active' : '' ?>" href="<?= site_url('bimbel_user_type') ?>">Bimbel User Type / Role</a>-->
						</div>
					</div>
				</li>

				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item
			<?= $this->uri->segment(1) == 'owner' ||
					$this->uri->segment(1) == 'tutor' ||
					$this->uri->segment(1) == 'student' ||
					$this->uri->segment(1) == 'bimbel' ||
					$this->uri->segment(1) == 'subject_type' ? 'active' : '' ?>
			">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDM" aria-expanded="true" aria-controls="collapseDM">
						<i class="fas fa-fw fa-database"></i>
						<span>Data Master</span>
					</a>
					<div id="collapseDM" class="collapse
					<?= $this->uri->segment(1) == 'owner' ||
						$this->uri->segment(1) == 'tutor' ||
						$this->uri->segment(1) == 'student' ||
						$this->uri->segment(1) == 'bimbel' ||
						$this->uri->segment(1) == 'subject_type' ? 'show' : '' ?>" aria-labelledby="headingDM" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<!-- <h6 class="collapse-header"></h6> -->
							<a class="collapse-item <?= $this->uri->segment(1) == 'owner' ? 'active' : '' ?>" href="<?= site_url('owner') ?>">Owner</a>
							<a class="collapse-item <?= $this->uri->segment(1) == 'tutor' ? 'active' : '' ?>" href="<?= site_url('tutor') ?>">Tutor</a>
							<a class="collapse-item <?= $this->uri->segment(1) == 'student' ? 'active' : '' ?>" href="<?= site_url('student') ?>">Student</a>
							<a class="collapse-item <?= $this->uri->segment(1) == 'bimbel' ? 'active' : '' ?>" href="<?= site_url('bimbel') ?>">Bimbel</a>
							<a class="collapse-item <?= $this->uri->segment(1) == 'subject_type' ? 'active' : '' ?>" href="<?= site_url('subject_type') ?>">Subject Type</a>
						</div>
					</div>
				</li>

				<!-- Nav Item - Pages Collapse Menu -->
				<!-- <li class="nav-item
			<?= $this->uri->segment(1) == 'job_application' ||
					$this->uri->segment(1) == 'enrollment' ||
					$this->uri->segment(1) == 'subject' ? 'active' : '' ?>
			">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDT" aria-expanded="true" aria-controls="collapseDT">
					<i class="fas fa-fw fa-credit-card"></i>
					<span>Data Transaksi</span>
				</a>
				<div id="collapseDT" class="collapse
					<?= $this->uri->segment(1) == 'job_application' ||
						$this->uri->segment(1) == 'enrollment' ||
						$this->uri->segment(1) == 'subject' ? 'show' : '' ?>" aria-labelledby="headingDT" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item <?= $this->uri->segment(1) == 'job_application' ? 'active' : '' ?>" href="<?= site_url('job_application') ?>">Job Application</a>
						<a class="collapse-item <?= $this->uri->segment(1) == 'enrollment' ? 'active' : '' ?>" href="<?= site_url('enrollment') ?>">Enrollment</a>
						<a class="collapse-item <?= $this->uri->segment(1) == 'subject' ? 'active' : '' ?>" href="<?= site_url('subject') ?>">Subject</a>
					</div>
				</div>
			</li> -->
			<?php endif ?>

			<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 2) : ?>
				<!-- Nav Item -->
				<li class="nav-item <?= $this->uri->segment(1) == 'subject' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= site_url('subject') ?>">
						<i class="fas fa-fw fa-book"></i>
						<span>Subject</span></a>
				</li>
				<!-- Nav Item -->
				<li class="nav-item <?= $this->uri->segment(1) == 'job_application' ? 'active' : '' ?>">
					<a class="nav-link" href="<?= site_url('job_application') ?>">
						<i class="fas fa-fw fa-briefcase"></i>
						<span>Tutor</span></a>
				</li>
				<!-- Nav Item - Pages Collapse Menu -->
				<li class="nav-item
			<?= $this->uri->segment(1) == 'new_enrollment' ||
					$this->uri->segment(1) == 'new_enrollment_edit' ||
					$this->uri->segment(1) == 'ongoing_enrollment' ||
					$this->uri->segment(1) == 'ongoing_enrollment_edit' ||
					$this->uri->segment(1) == 'enrollment_history' ? 'active' : '' ?>
			">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTS" aria-expanded="true" aria-controls="collapseTS">
						<i class="fas fa-fw fa-credit-card"></i>
						<span>Transaksi</span>
					</a>
					<div id="collapseTS" class="collapse
					<?= $this->uri->segment(1) == 'new_enrollment' ||
						$this->uri->segment(1) == 'new_enrollment_edit' ||
						$this->uri->segment(1) == 'ongoing_enrollment' ||
						$this->uri->segment(1) == 'ongoing_enrollment_edit' ||
						$this->uri->segment(1) == 'enrollment_history' ? 'show' : '' ?>" aria-labelledby="headingTS" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?= $this->uri->segment(1) == 'new_enrollment' || $this->uri->segment(1) == 'new_enrollment_edit' ? 'active' : '' ?>" href="<?= site_url('new_enrollment') ?>">New Enrollment</a>
							<a class="collapse-item <?= $this->uri->segment(1) == 'ongoing_enrollment' || $this->uri->segment(1) == 'ongoing_enrollment_edit' ? 'active' : '' ?>" href="<?= site_url('ongoing_enrollment') ?>">Ongoing Enrollment</a>
							<a class="collapse-item <?= $this->uri->segment(1) == 'enrollment_history' ? 'active' : '' ?>" href="<?= site_url('enrollment_history') ?>">Enrollment History</a>
						</div>
					</div>
				</li>
			<?php endif ?>

			<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 3) : ?>
				<!-- Nav Item -->
				<!-- <li class="nav-item <? //= $this->uri->segment(1) == 'semua_organisasi' ? 'active' : '' 
											?>">
				<a class="nav-link" href="<? //= site_url('semua_organisasi') 
											?>">
					<i class="fas fa-fw fa-building"></i>
					<span>Semua Bimbel</span></a>
			</li>
			<li class="nav-item <? //= $this->uri->segment(1) == 'bimbel_yang_sedang_terdaftar' ? 'active' : '' 
								?>">
				<a class="nav-link" href="<? //= site_url('bimbel_yang_sedang_terdaftar') 
											?>">
					<i class="fas fa-fw fa-bookmark"></i>
					<span>Bimbel Yang Sedang Terdaftar</span></a>
			</li>
			<li class="nav-item <? //= $this->uri->segment(1) == 'bimbel_yang_sedang_diajar' ? 'active' : '' 
								?>">
				<a class="nav-link" href="<? //= site_url('bimbel_yang_sedang_diajar') 
											?>">
					<i class="fas fa-fw fa-bookmark"></i>
					<span>Bimbel Yang Sedang Diajar</span></a>
			</li>
			<li class="nav-item <? //= $this->uri->segment(1) == 'akun' ? 'active' : '' 
								?>">
				<a class="nav-link" href="<? //= site_url('akun') 
											?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Akun</span></a>
			</li> -->
			<?php endif ?>

			<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 4) : ?>
				<!-- Nav Item -->
				<!-- <li class="nav-item <? //= $this->uri->segment(1) == 'semua_bimbel' ? 'active' : '' 
											?>">
				<a class="nav-link" href="<? //= site_url('semua_bimbel') 
											?>">
					<i class="fas fa-fw fa-building"></i>
					<span>Semua Bimbel</span></a>
			</li>
			<li class="nav-item <? //= $this->uri->segment(1) == 'bimbel_yang_di_ikuti' ? 'active' : '' 
								?>">
				<a class="nav-link" href="<? //= site_url('bimbel_yang_di_ikuti') 
											?>">
					<i class="fas fa-fw fa-bookmark"></i>
					<span>Bimbel Yang Di Ikuti</span></a>
			</li>
			<li class="nav-item <? //= $this->uri->segment(1) == 'akun' ? 'active' : '' 
								?>">
				<a class="nav-link" href="<? //= site_url('akun') 
											?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Akun</span></a>
			</li> -->
			<?php endif ?>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">
						<?php
						$send_to = $this->fungsi->user_login()->id;
						$sql = $this->db->query("SELECT count(status) as notif FROM email WHERE send_to = $send_to AND status = '0'");
						$query = $this->db->query("SELECT * FROM email WHERE send_to = $send_to AND status = '0'");
						?>
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!-- Counter - Alerts -->
								<?php if ($sql->row()->notif != '0') : ?>
									<span class="badge badge-danger badge-counter"><?= $sql->row()->notif ?>+</span>
								<?php else : ?>
									<span class="badge badge-success badge-counter">0</span>
								<?php endif ?>
							</a>
							<!-- Dropdown - Alerts -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
									Email Masuk
								</h6>
								<?php if ($query->num_rows() > 0) : ?>
									<?php foreach ($query->result() as $key => $val) : ?>
										<a class="dropdown-item d-flex align-items-center" href="#">
											<div class="mr-3">
												<div class="icon-circle bg-primary">
													<i class="fas fa-envelope text-white"></i>
												</div>
											</div>
											<div>
												<div class="small text-gray-500"><?= tgl_ind($val->time) ?></div>
												<span class="font-weight-bold"><?= $val->subject ?></span>
											</div>
										</a>
									<?php endforeach ?>
								<?php else : ?>
									<a class="dropdown-item d-flex align-items-center" href="#">
										<div>
											<span class="font-weight-bold"><i>tidak ada email masuk</i></span>
										</div>
									</a>
								<?php endif ?>
								<a class="dropdown-item text-center small text-gray-500" href="<?= site_url('email') ?>">Show All Email</a>
							</div>
						</li>
						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->fungsi->user_login()->name ?></span>
								<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= site_url('profile') ?>">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<div class="dropdown-divider"></div>
								<!--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>-->
								<a class="dropdown-item" href="<?= site_url('auth/logout') ?>">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<?= $contents ?>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Search BimBel 2019</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="<?= site_url('auth/logout') ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url() ?>assets/summernote/summernote-bs4.min.js"></script>
	<script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script>
	<script src="<?= base_url() ?>assets/select2/js/select2.min.js"></script>
	<script src="<?= base_url() ?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#contact").autocomplete({
				source: "<?php echo site_url('controller_email/contact/?'); ?>"
			});
		});
	</script>
	<script>
		$(function() {
			//Add text editor
			$('#compose-textarea').summernote({
				height: 300
			})
		})
	</script>
	<script>
		$(document).ready(function() {
			$("#tutor_id").select2();
			$("#contact").select2();
		});
	</script>

</body>

</html>
