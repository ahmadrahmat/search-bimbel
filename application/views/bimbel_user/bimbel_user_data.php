<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Bimbel User</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Bimbel User</h6>
		<div style="float: right">
			<a href="<?= site_url('bimbel_user/add') ?>" class="btn btn-sm btn-primary">
				<i class="fa fa-user-plus"></i> Create
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Type / Role</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= $data->username ?></td>
							<td><?= $data->name ?></td>
							<td>
								<?php if($data->bimbel_user_type_id == 1) { 
									echo 'superadmin';
								} elseif($data->bimbel_user_type_id == 2) {
									echo 'owner';
								} elseif($data->bimbel_user_type_id == 3) {
									echo 'tutor';
								} elseif($data->bimbel_user_type_id == 4) {
									echo 'siswa';
								} ?>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
