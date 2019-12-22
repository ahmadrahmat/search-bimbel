
      <!-- Main Slider With Form -->
      <section class="osahan-slider">
         <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#osahanslider" data-slide-to="0" class="active"></li>
               <li data-target="#osahanslider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/2.jpg')">
                  <div class="overlay"></div>
               </div>
               <div class="carousel-item" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/2.jpg')">
                  <div class="overlay"></div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#osahanslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#osahanslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         <div class="slider-form">
            <div class="container">
               <h1 class="text-center text-white mb-5">Find Your Favorite Bimbel</h1>
               <form method="get" action="<?=site_url('home/cari')?>#search">
                  <div class="row no-gutters">
                     <div class="col-md-4">
                        <div class="input-group">
                           <div class="input-group-addon"><i class="mdi mdi-book"></i></div>
                           <input id="subject" name="subject" class="form-control" placeholder="Enter Subject" type="text">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="input-group">
									<div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                           <input id="organization" name="organization" class="form-control" placeholder="Enter Organization" type="text">
                        </div>
                     </div>
							<div class="col-md-3">
								<div class="input-group">
									<div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
									<select name="city" class="form-control select2 no-radius">
										<option value="">Select City</option>
										<?php foreach($city->result() as $key => $data) : ?>
											<option value="<?= $data->name ?>"><?= $data->name ?></option>
										<?php endforeach ?>
									</select>
								</div>
							</div>
                     <div class="col-md-1">
                        <button id="btn_search" type="submit" class="btn btn-success btn-block no-radius font-weight-bold">SEARCH</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->
      <section class="section-padding">
         <div class="section-title text-center mb-5">
            <h2>Latest Bimbel</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
         </div>
         <div class="container">
            <div class="row">
               <?php $no = 1;
               foreach ($row->result() as $key => $data) : ?>
               <div class="col-lg-4 col-md-4">
                  <div class="card card-list">
                     <a href="<?php echo base_url(); ?>home/detail_bimbel/<?= $data->id ?>">
                        <span class="badge badge-success">Latest</span>
                        <img class="card-img-top" src="<?= base_url() ?>assets/frontend/img/list/2.png" alt="Card image cap">
                        <div class="card-body">
                           <h5 class="card-title"><?= $data->name ?></h5>
                           <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> <?= $data->address ?>, <?= $data->city_name ?></h6>
                           <h4 class="text-success mb-0 mt-3">
                              Rp. <?= number_format($data->payment,2,',','.'); ?> <small>/subject</small>
                           </h4>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-phone"></i> Contact : <strong><?= $data->phone ?></strong></span>
                           <span><i class="mdi mdi-book"></i> Subjects : <strong>5</strong></span>
                        </div>
                     </a>
                  </div>
               </div>
               <?php endforeach ?>
            </div>
         </div>
      </section>
      <!-- End Properties List -->
      <!-- Properties by City -->
      <section class="section-padding bg-white">
         <div class="section-title text-center mb-5">
            <h2>Popular Bimbel</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="<?= base_url() ?>assets/frontend/img/overlay/1.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">New York</h3>
                           <p class="card-text text-white">16 Properties</p>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="<?= base_url() ?>assets/frontend/img/overlay/2.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">Los Angeles</h3>
                           <p class="card-text text-white">265 Properties</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="<?= base_url() ?>assets/frontend/img/overlay/3.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">Chicago</h3>
                           <p class="card-text text-white">620 Properties</p>
                        </div>
                     </a>
                     .    
                  </div>
               </div>
               <div class="col-lg-8 col-md-8">
                  <div class="card bg-dark text-white card-overlay">
                     <a href="#">
                        <img class="card-img" src="<?= base_url() ?>assets/frontend/img/overlay/4.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white">Philadelphia</h3>
                           <p class="card-text text-white">28 Properties</p>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Properties by City -->
