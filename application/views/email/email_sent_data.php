<?php date_default_timezone_set('Asia/Jakarta'); ?>
<!-- Main content -->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<a href="<?= site_url('email/compose') ?>" class="btn btn-primary btn-block mb-3">Compose</a>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Chat</h3>
					</div>
					<div class="card-body p-0">
						<ul class="nav nav-pills flex-column">
							<li class="nav-item <?= $this->uri->segment(1) == 'email' ? 'active' : '' ?>">
								<a href="<?= site_url('email') ?>" class="nav-link <?= $this->uri->segment(2) == '' ? 'active' : '' ?>">
									<i class="fas fa-inbox"></i> Inbox
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('email/sent') ?>" class="nav-link <?= $this->uri->segment(2) == 'sent' ? 'active' : '' ?>">
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
						<h3 class="card-title">Sent</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="table-responsive mailbox-messages">
							<table class="table table-hover table-striped" id="dataTable">
								<thead>
									<tr>
										<th>No</th>
										<th>To</th>
										<th>Subject</th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; foreach ($row->result() as $key => $data) : ?>
										<tr>
											<td class="mailbox-number"><?= $no++; ?></td>
											<td class="mailbox-name"><a href="<?= site_url('email/read_sent/' . $data->id) ?>"><?= $data->bimbel_user_name ?></a></td>
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
