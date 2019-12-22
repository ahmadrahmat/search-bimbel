<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Province</h1>
<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block"><?= ucfirst($page) ?> Province</h6>
		<div style="float: right">
			<a href="<?= site_url('province') ?>" class="btn btn-sm btn-warning">
				<i class="fa fa-user-undo"></i> Back
			</a>
		</div>
	</div>
	<div class="card-body">
		<form action="<?= site_url('province/process') ?>" method="POST">
			<div class="form-group">
				<label>Nama <sup class="text-danger">*</sup></label>
				<input type="hidden" name="id" value="<?= $row->id ?>">
				<input type="text" name="name" value="<?= $row->name ?>" class="form-control" required>
			</div>
			<div class="form-group">
				<button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
					<i class="fa fa-paper-plane"></i> Save</button>
				<button type="reset" class="btn btn-flat">Reset</button>
			</div>
		</form>
	</div>
</div>
