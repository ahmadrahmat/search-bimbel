<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Enrollment</h1>
<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block"><?= ucfirst($page) ?> Enrollment</h6>
		<div style="float: right">
			<a href="<?= site_url('enrollment') ?>" class="btn btn-sm btn-warning">
				<i class="fa fa-user-undo"></i> Back
			</a>
		</div>
	</div>
	<div class="card-body">
		<form action="<?= site_url('enrollment/process') ?>" method="POST">
			<div class="form-group">
				<label>Jumlah Pertemuan <sup class="text-danger">*</sup></label>
				<input type="hidden" name="id" value="<?= $row->id ?>">
				<input type="text" name="num_of_meeting" value="<?= $row->num_of_meeting ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Siswa <sup class="text-danger">*</sup></label>
				<select name="student_id" class="form-control" required>
					<option value="">- Pilih -</option>
					<?php foreach($student->result() as $key => $data) : ?>
					<option value="<?=$data->id?>" <?=$data->id == $row->student_id ? "selected" : null?>><?=$data->bimbel_user_name?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="form-group">
				<label>Subject <sup class="text-danger">*</sup></label>
				<select name="subject_id" class="form-control" required>
					<option value="">- Pilih -</option>
					<?php foreach($subject->result() as $key => $data) : ?>
					<option value="<?=$data->id?>" <?=$data->id == $row->subject_id ? "selected" : null?>><?=$data->name?></option>
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
