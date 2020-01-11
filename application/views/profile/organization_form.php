<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-12">
				<h4>Organization Update</h4>
				<hr>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
				<form action="<?= site_url('controller_profile/organization_process') ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama <sup class="text-danger">*</sup></label>
						<input type="hidden" name="id" value="<?= $row->id ?>">
						<input type="text" name="name" value="<?= $row->name ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone <sup class="text-danger">*</sup></label>
						<input type="text" name="phone" value="<?= $row->phone ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Alamat <sup class="text-danger">*</sup></label>
						<input type="text" name="address" value="<?= $row->address ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Kota <sup class="text-danger">*</sup></label>
						<select name="city_id" class="form-control" required>
							<option value="">- Pilih -</option>
							<?php foreach ($city->result() as $key => $data) : ?>
								<option value="<?= $data->id ?>" <?= $data->id == $row->city_id ? "selected" : null ?>><?= $data->name ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Deskripsi </label>
						<!-- <input type="text" name="description" value="<?//= $row->description ?>" class="form-control"> -->
						<textarea name="description" cols="5" rows="5" class="form-control"><?= $row->description ?></textarea>
					</div>
					<div class="form-group">
						<label>Images</label>
						<?php if($page == 'edit') {
							foreach ($organization_images->result() as $value => $val){
								if($organization_images->num_rows() > 0) { ?>
									<div style="margin-bottom: 5px">
										<img src="<?=base_url('assets/uploads/'.$val->image)?>" style="width: 30%">
									</div>    
						<?php } } } ?>
						<input type="file" name="images[]" class="form-control" multiple>
						<small style="font-style: italic; color: red;">(Biarkan kosong jika tidak <?=$page == 'edit' ? 'diganti' : 'ada'?>)</small>
					</div>
					<div class="form-group">
						<label>Payment <sup class="text-danger">*</sup></label>
						<input type="text" name="payment" value="<?= $row->payment ?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Owner <sup class="text-danger">*</sup></label>
						<select name="owner_id" class="form-control" required>
							<option value="">- Pilih -</option>
							<?php foreach ($owner->result() as $key => $data) : ?>
								<option value="<?= $data->id ?>" <?= $data->id == $row->owner_id ? "selected" : null ?>><?= $data->bimbel_user_name ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Activated <sup class="text-danger">*</sup></label>
						<select name="activated" class="form-control" required>
							<option value="0" <?= $row->activated == 0 ? 'selected' : '' ?>>False</option>
							<option value="1" <?= $row->activated == 1 ? 'selected' : '' ?>>True</option>
						</select>
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
