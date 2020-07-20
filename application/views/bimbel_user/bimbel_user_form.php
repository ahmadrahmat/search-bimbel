<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Bimbel User</h1>
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

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Create Bimbel User</h6>
		<div style="float: right">
			<a href="<?= site_url('bimbel_user') ?>" class="btn btn-sm btn-warning">
				<i class="fa fa-user-undo"></i> Back
			</a>
		</div>
	</div>
	<div class="card-body">
		<form action="<?= site_url('bimbel_user/process') ?>" method="POST">
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
				<input type="password" name="password" value="<?= $row->password ?>" class="form-control" required>
				<!-- <small>Biarkan kosong jika tidak diganti.</small> -->
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
						<option value="<?= $data->id ?>" <?= $data->id == $row->city_id ? "selected" : null ?>><?= $data->name ?> - <?= ucfirst(strtolower($data->city_type)) ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Type / Role <sup class="text-danger">*</sup></label>
				<select name="bimbel_user_type_id" class="form-control" required>
					<option value="">- Pilih -</option>
					<?php $query = $this->db->query("SELECT * FROM bimbel_user_type WHERE id = 1 OR id = 2") ?>
					<?php foreach ($query->result() as $key => $data) : ?>
						<option value="<?= $data->id ?>" <?= $data->id == $row->bimbel_user_type_id ? "selected" : null ?>><?= $data->name ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
					<i class="fa fa-paper-plane"></i> Save</button>
				<button type="reset" class="btn btn-flat">Reset</button>
			</div>
		</form>
	</div>
</div>
