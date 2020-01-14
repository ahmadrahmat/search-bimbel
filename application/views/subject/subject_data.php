<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Subject</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Subject</h6>
		<div style="float: right">
			<a href="<?= site_url('subject/add') ?>" class="btn btn-sm btn-primary">
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
						<th>Nama</th>
						<th>Deskripsi</th>
						<th>Subject Type</th>
						<th>Organisasi</th>
						<th>Tutor</th>
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
							<td>
<<<<<<< HEAD
								<?php
								$num = 1;
								$query = $this->db->query("SELECT * FROM subject_tutor WHERE subject_id = $data->id");
								foreach ($query->result() as $value => $val) :
								?>
									<?= $val->tutor_id != 0 || $val->tutor_id != null ? $num++ . '. ' . $this->fungsi->get_tutor_name($val->tutor_id)->name . '<br>' : '' ?>
=======
								<?php 
									$num = 1;
									$query = $this->db->query("SELECT * FROM subject_tutor WHERE subject_id = $data->id");
									foreach ($query->result() as $value => $val) : 
								?>
								<?= $val->tutor_id != 0 || $val->tutor_id != null ? $num++.'. '. $this->fungsi->get_tutor_name($val->tutor_id)->name .'<br>' : '' ?>
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
								<?php endforeach ?>
							</td>
							<td class="text-center" style="width: 25%">
								<a href="<?= site_url('subject/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
									<i class="fa fa-pen"></i> Update
								</a>
								<?php if ($query->num_rows() == 0) : ?>
									<a href="<?= site_url('subject/delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
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
