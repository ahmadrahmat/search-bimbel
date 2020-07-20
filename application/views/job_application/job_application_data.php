<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">
	<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 2) : ?>
		Tutor
	<?php else : ?>
		Job Application
	<?php endif ?>
</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">
			<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 2) : ?>
				Tutor
			<?php else : ?>
				Job Application
			<?php endif ?>
		</h6>
		<!-- <div style="float: right">
			<a href="<?= site_url('job_application/add') ?>" class="btn btn-sm btn-primary">
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
						<th>Status</th>
						<th>Tutor</th>
						<th>No. Telpon</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td>
								<?php if ($data->approved == 0) {
									echo '<label><i class="badge badge-warning">Waiting</i></label>';
								} elseif ($data->approved == 1) {
									echo '<label><i class="badge badge-success">Approved</i></label>';
								} elseif ($data->approved == 2) {
									echo '<label><i class="badge badge-warning">Inactivate</i></label>';
								} elseif ($data->approved == 3) {
									echo '<label><i class="badge badge-danger">Rejected</i></label>';
								} ?>
							</td>
							<td><?= $data->bimbel_user_name ?></td>
							<td><?= $data->phone ?></td>
							<td><?= $data->address ?></td>
							<td class="text-center" style="width: 25%">
								<?php if ($data->approved == 0) { ?>
									<button type="button" class="btn btn-sm btn-success" data-target="#approved<?= $data->id ?>" data-toggle="modal">
										<i class="fa fa-check"></i> Approve
									</button>
									<button type="button" class="btn btn-sm btn-danger" data-target="#rejected<?= $data->id ?>" data-toggle="modal">
										<i class="fa fa-ban"></i> Reject
									</button>
								<?php }
								if ($data->approved == 1) { ?>
									<button type="button" class="btn btn-sm btn-warning" data-target="#inactivate<?= $data->id ?>" data-toggle="modal">
										<i class="fa fa-exclamation"></i> Inactivate
									</button>
								<?php }
								if ($data->approved == 2) { ?>
									<button type="button" class="btn btn-sm btn-success" data-target="#activate<?= $data->id ?>" data-toggle="modal">
										<i class="fa fa-check"></i> Activate
									</button>
								<?php }
								if ($data->approved == 3) { ?>

								<?php } ?>

								<?php if ($this->fungsi->user_login()->bimbel_user_type_id == 3) : ?>
									<a href="<?= site_url('job_application/edit/' . $data->id) ?>" class="btn btn-sm btn-primary">
										<i class="fa fa-pen"></i> Update
									</a>
									<a href="<?= site_url('job_application/delete/' . $data->id) ?>" onclick="return confirm('Yakin hapus data ini?');" class="btn btn-sm btn-danger">
										<i class="fa fa-trash"></i> Delete
									</a>
								<?php endif ?>
							</td>
						</tr>
						<div class="modal fade" id="approved<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Approve tutor ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
										<a href="<?= site_url('job_application/approved/' . $data->id) ?>" class="btn btn-sm btn-success">Approve</a>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="activate<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Activate tutor ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
										<a href="<?= site_url('job_application/approved/' . $data->id) ?>" class="btn btn-sm btn-success">Activate</a>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="rejected<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Reject tutor ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
									<a href="<?= site_url('job_application/rejected/' . $data->id) ?>" class="btn btn-sm btn-danger">Reject</a>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade" id="inactivate<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Inactivate tutor ini?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-footer">
										<a href="<?= site_url('job_application/inactive/' . $data->id . '/' . $data->tutor_id) ?>" class="btn btn-sm btn-warning">Inactivate</a>
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
