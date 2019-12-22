<?php 
foreach ($org->result() as $key => $data) : 
   $name = $data->name;
endforeach
?>


      <!-- Property Single Slider header -->
      <section class="osahan-slider">
         <div id="osahanslider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#osahanslider" data-slide-to="0" class="active"></li>
               <li data-target="#osahanslider" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <div class="carousel-item active" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/1.jpg')"></div>
               <div class="carousel-item" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/2.jpg')"></div>
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
         <div class="property-single-title property-single-title-gallery">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-8">
                     <h1><?= $data->name ?></h1>
                     <h6><i class="mdi mdi-home-map-marker"></i> <?= $data->address ?></h6>
                  </div>
                  <div class="col-lg-4 col-md-4 text-right">
                     <h6 class="mt-2">Latest</h6>
                     <h3 class="text-success">Rp. <?= number_format($data->payment,2,',','.'); ?> <small>/subject</small></h3>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-lg-8 col-md-8">
                     <p class="mt-1 mb-0"><strong>Bimbel ID</strong> : <?= $data->id ?> &nbsp;&nbsp; <i class="mdi mdi-phone"></i>Contact : <strong><?= $data->phone ?></strong></p>
                  </div>
                  <div class="col-lg-4 col-md-4 text-right">
                     <div class="footer-social">
                        <span>Share :</span> &nbsp;
                        <a href="#"><i class="mdi mdi-facebook"></i></a>
                        <a href="#"><i class="mdi mdi-twitter"></i></a>
                        <a href="#"><i class="mdi mdi-instagram"></i></a>
                        <a href="#"><i class="mdi mdi-google"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Property Single Slider header -->
      <!-- Property Single Slider -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 col-md-8">
                  <div class="card">
                     <div class="card-body osahan-slider pl-0 pr-0 pt-0 pb-0">
                        <div id="osahansliderz" class="carousel slide" data-ride="carousel">
                           <ol class="carousel-indicators">
                              <li data-target="#osahansliderz" data-slide-to="0" class="active"></li>
                              <li data-target="#osahansliderz" data-slide-to="1"></li>
                           </ol>
                           <div class="carousel-inner" role="listbox">
                              <div class="carousel-item active rounded" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/3.jpg')"></div>
                              <div class="carousel-item rounded" style="background-image: url('<?= base_url() ?>assets/frontend/img/slider/4.jpg')"></div>
                           </div>
                           <a class="carousel-control-prev" href="#osahansliderz" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#osahansliderz" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-3">Description</h5>
                        <div class="row">
                           <div class="col-lg-4 col-md-4">
                              <div class="list-icon">
                                 <i class="mdi mdi-book"></i>
                                 <strong>Subjects:</strong>
                                 <p class="mb-0">5 Subjects</p>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="list-icon">
                                 <i class="mdi mdi-account-card-details"></i>
                                 <strong>Tutor:</strong>
                                 <p class="mb-0">5 Tutors</p>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4">
                              <div class="list-icon">
                                 <i class="mdi mdi-account-multiple"></i>
                                 <strong>Student:</strong>
                                 <p class="mb-0">25 Student</p>
                              </div>
                           </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,</p>
                        <p class="mb-0">is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
                     </div>
                  </div> 
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-3">Subjects</h5>
                        <div class="row">
                           <div class="col-lg-12 col-md-12">
                              <div class="table-responsive">
                                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                       <tr>
                                          <th>No.</th>
                                          <th>Name</th>
                                          <th>Description</th>
                                          <th>Subject Type</th>
                                          <th>Schedule</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $datas) : ?>
                                       <tr>
                                          <td style="width: 5%"><?= $no++ ?></td>
                                          <td><?= $datas->name ?></td>
                                          <td><?= $datas->description ?></td>
                                          <td><?= $datas->subject_type_name ?></td>
                                          <td><?= $datas->start_date ?></td>
                                       </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-3">Location</h5>
                        <div class="row mb-3">
                           <div class="col-lg-6 col-md-6">
                              <p><strong class="text-dark">Address :</strong> 1200 Petersham Town</p>
                              <p><strong class="text-dark">State :</strong> Newcastle</p>
                           </div>
                           <div class="col-lg-6 col-md-6">
                              <p><strong class="text-dark">City :</strong> Sydney</p>
                              <p><strong class="text-dark">Zip/Postal Code  :</strong> 54330</p>
                           </div>
                        </div>
                        <div id="map"></div>
                     </div>
                  </div>
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Video</h5>
                        <a href="#"><img class="rounded img-fluid" src="<?= base_url() ?>assets/frontend/img/video.jpg" alt="Card image cap"></a>
                     </div>
                  </div>
                  <div class="card padding-card reviews-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">3 Reviews</h5>
                        <div class="media mb-4">
                           <img class="d-flex mr-3 rounded-circle" src="<?= base_url() ?>assets/frontend/img/user/1.jpg" alt="">
                           <div class="media-body">
                              <h5 class="mt-0">Stave Martin <small>Feb 12, 2018</small> 
                                 <span class="star-rating float-right">
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/2</small>
                                 </span>
                              </h5>
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                           </div>
                        </div>
                        <div class="media">
                           <img class="d-flex mr-3 rounded-circle" src="<?= base_url() ?>assets/frontend/img/user/2.jpg" alt="">
                           <div class="media-body">
                              <h5 class="mt-0">Mark Smith <small>Feb 09, 2018</small> <span class="star-rating float-right">
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/1</small>
                                 </span>
                              </h5>
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                              <div class="media mt-4">
                                 <img class="d-flex mr-3 rounded-circle" src="<?= base_url() ?>assets/frontend/img/user/3.jpg" alt="">
                                 <div class="media-body">
                                    <h5 class="mt-0">Ryan Printz <small>Nov 13, 2018</small> <span class="star-rating float-right">
                                       <i class="mdi mdi-star text-warning"></i>
                                       <i class="mdi mdi-star text-warning"></i>
                                       <i class="mdi mdi-star-half text-warning"></i>
                                       <i class="mdi mdi-star-half text-warning"></i>
                                       <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/5</small>
                                       </span>
                                    </h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="media mt-4">
                           <img class="d-flex mr-3 rounded-circle" src="<?= base_url() ?>assets/frontend/img/user/4.jpg" alt="">
                           <div class="media-body">
                              <h5 class="mt-0">Stave Mark <small>Feb 12, 2018</small> 
                                 <span class="star-rating float-right">
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/2</small>
                                 </span>
                              </h5>
                              <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card padding-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Leave a Review</h5>
                        <form name="sentMessage">
                           <div class="row">
                              <div class="control-group form-group col-lg-4 col-md-4">
                                 <div class="controls">
                                    <label>Your Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" required>
                                 </div>
                              </div>
                              <div class="control-group form-group col-lg-4 col-md-4">
                                 <div class="controls">
                                    <label>Your Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" required>
                                 </div>
                              </div>
                              <div class="control-group form-group col-lg-4 col-md-4">
                                 <div class="controls">
                                    <label>Rating <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select">
                                       <option>1 Star</option>
                                       <option>2 Star</option>
                                       <option>3 Star</option>
                                       <option>4 Star</option>
                                       <option>5 Star</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <label>Review <span class="text-danger">*</span></label>
                                 <textarea rows="10" cols="100" class="form-control"></textarea>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-success">Send Message</button>
                        </form>
                     </div>
                  </div> -->
               </div>
               <div class="col-lg-4 col-md-4">
                  <div class="card sidebar-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Owner</h5>
                        <div id="featured-properties">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <div class="card card-list">
                                    <a href="#">
                                       <img class="card-img-top" src="<?= base_url() ?>assets/frontend/img/agent.jpg" alt="Card image cap">
                                       <div class="card-body pb-0">
                                          <h5 class="card-title mb-4"><?= $data->bimbel_user_name ?></h5>
                                          <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-phone"></i> <?= $data->bimbel_user_phone ?></h6>
                                          <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-email"></i> <a href="mailto:<?= $data->bimbel_user_email ?>" target="_blank"><?= $data->bimbel_user_email ?> </a></h6>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card sidebar-card">
                     <div class="card-body">
                        <h5 class="card-title mb-4">Request a Showing</h5>
                        <form name="sentMessage">
                           <div class="control-group form-group">
                              <div class="controls">
                                 <label>Your Name <span class="text-danger">*</span></label>
                                 <input type="text" placeholder="Enter Your Name" class="form-control" required>
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <label>Your Email <span class="text-danger">*</span></label>
                                 <input type="text" placeholder="Enter Your Email"  class="form-control" required>
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <label>Phone <span class="text-danger">*</span></label>
                                 <input type="text" placeholder="Enter Phone Number"  class="form-control" required>
                              </div>
                           </div>
                           <div class="control-group form-group">
                              <div class="controls">
                                 <label>Message <span class="text-danger">*</span></label>
                                 <textarea rows="5" cols="50" class="form-control"></textarea>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-success btn-block">SEND REQUEST</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- End Property Single Slider -->

      