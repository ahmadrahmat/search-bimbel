<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Ongoing Enrollment</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">Ongoing Enrollment</h6>
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
								<?php if ($data->status == 1) : ?>
									<button type="button" class="btn btn-sm btn-success" data-target="#finished<?= $data->id ?>" data-toggle="modal">
										<i class="fa fa-check"></i> Finish
									</button>
								<?php endif ?>
								<!-- <a href="#!" class="btn btn-sm btn-info">
									<i class="fa fa-eye"></i> Detail
								</a> -->
								<a href="<?= site_url('ongoing_enrollment_edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
									<i class="fa fa-pen"></i> Edit
								</a>
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
									<?= $val->tutor_id != 0 || $val->tutor_id != null ? $num++ . '.' . $this->fungsi->get_tutor_name($val->tutor_id)->name : '' ?>
								<?php endforeach ?>
							</td>
							<td><?= $data->start_date ?></td>
							<td><?= $data->end_date ?></td>
							<td><?= $data->duration ?> Jam</td>
							<td><?= $data->num_of_meeting ?> Kali</td>
							<td><?= $data->phone ?></td>
							<td><?= $data->note ?></td>
						</tr>
						<div class="modal fade" id="finished<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Finish data ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
										<a href="<?= site_url('controller_owner/finish/' . $data->id) ?>" class="btn btn-sm btn-success">Finish</a>
									</div>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
