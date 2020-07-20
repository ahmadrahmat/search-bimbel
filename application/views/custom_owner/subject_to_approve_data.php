<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">New Enrollment</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary">New Enrollment</h6>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>No.</th>
						<th>Action</th>
						<th>Subject Type</th>
						<th data-toggle="tooltip" title="click subject’s name to edit subject">Subject</th>
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
								<?php if ($data->status == 0) : ?>
									<?php
									$this->db->select('subject.id as subject_id');
									$this->db->from('subject');
									$this->db->join('subject_tutor', 'subject.id = subject_tutor.subject_id');
									$this->db->join('job_application', 'job_application.tutor_id = subject_tutor.tutor_id');
									$this->db->where('job_application.approved', '1');
									$this->db->where('subject.id', $data->subject_id);

									$sql = $this->db->get()->num_rows();
									if ($sql > 0) :
									?>
										<button type="button" class="btn btn-sm btn-success" data-target="#approved<?= $data->id ?>" data-toggle="modal">
											<i class="fa fa-check"></i> Approve
										</button>

									<?php endif ?>
								<?php endif ?>
								<!-- <a href="#!" class="btn btn-sm btn-info">
									<i class="fa fa-eye"></i> Detail
								</a> -->
								<a href="<?= site_url('new_enrollment_edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
									<i class="fa fa-pen"></i> Edit
								</a>
								<button type="button" class="btn btn-sm btn-warning" data-target="#rejected<?= $data->id ?>" data-toggle="modal">
									<i class="fa fa-ban"></i> Reject
								</button>
								<!-- <a href="<?= site_url('controller_owner/subject_to_approve_delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
									<i class="fa fa-trash"></i> Delete
								</a> -->
							</td>
							<td><?= $data->subject_type_name ?></td>
							<td><a href="<?= site_url('subject/edit/' . $data->subject_id) ?>"><?= $data->subject_name ?></a></td>
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
						<div class="modal fade" id="approved<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Approve data ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
										<a href="<?= site_url('controller_owner/approved/' . $data->id) ?>" class="btn btn-sm btn-success">Approve</a>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="rejected<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Reject data ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
										<a href="<?= site_url('controller_owner/reject/' . $data->id) ?>" class="btn btn-sm btn-warning">Reject</a>
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
