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
								<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#daftar<?= $data->id ?>">
									<i class="fa fa-plus-square"></i> Daftar
								</button>
							</td>
							<div class="modal fade" id="daftar<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Daftar Bimbel</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="<?= site_url('controller_siswa/process_daftar_bimbel/' . $organization_id) ?>" method="POST">
												<div class="form-group">
													<label>Tgl Pertemuan Awal <sup class="text-danger">*</sup></label>
													<input type="date" name="start_date" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Tgl Pertemuan Akhir <sup class="text-danger">*</sup></label>
													<input type="date" name="end_date" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Waktu Pertemuan Pertama <sup class="text-danger">*</sup></label>
													<select name="start_time" class="form-control" required>
														<option value="">- Pilih -</option>
														<?php $i = 8;  ?>
														<?php for($i;$i<=13;$i++) : ?>
														<option value="<?= $waktu = '0'.$i.'.00' ?>"><?= $waktu = '0'.$i.'.00' ?></option>
														<?php endfor ?>
													</select>
												</div>
												<div class="form-group">
													<label>Durasi Per Pertemuan <sup class="text-danger">*</sup></label>
													<select name="duration" class="form-control" required>
														<option value="">- Pilih -</option>
														<option value="1">1 Jam</option>
														<option value="1.5">1.5 Jam</option>
														<option value="2">2 Jam</option>
														<option value="2.5">2.5 Jam</option>
														<option value="3">3 Jam</option>
													</select>
												</div>
												<div class="form-group">
													<label>Jumlah Pertemuan <sup class="text-danger">*</sup></label>
													<select name="num_of_meeting" class="form-control" required>
														<option value="">- Pilih -</option>
														<?php for($i = 4;$i<=16;$i++) : ?>
														<option value="<?= $i ?>"><?= $i ?></option>
														<?php endfor ?>
													</select>
												</div>
												<div class="form-group">
													<label>Phone <sup class="text-danger">*</sup></label>
													<input type="text" name="phone" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Note <sup class="text-danger">*</sup></label>
													<input type="text" name="note" class="form-control" required>
												</div>
												<div class="form-group">
													<label>Nama Siswa <sup class="text-danger">*</sup></label>
													<input type="hidden" name="student_id" value="<?= $student->row()->id ?>" class="form-control" required>
													<input type="text" class="form-control" value="<?= $student->row()->bimbel_user_name ?>" disabled>
												</div>
												<div class="form-group">
													<label>Subject <sup class="text-danger">*</sup></label>
													<input type="hidden" name="subject_id" value="<?= $data->id ?>" class="form-control" required>
													<input type="text" class="form-control" value="<?= $data->name ?>" disabled>
												</div>
												<div class="form-group">
													<button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
														<i class="fa fa-paper-plane"></i> Save</button>
													<button type="reset" class="btn btn-flat">Reset</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
