<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class="col-md-3 ">
			<div class="list-group ">
				<a href="<?= site_url('profile') ?>" class="list-group-item list-group-item-action <?= $this->uri->segment(1) == 'profile' ? 'active' : '' ?>">Account</a>
				<?php if($this->fungsi->user_login()->bimbel_user_type_id == 2) : ?>
				<?php 
					$id =  $this->fungsi->user_login()->id;
					$this->db->select('organization.*');
					$this->db->from('organization');
					$this->db->join('owner', 'owner.id = organization.owner_id');
					$this->db->where('owner.bimbel_user_id', $id);
					$sql = $this->db->get()->row()->id; ?>
				<a href="<?= site_url('profile_organization_edit/'.$sql) ?>" class="list-group-item list-group-item-action <?= $this->uri->segment(1) == 'profile_organization' || $this->uri->segment(1) == 'profile_organization_edit' ? 'active' : '' ?>">Organization</a>
				<?php endif ?>
			</div>
		</div>
		<div class="col-md-9">
			<?php if ($this->uri->segment(1) == 'profile') : ?>
				<?php $this->load->view('profile/account_data.php') ?>
			<?php elseif ($this->uri->segment(1) == 'profile_organizations') : ?>
				<?php $this->load->view('profile/organization_data.php') ?>
			<?php elseif ($this->uri->segment(1) == 'profile_organization_edit') : ?>
				<?php $this->load->view('profile/organization_form.php') ?>
			<?php endif ?>
		</div>
	</div>
</div>
