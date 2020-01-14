<?php
error_reporting(0);
foreach ($org->result() as $key => $data) :
   $name = $data->name;
endforeach
?>

<!-- Property Single Slider header --><br>
<section class="osahan-slider">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="property-single-title property-single-title-gallery">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-8 col-md-8">
                        <h1><?= $data->name ?></h1>
                        <h6><i class="mdi mdi-home-map-marker"></i> <?= $data->address ?>, <?= $data->city_name ?> <?= ucfirst(strtolower($data->city_type)); ?></h6>
                     </div>
                     <div class="col-lg-4 col-md-4 text-right">
                        <h6 class="mt-2"></h6>
                        <h3 class="text-success">Rp. <?= number_format($data->payment, 2, ',', '.'); ?> <small>/subject</small></h3>
                     </div>
                  </div>
                  <hr>
                  <div class="row">
                     <div class="col-lg-8 col-md-8">
                        <p class="mt-1 mb-0"><i class="mdi mdi-phone"></i> Contact : <strong><?= $data->phone ?></strong></p>
                     </div>
                     <div class="col-lg-4 col-md-4 text-right">
                        <div class="footer-social">
                           <span>Share :</span> &nbsp;
                           <a onclick="setClipboard('<?= current_url() ?>')" class="btn-success toastrDefaultSuccess"><i class="mdi mdi-content-copy"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Property Single Slider header -->
<!-- Property Single Slider --><br>
<section class="osahan-slider">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 col-md-8">
            <div class="card">
               <div class="card-body osahan-slider pl-0 pr-0 pt-0 pb-0">
                  <div id="osahansliderz" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner" role="listbox">
                        <?php
                        $querys = $this->db->query("SELECT organization_images.* FROM organization, organization_images WHERE organization.id=organization_images.organization_id AND organization.id=$organization_id");
                        $photo = $querys->first_row();
                        $cek = $querys->num_rows();
                        if ($cek != 0) {
                           foreach ($querys->result() as $key) { ?>
                              <?php if ($photo->image == $key->image) { ?>
                                 <div class="carousel-item active rounded" style="background-image: url('<?= base_url() ?>assets/uploads/<?= $photo->image ?>')"></div>
                              <?php } else { ?>
                                 <div class="carousel-item rounded" style="background-image: url('<?= base_url() ?>assets/uploads/<?= $key->image ?>')"></div>
                              <?php } ?>
                           <?php } ?>
                        <?php } else { ?>
                           <div class="carousel-item active rounded" style="background-image: url('<?= base_url() ?>assets/frontend/images/no_image.jpg')"></div>
                        <?php } ?>
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
                           <p class="mb-0"><?php
                                             $count_subject = $this->db->query("SELECT COUNT(id) as subject FROM `subject` WHERE organization_id=$data->id");
                                             foreach ($count_subject->result() as $k) {
                                                echo $k->subject;
                                             }
                                             ?> Subjects</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="list-icon">
                           <i class="mdi mdi-account-card-details"></i>
                           <strong>Tutor:</strong>
                           <p class="mb-0"><?php
                                             $count_job = $this->db->query("SELECT COUNT(id) as job FROM job_application WHERE organization_id=$data->id AND approved='1'");
                                             foreach ($count_job->result() as $k) {
                                                echo $k->job;
                                             }
                                             ?> Tutors</p>
                        </div>
                     </div>
                     <div class="col-lg-4 col-md-4">
                        <div class="list-icon">
                           <i class="mdi mdi-account-multiple"></i>
                           <strong>Student:</strong>
                           <p class="mb-0"><?php
                                             $count_student = $this->db->query("SELECT enrollment.* FROM enrollment, subject WHERE enrollment.subject_id=subject.id AND subject.organization_id = $data->id AND enrollment.status BETWEEN 1 AND 2 GROUP BY enrollment.student_id");
                                             echo $count_student->num_rows();
                                             ?> Student</p>
                        </div>
                     </div>
                  </div>
                  <p align="justify"><?= $data->description ?></p>
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
                                    <?php if ($this->fungsi->user_login()->bimbel_user_type_id == 4) : ?>
                                       <th>Action</th>
                                    <?php endif ?>
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
                                       <?php if ($this->fungsi->user_login()->bimbel_user_type_id == 4) : ?>
                                          <td class="text-center" style="width: 15%">
                                             <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#daftar<?= $datas->id ?>">
                                                <i class="fa fa-plus-square"></i> Daftar
                                             </button>
                                          </td>
                                          <div class="modal fade" id="daftar<?= $datas->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Daftar Bimbel</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                      </button>
                                                   </div>
                                                   <div class="modal-body">
                                                      <form action="<?= site_url('controller_siswa/process_daftar_bimbel/' . $organization_id) ?>" method="POST">
                                                         <div class="form-group">
                                                            <div class="row">
                                                               <div class="col-md-6">
                                                                  <label>Tgl Pertemuan Awal <sup class="text-danger">*</sup></label>
                                                                  <input type="date" name="start_date" class="form-control" required>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <label>Tgl Pertemuan Akhir <sup class="text-danger">*</sup></label>
                                                                  <input type="date" name="end_date" class="form-control" required>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <div class="row">
                                                               <div class="col-md-6">
                                                                  <label>Waktu Pertemuan Pertama <sup class="text-danger">*</sup></label>
                                                                  <select name="start_time" class="form-control" required>
                                                                     <option value="">- Pilih -</option>
                                                                     <option value="08.00">08.00</option>
                                                                     <option value="09.00">09.00</option>
                                                                     <option value="10.00">10.00</option>
                                                                     <option value="11.00">11.00</option>
                                                                     <option value="12.00">12.00</option>
                                                                     <option value="13.00">13.00</option>
                                                                     <option value="14.00">14.00</option>
                                                                     <option value="15.00">15.00</option>
                                                                     <option value="16.00">16.00</option>
                                                                     <option value="17.00">17.00</option>
                                                                     <option value="18.00">18.00</option>
                                                                     <option value="19.00">19.00</option>
                                                                     <option value="20.00">20.00</option>
                                                                     <option value="21.00">21.00</option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <label>Durasi Per Pertemuan <sup class="text-danger">*</sup></label>
                                                                  <select name="duration" class="form-control" required>
                                                                     <option value="">- Pilih -</option>
                                                                     <option value="1">1 Jam</option>
                                                                     <option value="1.5">1.5 Jam</option>
                                                                     <option value="2">2 Jam</option>
                                                                     <option value="2.5">2.5 Jam</option>
                                                                     <option value="3">3 Jam</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <div class="row">
                                                               <div class="col-md-6">
                                                                  <label>Jumlah Pertemuan <sup class="text-danger">*</sup></label>
                                                                  <select name="num_of_meeting" class="form-control" required>
                                                                     <option value="">- Pilih -</option>
                                                                     <option value="4">4</option>
                                                                     <option value="5">5</option>
                                                                     <option value="6">6</option>
                                                                     <option value="7">7</option>
                                                                     <option value="8">8</option>
                                                                     <option value="9">9</option>
                                                                     <option value="10">10</option>
                                                                     <option value="11">11</option>
                                                                     <option value="12">12</option>
                                                                     <option value="13">13</option>
                                                                     <option value="14">14</option>
                                                                     <option value="15">15</option>
                                                                     <option value="16">16</option>
                                                                  </select>
                                                               </div>
                                                               <div class="col-md-6">
                                                                  <label>Phone <sup class="text-danger">*</sup></label>
                                                                  <input type="text" name="phone" class="form-control" required>
                                                               </div>
                                                            </div>
                                                         </div>
                                                         <div class="form-group">
                                                            <label>Note</label>
                                                            <textarea name="note" id="" cols="10" rows="2" class="form-control"></textarea>
                                                         </div>
                                                         <div class="form-group">
                                                            <!--<label>Nama Siswa <sup class="text-danger">*</sup></label>-->
                                                            <input type="hidden" name="student_id" value="<?= $student->row()->id ?>" class="form-control" required>
                                                            <input type="hidden" class="form-control" value="<?= $student->row()->bimbel_user_name ?>" disabled>
                                                         </div>
                                                         <div class="form-group">
                                                            <!-- <label>Subject</label> -->
                                                            <input type="hidden" name="subject_id" value="<?= $datas->id ?>" class="form-control" required>
                                                            <!-- <input type="text" class="form-control" value="<? //= $datas->name 
                                                                                                                  ?>" disabled> -->
                                                         </div>
                                                         <div class="form-group text-center">
                                                            <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat">
                                                               <i class="fa fa-paper-plane"></i> Daftar</button>
                                                            <button type="reset" class="btn btn-flat">Reset</button>
                                                         </div>
                                                      </form>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       <?php endif ?>
                                    </tr>
                                 <?php endforeach ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card padding-card reviews-card">
               <div class="card-body">
                  <h5 class="card-title mb-4">Reviews</h5>
                  <?php foreach ($review->result() as $keys => $dt) : ?>
                     <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="<?= base_url() ?>assets/frontend/images/user.png" alt="">
                        <div class="media-body">
                           <h5 class="mt-0"><?= $dt->bimbel_user_name ?> <small><?= indo_date($dt->end_date) ?></small> 
                           <!-- <small><?//= indo_date($dt->date) ?></small> -->
                              <span class="star-rating float-right">
                                 <?php if ($dt->rating == '1') { ?>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <small class="text-success">1/5</small>
                                 <?php } elseif ($dt->rating == '2') { ?>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <small class="text-success">2/5</small>
                                 <?php } elseif ($dt->rating == '3') { ?>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <small class="text-success">3/5</small>
                                 <?php } elseif ($dt->rating == '4') { ?>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star-outline text-warning"></i>
                                    <small class="text-success">4/5</small>
                                 <?php } elseif ($dt->rating == '5') { ?>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <i class="mdi mdi-star text-warning"></i>
                                    <small class="text-success">5/5</small>
                                 <?php } ?>

                              </span>
                           </h5>
                           <p><?= $dt->content ?></p>
                        </div>
                     </div>
                  <?php endforeach ?>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-4">
            <div class="card sidebar-card">
               <div class="card-body">
                  <h5 class="card-title mb-4">Owner</h5>
                  <div class="card card-list">
                     <div class="card-body pb-0">
                        <h5 class="card-title mb-4"><?= $data->bimbel_user_name ?></h5>
                        <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-phone"></i> <?= $data->bimbel_user_phone ?></h6>
                        <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-email"></i> <a href="mailto:<?= $data->bimbel_user_email ?>" target="_blank"><?= $data->bimbel_user_email ?> </a></h6>
                     </div>
                  </div>
               </div>
            </div>
            <?php $this->ci = &get_instance();
            if ($this->ci->session->userdata('log') != 1) { ?>
               <div class="card sidebar-card">
                  <div class="card-body">
                     <h5 class="card-title mb-4">Login</h5>
                     <form class="user" action="<?= site_url('auth/process') ?>" method="post">
                        <div class="control-group form-group">
                           <div class="controls">
                              <label>Username <span class="text-danger">*</span></label>
                              <input type="text" name="username" class="form-control" placeholder="Enter Username" required="">
                           </div>
                        </div>
                        <div class="control-group form-group">
                           <div class="controls">
                              <label>Password <span class="text-danger">*</span></label>
                              <input type="password" name="password" class="form-control" placeholder="Enter Password" required="">
                           </div>
                        </div>
                        <button type="submit" name="login" class="btn btn-success btn-block">LOGIN</button>
                     </form>
                     <div class="mt-4 text-center">
                        Don't have an account? <a href="<?= base_url() ?>auth/register">Register</a>
                     </div>
                  </div>
               </div>
            <?php } ?>
            <?php if ($this->fungsi->user_login()->bimbel_user_type_id == 3) : ?>
               <?php
               $query = $this->db->query("SELECT job_application.*, organization.*, tutor.* FROM job_application, organization, tutor WHERE job_application.organization_id = organization.id AND job_application.tutor_id = tutor.id AND tutor.bimbel_user_id = '$bimbel_user' AND job_application.organization_id = '$organization_id' ORDER BY job_application.id DESC limit 1");
               $cek = $query->num_rows();
               if ($cek > 0) {
                  foreach ($query->result() as $ky => $dts) { ?>
                     <?php if ($dts->approved == 0) : ?>
                        <a href="#" class="btn btn-warning btn-block">WAITING FOR APPROVAL</a>
                     <?php elseif ($dts->approved == 1) : ?>
                        <a href="#" class="btn btn-primary btn-block">YOU'RE NOW TUTOR HERE!</a>
                     <?php elseif ($dts->approved == 2) : ?>
                        <a href="<?= site_url('bimbel_yang_sedang_terdaftar') ?>" class="btn btn-warning btn-block">YOU ARE AN INACTIVE TUTOR HERE!</a>
                     <?php elseif ($dts->approved == 3) : ?>
                        <!-- <a class="btn btn-success btn-block"
                              href="<? //=site_url('controller_tutor/process_daftar_organisasi/'.$organization_id.'/'.$tutor->row()->id)
                                    ?>"
                              onclick="return confirm('Daftar ke Bimbel ini?');">
                              <i class="fa fa-plus-square"></i> DAFTAR
                           </a> -->
                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalCenter">
                           <i class="fa fa-plus-square"></i> DAFTAR
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Daftar ke Bimbel ini? </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                                 <div class="modal-footer">
                                    <form action="<?= site_url('controller_tutor/process_daftar_organisasi/') ?>" method="POST">
                                       <input type="hidden" name="organization_id" value="<?= $organization_id ?>">
                                       <input type="hidden" name="tutor_id" value="<?= $tutor->row()->id ?>">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                       <button type="submit" class="btn btn-primary" name="add">Yes</button>
                                       <!-- <a class="btn btn-primary"
                                       href="<? //=site_url('controller_tutor/process_daftar_organisasi/'.$organization_id.'/'.$tutor->row()->id)
                                             ?>">
                                       <i class="fa fa-plus-square"></i> Yes
                                    </a> -->
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endif ?>
                  <?php } ?>

               <?php } else { ?>
                  <!-- <a class="btn btn-success btn-block"
                              href="<? //=site_url('controller_tutor/process_daftar_organisasi/'.$organization_id.'/'.$tutor->row()->id)
                                    ?>"
                              onclick="return confirm('Daftar ke Bimbel ini?');">
                              <i class="fa fa-plus-square"></i> DAFTARs
                           </a> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#exampleModalCenter">
                     <i class="fa fa-plus-square"></i> DAFTAR
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Daftar ke Bimbel ini? </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                           </div>
                           <div class="modal-footer">
                              <form action="<?= site_url('controller_tutor/process_daftar_organisasi/') ?>" method="POST">
                                 <input type="hidden" name="organization_id" value="<?= $organization_id ?>">
                                 <input type="hidden" name="tutor_id" value="<?= $tutor->row()->id ?>">
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                 <button type="submit" class="btn btn-primary" name="add">Yes</button>
                                 <!-- <a class="btn btn-primary"
                                       href="<? //=site_url('controller_tutor/process_daftar_organisasi/'.$organization_id.'/'.$tutor->row()->id)
                                             ?>">
                                       <i class="fa fa-plus-square"></i> Yes
                                    </a> -->
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               <?php } ?>
            <?php endif ?>
         </div>
      </div>
   </div>
</section>
<!-- End Property Single Slider -->

<script>
   function setClipboard(value) {
      var tempInput = document.createElement("input");
      tempInput.style = "position: absolute; left: -1000px; top: -1000px";
      tempInput.value = value;
      document.body.appendChild(tempInput);
      tempInput.select();
      document.execCommand("copy");
      document.body.removeChild(tempInput);
   }
</script>