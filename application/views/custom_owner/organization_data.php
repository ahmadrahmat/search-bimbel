<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Organization</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Organization</h6>
		<!-- <div style="float: right">
			<a href="<?= site_url('controller_owner/add') ?>" class="btn btn-sm btn-primary">
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
						<th>Nama</th>
						<th>Alamat</th>
						<th>Phone</th>
						<th>payment</th>
						<th>Owner</th>
						<th>Activated</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= $data->name ?></td>
							<td><?= $data->address ?></td>
							<td><?= $data->phone ?></td>
							<td><?= $data->payment ?></td>
							<td><?= $data->bimbel_user_name ?></td>
							<td><?= $data->activated == 0 ? 'False' : 'True' ?></td>
							<td class="text-center" style="width: 15%">
								<a href="<?= site_url('controller_owner/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
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
