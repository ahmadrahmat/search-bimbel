<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Owner</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Owner</h6>
		<div style="float: right">
			<!-- <a href="<?= site_url('owner/add') ?>" class="btn btn-sm btn-primary">
				<i class="fa fa-user-plus"></i> Create
			</a> -->
		</div>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<!-- <th>Aksi</th> -->
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= $data->bimbel_user_name ?></td>
							<!-- <td class="text-center" style="width: 25%">
								<a href="<?= site_url('owner/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
									<i class="fa fa-pen"></i> Update
								</a>
								<a href="<?= site_url('owner/delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
									<i class="fa fa-trash"></i> Delete
								</a>
							</td> -->
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
