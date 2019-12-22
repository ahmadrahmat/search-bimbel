
      <!-- Login -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 mx-auto">
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Login Tutor / Student</h5>
                        <form>
                           <div class="form-group">
                              <label>Username <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" placeholder="Enter Username" required="">
                           </div>
                           <div class="form-group">
                              <label>Password <span class="text-danger">*</span></label>
                              <input type="password" class="form-control" placeholder="Enter Password" required="">
                           </div>
                           <button type="submit" class="btn btn-success btn-block">SIGN IN</button>
                        </form>
                        <div class="mt-4 text-center">
                           <a href="<?= base_url() ?>home/forget_password">Forget your password?</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Login -->
