<?php if ($this->session->flashdata('username')) : ?>
<div class="alert alert-danger">
 <?= $this->session->flashdata('username'); ?>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
</div>
<?php endif; ?>
<?php if ($this->session->flashdata('email')) : ?>
<div class="alert alert-danger">
 <?= $this->session->flashdata('email'); ?>
 <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
</div>
<?php endif; ?>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<h4>Account</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<form action="<?= site_url('controller_profile/process') ?>" method="POST">
					<div class="form-group">
						<label>Nama <sup class="text-danger">*</sup></label>
						<input type="hidden" name="id" value="<?= $row->id ?>">
						<input type="text" name="name" value="<?= $row->name ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Username <sup class="text-danger">*</sup></label>
						<input type="text" name="username" value="<?= $row->username ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password <sup class="text-danger">*</sup></label>
						<input type="password" name="password" class="form-control">
						<small>Biarkan kosong jika tidak diganti.</small>
					</div>
					<div class="form-group">
						<label>Email <sup class="text-danger">*</sup></label>
						<input type="email" name="email" value="<?= $row->email ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone <sup class="text-danger">*</sup></label>
						<input type="text" name="phone" value="<?= $row->phone ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat <sup class="text-danger">*</sup></label>
						<input type="text" name="address" value="<?= $row->address ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Kota <sup class="text-danger">*</sup></label>
						<select name="city_id" class="form-control" required>
							<option value="">- Pilih -</option>
							<?php foreach ($city->result() as $key => $data) : ?>
								<option value="<?= $data->id ?>" <?= $data->id == $row->city_id ? "selected" : null ?>><?= $data->name ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Type / Role <sup class="text-danger">*</sup></label>
						<input type="hidden" name="bimbel_user_type_id" value="<?= $row->bimbel_user_type_id ?>" required>
						<input type="text" value="<?= $row->bimbel_user_type_name ?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
							<i class="fa fa-paper-plane"></i> Save</button>
						<button type="reset" class="btn btn-flat">Reset</button>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
