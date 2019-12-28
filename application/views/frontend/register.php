

      <!-- Register -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-5 mx-auto">
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Register</h5>
                        <form action="<?= site_url('auth/signup') ?>" method="POST">
                        <div class="form-group">
                           <label>Name <sup class="text-danger">*</sup></label>
                           <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                           <label>Username <sup class="text-danger">*</sup></label>
                           <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                        </div>
                        <div class="form-group">
                           <label>Password <sup class="text-danger">*</sup></label>
                           <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                        <div class="form-group">
                           <label>Email <sup class="text-danger">*</sup></label>
                           <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                        <div class="form-group">
                           <label>Phone <sup class="text-danger">*</sup></label>
                           <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required>
                        </div>
                        <div class="form-group">
                           <label>Address <sup class="text-danger">*</sup></label>
                           <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                        </div>
                        <div class="form-group">
                           <label>City <sup class="text-danger">*</sup></label>
                           <select name="city_id" class="form-control" required>
                              <option value="">- Choose -</option>
                              <?php foreach($city->result() as $key => $data) : ?>
                              <option value="<?=$data->id?>"><?=$data->name?> <?= ucfirst(strtolower($data->city_type)); ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Type <sup class="text-danger">*</sup></label>
                           <select name="bimbel_user_type_id" class="form-control" required>
                              <option value="">- Choose -</option>
                              <?php foreach($bimbel_user_type->result() as $key => $data) : ?>
                              <option value="<?=$data->id?>"><?= ucfirst(strtolower($data->name)); ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                        <button type="submit" name="<?= $page ?>" class="btn btn-success btn-block"><i class="fa fa-paper-plane"></i> SIGN UP</button>
                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Register -->