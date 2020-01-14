<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!-- Main content -->
<!-- Inner Header -->
<!-- <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">My Mail</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">My Account</a>  /  <span class="text-success">Inbox</span></p>
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
				<a href="<?= site_url('home/compose') ?>" class="btn btn-primary btn-block mb-3">Compose</a>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Chat</h3>
					</div>
					<div class="card-body p-0">
						<ul class="nav nav-pills flex-column">
							<li class="nav-item <?= $this->uri->segment(2) == 'email' ? 'active' : '' ?>">
								<a href="<?= site_url('home/email') ?>" class="nav-link <?= $this->uri->segment(2) == 'email' ? 'active' : '' ?>">
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
						<h3 class="card-title">Inbox</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive mailbox-messages">
							<table class="table table-hover table-striped" id="dataTable">
								<thead>
									<tr>
										<th>No</th>
										<th>From</th>
										<th>Subject</th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($row->result() as $key => $data) : ?>
										<tr>
											<td class="mailbox-number"><?= $no++; ?></td>
											<td class="mailbox-name">
												<a href="<?= site_url('home/read/' . $data->id) ?>" style='color: black;'><?= $data->bimbel_user_name ?></a>
												<?php if ($data->status == '0') : ?>
													<span class="badge badge-danger badge-counter">1</span>
												<?php endif ?>
											</td>
											<td class="mailbox-subject"><b><?= $data->subject ?></b></td>
											<td class="mailbox-date"><?= timeAgo(strtotime($data->time)) . ' ago' ?></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
							<!-- /.table -->
						</div>
						<!-- /.mail-box-messages -->
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
</section>
<!-- /.content -->
