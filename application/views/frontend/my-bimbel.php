<<<<<<< HEAD
<!-- Inner Header -->
<section class="section-padding bg-dark inner-header">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h1 class="mt-0 mb-3 text-white">My Bimbel</h1>
            <p class="mb-0 text-white"><a class="text-white" href="#">My Account</a> / <span class="text-success">My Bimbel</span></p>
         </div>
      </div>
   </div>
</section>
<!-- End Inner Header -->

<!-- Social Profiles -->
<section class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-10 col-md-10 mx-auto">
            <div class="card padding-card">
               <div class="card-body">
                  <h5 class="card-title mb-4">My Bimbel</h5>
                  <div class="table-responsive">
                     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                           <tr>
                              <th>No.</th>
                              <th>Subject</th>
                              <th>Bimbel</th>
                              <th>Tgl. Mulai</th>
                              <th>Tgl. Selesai</th>
                              <th>Durasi</th>
                              <th>Jumlah Pertemuan</th>
                              <th>Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $no = 1;
                           foreach ($row->result() as $key => $data) : ?>
                              <tr>
                                 <td style="width: 5%"><?= $no++ ?></td>
                                 <td><?= $data->subject_name ?></td>
                                 <td><a href="<?php echo base_url(); ?>home/detail_bimbel/<?= $data->organization_id ?>" style="color: blue;"><?= $data->organization_name ?></a><br>
                                    <?php if ($data->status == '2') { ?>
                                       <a data-toggle="modal" data-target="#rating<?= $data->id ?>"><label><i class="badge badge-secondary"><i class="mdi mdi-star text-warning"></i>Review</i></label></a>
                                    <?php } ?>

                                    <?php
                                    $query = $this->db->query("SELECT * FROM review WHERE id_subject=$data->id");
                                    $cek = $query->num_rows();
                                    if ($cek != 0) {
                                       foreach ($query->result() as $keys) { ?>
                                          <!-- Modal -->
                                          <div class="modal fade" id="rating<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                             <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                   <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLongTitle">Review <?= $data->organization_name ?></h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                      </button>
                                                   </div>
                                                   <form action="<?= site_url('controller_siswa/rating') ?>" method="POST">
                                                      <div class="modal-body">
                                                         <input type="hidden" name="id_review" value="<?= $keys->id_review ?>">
                                                         <input type="hidden" name="id_student" value="<?= $keys->id_student ?>">
                                                         <input type="hidden" name="id_organization" value="<?= $keys->id_organization ?>">
                                                         <input type="hidden" name="id_subject" value="<?= $keys->id_subject ?>">
                                                         <label>Rating <sup class="text-danger">*</sup></label>
                                                         <select name="rating" class="form-control" required>
                                                            <option value="">-- Choose --</option>
                                                            <option value="1" <?= $keys->rating == 1 ? 'selected' : '' ?>>1 Star</option>
                                                            <option value="2" <?= $keys->rating == 2 ? 'selected' : '' ?>>2 Stars</option>
                                                            <option value="3" <?= $keys->rating == 3 ? 'selected' : '' ?>>3 Stars</option>
                                                            <option value="4" <?= $keys->rating == 4 ? 'selected' : '' ?>>4 Stars</option>
                                                            <option value="5" <?= $keys->rating == 5 ? 'selected' : '' ?>>5 Stars</option>
                                                         </select>
                                                         <label>Review Content <sup class="text-danger">*</sup></label>
                                                         <textarea name="content" class="form-control" cols="3" rows="3" required><?= $keys->content ?></textarea>
                                                      </div>
                                                      <div class="modal-footer">
                                                         <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                                                         <button type="submit" name="Edit" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
                                                      </div>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       <?php } ?>
                                    <?php } else { ?>
                                       <!-- Modal -->
                                       <div class="modal fade" id="rating<?= $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLongTitle">Review <?= $data->organization_name ?></h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                   </button>
                                                </div>
                                                <form action="<?= site_url('controller_siswa/rating') ?>" method="POST">
                                                   <div class="modal-body">
                                                      <input type="hidden" name="id_student" value="<?= $this->fungsi->user_login()->id ?>">
                                                      <input type="hidden" name="id_organization" value="<?= $data->organization_id ?>">
                                                      <input type="hidden" name="id_subject" value="<?= $data->id ?>">
                                                      <label>Rating <sup class="text-danger">*</sup></label>
                                                      <select name="rating" class="form-control" required>
                                                         <option value="">-- Choose --</option>
                                                         <option value="1">1 Star</option>
                                                         <option value="2">2 Stars</option>
                                                         <option value="3">3 Stars</option>
                                                         <option value="4">4 Stars</option>
                                                         <option value="5">5 Stars</option>
                                                      </select>
                                                      <label>Review Content <sup class="text-danger">*</sup></label>
                                                      <textarea name="content" class="form-control" cols="3" rows="3" required></textarea>
                                                   </div>
                                                   <div class="modal-footer">
                                                      <button type="reset" class="btn btn-sm btn-secondary">Reset</button>
                                                      <button type="submit" name="Rating" class="btn btn-success btn-sm"><i class="fa fa-paper-plane"></i> Simpan</button>
                                                   </div>
                                                </form>
                                             </div>
                                          </div>
                                       </div>
                                    <?php } ?>
                                 </td>
                                 <td><?= $data->start_date ?></td>
                                 <td><?= $data->end_date ?></td>
                                 <td><?= $data->duration ?> Jam</td>
                                 <td><?= $data->num_of_meeting ?> Kali</td>
                                 <td><?php if ($data->status == '0') {
                                          echo '<label><i class="badge badge-secondary">Not Active</i></label>';
                                       } elseif ($data->status == '1') {
                                          echo '<label><i class="badge badge-warning">On Going</i></label>';
                                       } elseif ($data->status == '2') {
                                          echo '<label><i class="badge badge-success">Finished</i></label>';
                                       } elseif ($data->status == '3') {
                                          echo '<label><i class="badge badge-danger">Rejected</i></label>';
                                       } ?>
                                 </td>

                              </tr>

                           <?php endforeach ?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>


         </div>
      </div>
   </div>
</section>
<!-- End Social Profiles -->
=======

      <!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">My Bimbel</h1>
                  <p class="mb-0 text-white"><a class="text-white" href="#">My Account</a>  /  <span class="text-success">My Bimbel</span></p>
               </div>
            </div>
         </div>
      </section>
      <!-- End Inner Header -->
      
      <!-- Social Profiles -->
      <section class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-10 col-md-10 mx-auto">
                  
                     <div class="card padding-card">
                        <div class="card-body">
                           <h5 class="card-title mb-4">My Bimbel</h5>
                           <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th>No.</th>
                                       <th>Status</th>
                                       <th>Subject</th>
                                       <th>Tgl. Mulai</th>
                                       <th>Tgl. Selesai</th>
                                       <th>Durasi</th>
                                       <th>Num. Of Meeting</th>
                                       <th>Bimbel</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) : ?>
                                       <tr>
                                          <td style="width: 5%"><?= $no++ ?></td>
                                          <td><?php if ($data->status=='0') {
                                                echo '<label><i class="badge badge-danger">Not Active</i></label>';
                                             } elseif ($data->status=='1') {
                                                echo '<label><i class="badge badge-warning">On Going</i></label>';
                                             } elseif ($data->status=='2') {
                                                echo '<label><i class="badge badge-success">Finished</i></label>';
                                             } elseif ($data->status=='3') {
                                                echo '<label><i class="badge badge-danger">Rejected</i></label>';
                                             } ?>
                                          </td>
                                          <td><?= $data->subject_name ?></td>
                                          <td><?= $data->start_date ?></td>
                                          <td><?= $data->end_date ?></td>
                                          <td><?= $data->duration ?> Jam</td>
                                          <td><?= $data->num_of_meeting ?> Kali</td>
                                          <td><?= $data->organization_name ?></td>
                                       </tr>
                                    <?php endforeach ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     
                  
               </div>
            </div>
         </div>
      </section>
      <!-- End Social Profiles -->
      
>>>>>>> ab762892800215dfdf23f7987e986b0a6cc62bc7
