<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Akun</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Akun</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Username</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Alamat</th>
						<th>Kota / Provinsi</th>
						<th>Type / Role</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= $data->username ?></td>
							<td><?= $data->name ?></td>
							<td><?= $data->email ?></td>
							<td><?= $data->phone ?></td>
							<td><?= $data->address ?></td>
							<td><?= $data->city_name.' / '.$data->province_name ?></td>
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
							<td class="text-center">
								<a href="<?= site_url('akun/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
									<i class="fa fa-pen"></i> Update
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
