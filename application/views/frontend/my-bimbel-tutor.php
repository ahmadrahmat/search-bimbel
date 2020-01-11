
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
                                    <th>Bimbel</th>
                                    <th>Phone</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) : ?>
                                        <tr>
                                            <td style="width: 5%"><?= $no++ ?></td>
                                            <td><?php if ($data->approved=='0') {
                                                echo '<label><i class="badge badge-warning">Waiting</i></label>';
                                             } elseif ($data->approved=='1') {
                                                echo '<label><i class="badge badge-success">Active</i></label>';
                                             } elseif ($data->approved=='2') {
                                                echo '<label><i class="badge badge-secondary">Inactive</i></label>';
                                             } elseif ($data->approved=='3') {
                                                echo '<label><i class="badge badge-danger">Rejected</i></label>'; ?>
                                             <?php } ?></td>
                                            <td><?php $ids = $this->fungsi->user_login()->id;
                                            $query = $this->db->query("SELECT subject.*, subject_type.name as type_name, subject_tutor.* FROM subject, subject_type, subject_tutor, tutor WHERE subject.subject_type_id = subject_type.id AND subject.id = subject_tutor.subject_id AND tutor.bimbel_user_id=$ids AND organization_id=$data->organization_id");
                                            foreach ($query->result() as $keys) {
                                                echo $keys->name; echo " "; echo $keys->type_name; echo "<br>";
                                            }
                                            ?></td>
                                            <td><a href="<?php echo base_url(); ?>home/detail_bimbel/<?= $data->organization_id ?>" style="color: blue;"><?= $data->organization_name ?></a></td>
                                            <td><?= $data->organization_phone ?></td>
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
      