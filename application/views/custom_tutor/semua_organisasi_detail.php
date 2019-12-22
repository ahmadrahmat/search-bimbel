<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Detail Bimbel</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Detail Bimbel</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama</th>
						<th>Deskripsi</th>
						<th>Subject Type</th>
						<th>Organisasi</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= $data->name ?></td>
							<td><?= $data->description ?></td>
							<td><?= $data->subject_type_name ?></td>
							<td><?= $data->organization_name ?></td>
							<td class="text-center" style="width: 15%">
								<a class="btn btn-sm btn-success" href="<?=site_url('controller_tutor/process_daftar_organisasi/'.$data->organization_id.'/'.$tutor->row()->id)?>">
									<i class="fa fa-plus-square"></i> Daftar 
					</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
