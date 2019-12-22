<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Subject To Approve</h1>
<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block"><?= ucfirst($page) ?> Subject To Approve</h6>
		<div style="float: right">
			<a href="<?= site_url('subject_to_approve') ?>" class="btn btn-sm btn-warning">
				<i class="fa fa-user-undo"></i> Back
			</a>
		</div>
	</div>
	<div class="card-body">
		<form action="<?= site_url('controller_owner/subject_to_approve_process') ?>" method="POST">
			<div class="form-group">
				<label>Tanggal Mulai <sup class="text-danger">*</sup></label>
				<input type="hidden" name="id" value="<?= $row->id ?>">
				<input type="date" name="start_date" value="<?= $row->start_date ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Tanggal Akhir <sup class="text-danger">*</sup></label>
				<input type="date" name="end_date" value="<?= $row->end_date ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Waktu Mulai <sup class="text-danger">*</sup></label>
				<input type="text" name="num_of_meeting" value="<?= $row->num_of_meeting ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Durasi <sup class="text-danger">*</sup></label>
				<input type="number" name="duration" value="<?= $row->duration ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Jumlah Pertemuan <sup class="text-danger">*</sup></label>
				<input type="number" name="num_of_meeting" value="<?= $row->num_of_meeting ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Phone <sup class="text-danger">*</sup></label>
				<input type="text" name="phone" value="<?= $row->phone ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Note <sup class="text-danger">*</sup></label>
				<input type="text" name="note" value="<?= $row->note ?>" class="form-control" required>
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
				<label>Status <sup class="text-danger">*</sup></label>
				<input type="hidden" name="id" value="<?= $row->id ?>">
				<select name="status" class="form-control" required>
					<option value="0" <?= $row->status == 0 ? 'selected' : '' ?>>Waiting</option>
					<option value="1" <?= $row->status == 1 ? 'selected' : '' ?>>Approve</option>
					<option value="2" <?= $row->status == 2 ? 'selected' : '' ?>>Finish</option>
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
