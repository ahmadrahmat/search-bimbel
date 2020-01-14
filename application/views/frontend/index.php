
      <!-- Main Slider With Form -->
      <section class="osahan-slider">
         <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-item active" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/2.jpg')">
            <div class="overlay"></div>
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
											<option value="<?= $data->id ?>"><?= $data->name ?> <?= ucfirst(strtolower($data->city_type)); ?></option>
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
                        <div id="carouselExampleIndicators<?php echo $data->id; ?>" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <?php 
                              $queryss = $this->db->query("SELECT organization_images.* FROM organization, organization_images WHERE organization.id=organization_images.organization_id AND organization.id=$data->id");
                              $photos = $queryss->first_row();
                              $cek = $queryss->num_rows();
                              if ($cek != 0) {
                                 foreach ($queryss->result() as $keys) { ?>
                                    <?php if ($photos->image == $keys->image) { ?>
                                       <div class="carousel-item active">
                                       <img class="d-block w-100" src="<?= base_url() ?>assets/uploads/<?= $photos->image ?>"  style="height: 240px"></div>
                                    <?php } else { ?>
                                       <div class="carousel-item">
                                       <img class="d-block w-100" src="<?= base_url() ?>assets/uploads/<?= $keys->image ?>" style="height: 240px"></div>
                                    <?php } ?>
                                 <?php } ?>
                              <?php } else { ?>
                              <div class="carousel-item active">
                              <img class="d-block w-100" src="<?= base_url() ?>assets/frontend/images/no_image.jpg" style="height: 240px"></div>
                              <?php } ?>
                           </div>
<<<<<<< HEAD
                           <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators<?php //echo $data->id; ?>" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#carouselExampleIndicators<?php //echo $data->id; ?>" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                           </a> -->
=======
                           <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $data->id; ?>" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $data->id; ?>" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                           </a>
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
                        </div>
                        <!-- <img class="card-img-top" src="<?//= base_url() ?>assets/uploads/<?//= $data->image ?>" alt="Card image cap" style="height: 240px"> -->
                        
                        <div class="card-body">
                           <h5 class="card-title"><?= $data->name ?></h5>
                           <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> <?= $data->address ?></h6>
                           <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-city"></i> <?= $data->city_name ?> <?= ucfirst(strtolower($data->city_type)); ?></h6>
                           <h4 class="text-success mb-0 mt-3">
                              Rp. <?= number_format($data->payment,2,',','.'); ?> <small>/subject</small>
                           </h4>
                        </div>
                        <div class="card-footer">
                           <span><i class="mdi mdi-phone"></i> Contact : <strong><?= $data->phone ?></strong></span>
                           <span><i class="mdi mdi-book"></i> Subjects : <strong>
                           <?php 
                           $count_subject = $this->db->query("SELECT COUNT(id) as subject FROM `subject` WHERE organization_id=$data->id");
                           foreach ($count_subject->result() as $k) {
                              echo $k->subject;
                           }
                           ?>
                           </strong></span>
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
            <p>City with the most bimbel</p>
         </div>
         <div class="container">
            <div class="row">
               <?php $no = 1; foreach ($popcity->result() as $key => $datas) : ?>
               <div class="col-lg-6 col-md-6">
                  <div class="card bg-dark text-white card-overlay">
                  <form method="get" action="<?=site_url('home/cari')?>#search">
                     <input name="city" type="hidden" value="<?= $datas->id ?>">
                     <button type="submit" class="btn" style="padding: 0px 0px;">
                        <img class="card-img" src="<?= base_url() ?>assets/frontend/img/overlay/<?= $no++; ?>.png" alt="Card image">
                        <div class="card-img-overlay">
                           <h3 class="card-title text-white"><?= $datas->name ?> <?= ucfirst(strtolower($datas->city_type)); ?></h3>
                           <p class="card-text text-white"><?= $datas->counts ?> Bimbel</p>
                        </div>
                     </button>
                  </form>
                  </div>
               </div>
               <?php endforeach ?>
            </div>
         </div>
      </section>
      <!-- End Properties by City -->
