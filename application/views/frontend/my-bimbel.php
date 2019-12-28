
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
      