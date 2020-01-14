<!-- Inner Header -->
<!-- <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">My Mail</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">My Account</a>  /  <span class="text-success">Read Inbox</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section> -->
      <!-- End Inner Header -->
      
      <!-- User Profile -->
      <section class="section-padding">
         <div class="container">
		<div class="row">
			<div class="col-md-3">
				<a href="<?= site_url('home/email') ?>" class="btn btn-primary btn-block mb-3">Back To Inbox</a>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Chat</h3>
					</div>
					<div class="card-body p-0">
						<ul class="nav nav-pills flex-column">
							<li class="nav-item <?= $this->uri->segment(2) == 'read' ? 'active' : '' ?>">
								<a href="<?= site_url('home/email') ?>" class="nav-link <?= $this->uri->segment(2) == 'read' ? 'active' : '' ?>">
									<i class="fas fa-inbox"></i> Inbox
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('home/sent') ?>" class="nav-link">
									<i class="far fa-envelope"></i> Sent
								</a>
							</li>
						</ul>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h3 class="card-title">Read Mail</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body p-3">
						<div class="mailbox-read-info">
							<h5><?= $row->subject ?></h5>
							<h6>From: <?= $row->bimbel_user_name ?>
								<span class="mailbox-read-time float-right"><?= tgl_ind($row->time) ?></span></h6>
						</div>
						<div class="mailbox-read-message">
							<?= $row->message ?>
						</div>
						<!-- /.mailbox-read-message -->
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<div class="float-right">
							<a href="<?= site_url('home/reply/' . $row->id) ?>" class="btn btn-primary"><i class="fas fa-reply"></i> Reply</a>
						</div>
					</div>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
</section>
