<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">
	<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 2) : ?>
		Tutor
	<?php else : ?>
		Job Application
	<?php endif ?>
</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">
			<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 2) : ?>
				Tutor
			<?php else : ?>
				Job Application
			<?php endif ?>
		</h6>
		<!-- <div style="float: right">
			<a href="<?= site_url('job_application/add') ?>" class="btn btn-sm btn-primary">
				<i class="fa fa-user-plus"></i> Create
			</a>
		</div> -->
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Status</th>
						<th>Nama Organisasi</th>
						<th>Tutor</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td>
								<?php if($data->approved == 0) {
									echo '<label><i class="badge badge-warning">Waiting</i></label>';
								} elseif($data->approved == 1) {
									echo '<label><i class="badge badge-success">Approved</i></label>';
								} elseif($data->approved == 2) {
									echo '<label><i class="badge badge-warning">Inactive</i></label>';
								} elseif($data->approved == 3) {
									echo '<label><i class="badge badge-danger">Rejected</i></label>';
								} ?>
							</td>
							<td><?= $data->organization_name ?></td>
							<td><?= $data->bimbel_user_name ?></td>
							<td class="text-center" style="width: 25%">
								<?php if($data->approved == 0) { ?>
									<a href="<?= site_url('job_application/approved/' . $data->id) ?>" class="btn btn-sm btn-success" onclick="return confirm('Approved tutor ini?')">
										<i class="fa fa-check"></i> Approve
									</a>
									<a href="<?= site_url('job_application/inactive/' . $data->id) ?>" class="btn btn-sm btn-warning" onclick="return confirm('Inactive tutor ini?')">
										<i class="fa fa-exclamation"></i> Inactive
									</a>
									<a href="<?= site_url('job_application/rejected/' . $data->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Reject tutor ini?')">
										<i class="fa fa-ban"></i> Reject
									</a>
								<?php } if($data->approved == 1) { ?>
									<a href="<?= site_url('job_application/inactive/' . $data->id) ?>" class="btn btn-sm btn-warning" onclick="return confirm('Inactive tutor ini?')">
										<i class="fa fa-exclamation"></i> Inactive
									</a>
									<a href="<?= site_url('job_application/rejected/' . $data->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Reject tutor ini?')">
										<i class="fa fa-ban"></i> Reject
									</a>
								<?php } if($data->approved == 2) { ?>
									<a href="<?= site_url('job_application/approved/' . $data->id) ?>" class="btn btn-sm btn-success" onclick="return confirm('Approved tutor ini?')">
										<i class="fa fa-check"></i> Approve
									</a>
									<a href="<?= site_url('job_application/rejected/' . $data->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Reject tutor ini?')">
										<i class="fa fa-ban"></i> Reject
									</a>
								<?php } if($data->approved == 3) { ?>
									<a href="<?= site_url('job_application/approved/' . $data->id) ?>" class="btn btn-sm btn-success" onclick="return confirm('Approved tutor ini?')">
										<i class="fa fa-check"></i> Approve
									</a>
									<a href="<?= site_url('job_application/inactive/' . $data->id) ?>" class="btn btn-sm btn-warning" onclick="return confirm('Inactive tutor ini?')">
										<i class="fa fa-exclamation"></i> Inactive
									</a>
								<?php } ?>
								
								
								
								
								<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 3) : ?>
									<a href="<?= site_url('job_application/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
										<i class="fa fa-pen"></i> Update
									</a>
									<a href="<?= site_url('job_application/delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
										<i class="fa fa-trash"></i> Delete
									</a>
								<?php endif ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
