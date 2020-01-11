<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Review</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Review</h6>
		<div style="float: right">
			<!-- <a href="<?= site_url('review/add') ?>" class="btn btn-sm btn-primary">
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
						<th>Date</th>
						<th>Name</th>
						<th>Content</th>
						<th>Rating</th>
						<!-- <th>Aksi</th> -->
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= indo_date($data->date) ?></td>
							<td><?= $data->bimbel_user_name ?></td>
							<td><?= $data->content ?></td>
							<td><?= $data->rating ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
