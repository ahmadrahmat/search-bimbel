<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Enrollment History</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Enrollment History</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Status</th>
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
								<?php if($data->status == 2) { 
									echo '<label><i class="badge badge-success">Finished</i></label>';
								} elseif($data->status == 3) {
									echo '<label><i class="badge badge-danger">Rejected</i></label>';
								} ?>
							</td>
							<td><?= $data->subject_type_name ?></td>
							<td><?= $data->subject_name ?></td>
							<td><?= $this->fungsi->get_student_name($data->student_id)->name ?></td>
							<td>
								<?php 
									$num = 1;
									$query = $this->db->query("SELECT * FROM subject_tutor WHERE subject_id = $data->subject_id");
									foreach ($query->result() as $value => $val) : 
								?>
								<?= $val->tutor_id != 0 || $val->tutor_id != null ? $num++.'.'. $this->fungsi->get_tutor_name($val->tutor_id)->name : '' ?>
								<?php endforeach ?>
							</td>
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
