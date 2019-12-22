<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Job Application</h1>
<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block"><?= ucfirst($page) ?> Job Application</h6>
		<div style="float: right">
			<a href="<?= site_url('job_application') ?>" class="btn btn-sm btn-warning">
				<i class="fa fa-user-undo"></i> Back
			</a>
		</div>
	</div>
	<div class="card-body">
		<form action="<?= site_url('job_application/process') ?>" method="POST">
			<div class="form-group">
				<label>Approved <sup class="text-danger">*</sup></label>
				<input type="hidden" name="id" value="<?= $row->id ?>">
				<select name="approved" class="form-control" required>
					<option value="0" <?= $row->approved == 0 ? 'selected' : '' ?>>Waiting</option>
					<option value="1" <?= $row->approved == 1 ? 'selected' : '' ?>>Approved</option>
				</select>
			</div>
			<div class="form-group">
				<label>Organisasi <sup class="text-danger">*</sup></label>
				<input type="hidden" name="organization_id" value="<?= $organization->row()->id ?>">
				<input type="text" value="<?= $organization->row()->name ?>" class="form-control" required disabled>
			</div>
			<div class="form-group">
				<label>Tutor <sup class="text-danger">*</sup></label>
				<select name="tutor_id" class="form-control" required>
					<option value="">- Pilih -</option>
					<?php foreach($tutor->result() as $key => $data) : ?>
					<option value="<?=$data->id?>" <?=$data->id == $row->tutor_id ? "selected" : null?>><?=$data->bimbel_user_name?></option>
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
