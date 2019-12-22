<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Organization</h1>
<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block"><?= ucfirst($page) ?> Organization</h6>
		<div style="float: right">
			<a href="<?= site_url('controller_owner') ?>" class="btn btn-sm btn-warning">
				<i class="fa fa-user-undo"></i> Back
			</a>
		</div>
	</div>
	<div class="card-body">
		<form action="<?= site_url('controller_owner/process') ?>" method="POST">
			<div class="form-group">
				<label>Nama <sup class="text-danger">*</sup></label>
				<input type="hidden" name="id" value="<?= $row->id ?>">
				<input type="text" name="name" value="<?= $row->name ?>" class="form-control" required>
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
				<label>Payment <sup class="text-danger">*</sup></label>
				<input type="text" name="payment" value="<?= $row->payment ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Owner <sup class="text-danger">*</sup></label>
				<select name="owner_id" class="form-control" required>
					<option value="">- Pilih -</option>
					<?php foreach ($owner->result() as $key => $data) : ?>
						<option value="<?= $data->id ?>" <?= $data->id == $row->owner_id ? "selected" : null ?>><?= $data->bimbel_user_name ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Activated <sup class="text-danger">*</sup></label>
				<select name="activated" class="form-control" required>
					<option value="0" <?= $row->activated == 0 ? 'selected' : '' ?>>False</option>
					<option value="1" <?= $row->activated == 1 ? 'selected' : '' ?>>True</option>
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
