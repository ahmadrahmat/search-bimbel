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
								<a href="<?= site_url('email') ?>" class="nav-link <?= $this->uri->segment(1) == 'email' ? 'active' : '' ?>">
									<i class="fas fa-inbox"></i> Inbox
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= site_url('email/sent') ?>" class="nav-link">
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
						<h3 class="card-title">Compose New Message</h3>
					</div>
					<!-- /.card-header -->
					<form action="<?= site_url('email/process') ?>" method="POST">
						<div class="card-body">
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?= $row->id ?>">
								<select id="contact" class="form-control select2 no-radius" name="send_to">
									<option value="">To:</option>
									<?php foreach ($contact->result() as $key => $data) : ?>
										<option value="<?= $data->id ?>" <?= $data->id == $row->send_by ? 'selected' : '' ?>><?= $data->name ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<div class="form-group">
								<input class="form-control" name="subject" placeholder="Subject:" value="<?= $row->subject ?>">
							</div>
							<div class="form-group">
								<textarea id="compose-textarea" class="form-control" name="message" style="height: 300px">
								<?= $row->message ?>
								</textarea>
							</div>
						</div>
						<!-- /.card-body -->
						<div class="card-footer">
							<div class="float-right">
								<button name="<?= $page ?>" type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
							</div>
						</div>
					</form>
					<!-- /.card-footer -->
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</section>
