<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Bimbel</h1>

<?php $this->view('messages'); ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-primary" style="display: inline-block">Bimbel</h6>
		<!-- <div style="float: right">
			<a href="<?= site_url('bimbel/create') ?>" class="btn btn-sm btn-primary">
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
						<th>Nama</th>
						<th>Alamat</th>
						<th>Phone</th>
						<th>payment</th>
						<th>Owner</th>
						<th>Activated</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) : ?>
						<tr>
							<td style="width: 5%"><?= $no++ ?></td>
							<td><?= $data->name ?></td>
							<td><?= $data->address ?></td>
							<td><?= $data->phone ?></td>
							<td><?= $data->payment ?></td>
							<td><?= $data->bimbel_user_name ?></td>
							<td><?= $data->activated == 0 ? 'False' : 'True' ?></td>
							<td class="text-center">
								<div class="custom-control custom-switch">
								<?php if ($data->activated == '0') {
								?>
									<input type="checkbox" class="custom-control-input" name="toggle" id="toggle_<?php echo $data->id; ?>" value="<?php echo $data->id; ?>" data-toggle="toggle" data-off="Disabled" data-on="Enabled">
								<?php
								} ?>
								<?php if ($data->activated == '1') {
								?>
									<input type="checkbox" class="custom-control-input" name="toggle" id="toggle_<?php echo $data->id; ?>" value="<?php echo $data->id; ?>" data-toggle="toggle" data-off="Disabled" data-on="Enabled" checked>
									<?php
								} ?>
								<label class="custom-control-label" for="toggle_<?php echo $data->id; ?>">Activated</label>
								</div>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
<script>
	$('input[name=toggle]').change(function() {
		var mode = $(this).prop('checked');
		var id = $(this).val();
		$.ajax({
			type: 'POST',
			dataType: 'JSON',
			url: '<?= site_url('organization/switchss') ?>',
			data: {
				mode: mode,
				id: id
			},
			success: function(data) {
				var data = eval(data);
				message = data.message;
				success = data.success;
				$("#heading").html(success);
				$("#body").html(message);
				window.location = "<?= site_url('bimbel') ?>";
			}
		});
	});
</script>
