
      <!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">My Profile</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">My Account</a>  /  <span class="text-success">My Profile</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      
      <!-- User Profile -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 mx-auto">
               <form action="<?= site_url('akun/processts') ?>" method="POST">
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Personal Details</h5>
                           <div class="form-group">
                           	<label>Name <sup class="text-danger">*</sup></label>
                           	<input type="hidden" name="id" value="<?= $row->id ?>">
<<<<<<< HEAD
                           	<input type="text" name="name" value="<?= $row->name ?>" class="form-control">
                           </div>
                           <div class="form-group">
                           	<label>Username <sup class="text-danger">*</sup></label>
                           	<input type="text" name="username" value="<?= $row->username ?>" class="form-control" readonly>
=======
                           	<input type="text" name="name" value="<?= $row->name ?>" class="form-control" required>
                           </div>
                           <div class="form-group">
                           	<label>Username <sup class="text-danger">*</sup></label>
                           	<input type="text" name="username" value="<?= $row->username ?>" class="form-control"
                           		required>
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
                           </div>
                           <div class="form-group">
                           	<label>Password <sup class="text-danger">*</sup></label>
                           	<input type="password" name="password" class="form-control" >
                           	<small>*Biarkan kosong jika tidak diganti.</small> 
                           </div>
                           <div class="form-group">
                           	<label>Email <sup class="text-danger">*</sup></label>
<<<<<<< HEAD
                           	<input type="email" name="email" value="<?= $row->email ?>" class="form-control" readonly>
=======
                           	<input type="email" name="email" value="<?= $row->email ?>" class="form-control" required>
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
                           </div>
                           <div class="form-group">
                           	<label>Phone <sup class="text-danger">*</sup></label>
                           	<input type="text" name="phone" value="<?= $row->phone ?>" class="form-control" required>
                           </div>
                           <div class="form-group">
                           	<label>Address <sup class="text-danger">*</sup></label>
                           	<input type="text" name="address" value="<?= $row->address ?>" class="form-control"
                           		required>
                           </div>
                           <div class="form-group">
                           	<label>City <sup class="text-danger">*</sup></label>
                           	<select name="city_id" class="form-control" required>
                           		<option value="">- Pilih -</option>
                           		<?php foreach($city->result() as $key => $data) : ?>
                           		<option value="<?=$data->id?>" <?=$data->id == $row->city_id ? "selected" : null?>>
                           			<?=$data->name?> <?= ucfirst(strtolower($data->city_type)); ?></option>
                           		<?php endforeach; ?>
                           	</select>
                           </div>
                           <input type="hidden" name="bimbel_user_type_id" value="<?= $row->bimbel_user_type_id ?>"
                           		required>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                           <i class="fa fa-paper-plane"></i> Save</button>
<<<<<<< HEAD
=======
                        <button type="reset" class="btn btn-flat">Reset</button>
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
                     </div>
                     <!-- <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">Change Password</h5>
                           <div class="form-group">
                              <label>Password <span class="text-danger">*</span></label>
                              <input type="password" class="form-control" placeholder="">
                           </div>
                           <div class="form-group">
                              <label>Confirm Password <span class="text-danger">*</span></label>
                              <input type="password" class="form-control" placeholder="">
                           </div>
                        </div>
                     </div> 
                     <button type="submit" class="btn btn-success">SAVE EDITS</button> -->
                  </form>
               </div>
            </div>
         </div>
      </section>
      <!-- End User Profile -->