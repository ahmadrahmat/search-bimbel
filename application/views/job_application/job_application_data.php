<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Job Application</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Job Application</h6>
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
						<th>Approved</th>
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
							<td><?= $data->approved == 1 ? '<label><i class="badge badge-success">Approved</i></label>' : '<label><i class="badge badge-warning">Waiting</i></label>' ?></td>
							<td><?= $data->organization_name ?></td>
							<td><?= $data->bimbel_user_name ?></td>
							<td class="text-center" style="width: 25%">
							<?php if($data->approved != 1) : ?>
								<a href="<?= site_url('job_application/approved/' . $data->id) ?>" class="btn btn-sm btn-success" onclick="return confirm('Approved data ini?')">
									<i class="fa fa-check"></i> Approved
								</a>
							<?php endif ?>
							<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 3) : ?>
								<a href="<?= site_url('job_application/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
									<i class="fa fa-pen"></i> Update
								</a>
							<?php endif ?>
								<a href="<?= site_url('job_application/delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
									<i class="fa fa-trash"></i> Delete
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
