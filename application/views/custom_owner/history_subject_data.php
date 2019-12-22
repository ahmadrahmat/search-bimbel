<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">History Subject</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">History Subject</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Action</th>
						<th>Subject Type</th>
						<th>Subject</th>
						<th>Student</th>
						<th>Tutor</th>
						<th>Tgl. Mulai</th>
						<th>Tgl. Selesai</th>
						<th>Durasi</th>
						<th>Num. Of Meeting</th>
						<th>Phone</th>
						<th>Note</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td>
								<a href="<?= site_url('controller_owner/subject_to_approve_delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
									<i class="fa fa-trash"></i> Delete
								</a>
							</td>
							<td><?= $data->subject_type_name ?></td>
							<td><?= $data->subject_name ?></td>
							<td><?= $this->fungsi->get_student_name($data->student_id)->name ?></td>
							<td><?= $this->fungsi->get_tutor_name($data->tutor_id)->name ?></td>
							<td><?= $data->start_date ?></td>
							<td><?= $data->end_date ?></td>
							<td><?= $data->duration ?> Jam</td>
							<td><?= $data->num_of_meeting ?> Kali</td>
							<td><?= $data->phone ?></td>
							<td><?= $data->note ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>