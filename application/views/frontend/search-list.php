
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
      <section class="section-padding" id="search">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                  <div class="osahan_top_filter row">
                     <div class="col-lg-6 col-md-6 tags-action">
                        <span>Search Result :</span>
                        <!-- <span>Plot/Land <a href="#"><i class="mdi mdi-window-close"></i></a></span> -->
                     </div>
                  <!--   <div class="col-lg-6 col-md-6 sort-by-btn float-right">
                        <div class="view-mode float-right">
                           <a href="properties-grid.html"><i class="mdi mdi-grid"></i></a><a class="active" href="properties-list.html"><i class="mdi mdi-format-list-bulleted"></i></a>
                        </div>
                        <div class="dropdown float-right">
                           <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <i class="mdi mdi-filter"></i> Sort by 
                           </button>
                           <div class="dropdown-menu float-right" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Popularity </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> New </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Discount </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: Low to High </a>
                              <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: High to Low </a>
                           </div>
                        </div>
                     </div>-->
						</div> 
                  <div class="row">
							<?php if ($row->num_rows() == 0) { ?>
                     <div class="col-lg-12 col-md-12">
                        <h5>Kami tidak dapat menemukan hasil yang cocok dengan pencarian Anda.</h5>
                     </div>
                     <?php } else { ?>
                     <?php foreach($row->result() as $key => $data) : ?>
                     <div class="col-lg-12 col-md-12">
                        <div class="card card-list card-list-view">
                           <a href="<?php echo base_url(); ?>home/detail_bimbel/<?= $data->organization_id ?>">
                              <div class="row no-gutters">
                                 <div class="col-lg-5 col-md-5">					 
                                    <div id="carouselExampleIndicators<?php echo $data->organization_id; ?>" class="carousel slide" data-ride="carousel">
                                       <div class="carousel-inner">
                                          <?php 
                                          $queryss = $this->db->query("SELECT organization_images.* FROM organization, organization_images WHERE organization.id=organization_images.organization_id AND organization.id=$data->organization_id");
                                          $photos = $queryss->first_row();
                                          $cek = $queryss->num_rows();
                                          if ($cek != 0) {
                                             foreach ($queryss->result() as $keys) { ?>
                                                <?php if ($photos->image == $keys->image) { ?>
                                                   <div class="carousel-item active">
                                                   <img class="d-block w-100" src="<?= base_url() ?>assets/uploads/<?= $photos->image ?>"  style="height: 300px"></div>
                                                <?php } else { ?>
                                                   <div class="carousel-item">
                                                   <img class="d-block w-100" src="<?= base_url() ?>assets/uploads/<?= $keys->image ?>" style="height: 300px"></div>
                                                <?php } ?>
                                             <?php } ?>
                                          <?php } else { ?>
                                          <div class="carousel-item active">
                                          <img class="d-block w-100" src="<?= base_url() ?>assets/frontend/images/no_image.jpg" style="height: 300px"></div>
                                          <?php } ?>
                                       </div>
                                       <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo $data->organization_id; ?>" role="button" data-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Previous</span>
                                       </a>
                                       <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo $data->organization_id; ?>" role="button" data-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="sr-only">Next</span>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-lg-7 col-md-7">
                                    <div class="card-body">
                                       <h5 class="card-title"><?= $data->organization_name ?></h5>
                                       <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> <?= $data->address ?></h6>
                                       <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-city"></i> <?= $data->city_name ?> <?= ucfirst(strtolower($data->city_type)); ?></h6>
                                       <h2 class="text-success mb-0 mt-3">
														Rp. <?= number_format($data->payment,2,',','.'); ?> <small>/subject</small>
                                       </h2>
                                    </div>
                                    <div class="card-footer">
                                       <span><i class="mdi mdi-phone"></i> Contact : <strong><?= $data->phone ?></strong></span>
                                       <span><i class="mdi mdi-book"></i> Subjects : <strong>5</strong></span>
                                    </div>
                                 </div>
                              </div>
                           </a>
                        </div>
							</div>
							<?php endforeach ?>
                     <?php } ?>
                  </div>
                  <nav class="mt-5">
                     <ul class="pagination justify-content-center">
                       <!--  <li class="page-item disabled">
                           <a class="page-link" href="#" tabindex="-1"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item">
                           <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
								</li> -->
								<?=$pagination?>
                     </ul>
						</nav>
					</nav>
               </div>
            </div>
         </div>
      </section>
      <!-- End Properties List -->
