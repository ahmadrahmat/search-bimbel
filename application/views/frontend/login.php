      
      <!-- Login -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 mx-auto">
                  <?php if ($this->session->flashdata('success')) : ?>
                  <div class="alert alert-success">
                     <?= $this->session->flashdata('success'); ?>
                     <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                  </div>
                  <?php endif; ?>
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Login Search Bimbel</h5>
                        <form class="user" action="<?=site_url('auth/process')?>" method="post">
                           <div class="form-group">
                              <label>Username <span class="text-danger">*</span></label>
                              <input type="text" name="username" class="form-control" placeholder="Enter Username" required="">
                           </div>
                           <div class="form-group">
                              <label>Password <span class="text-danger">*</span></label>
                              <input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
                           </div>
                           <button type="submit" name="login" class="btn btn-success btn-block">SIGN IN</button>
                        </form>
                        <div class="mt-4 text-center">
                           <!-- <a href="<?//= base_url() ?>home/forget_password">Forget your password?</a> -->
                           Don't have an account? <a href="<?= base_url() ?>auth/register">Register</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Login -->
