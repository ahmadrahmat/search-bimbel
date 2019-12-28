
      <!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Latest Bimbel</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Bimbel</a>  /  <span class="text-success">Latest</span></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Main Slider With Form -->
      <!-- Properties List -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8 mx-auto">
                  <div class="osahan_top_filter row">
                     <div class="col-lg-6 col-md-6 tags-action">
                        <span>Latest Bimbel :<!-- <a href="#"><i class="mdi mdi-window-close"></i></a> --></span>
                        <!-- <span>Plot/Land <a href="#"><i class="mdi mdi-window-close"></i></a></span> -->
                     </div>
						</div> 
                  <div class="row">
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
                                                         <img class="d-block w-100" src="<?= base_url() ?>assets/uploads/<?= $photos->image ?>"  style="height: 221px"></div>
                                                      <?php } else { ?>
                                                         <div class="carousel-item">
                                                         <img class="d-block w-100" src="<?= base_url() ?>assets/uploads/<?= $keys->image ?>" style="height: 221px"></div>
                                                      <?php } ?>
                                                   <?php } ?>
                                                <?php } else { ?>
                                                <div class="carousel-item active">
                                                <img class="d-block w-100" src="<?= base_url() ?>assets/frontend/images/no_image.jpg" style="height: 221px"></div>
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
