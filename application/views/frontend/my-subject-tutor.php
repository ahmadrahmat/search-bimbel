
      <!-- Inner Header -->
      <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">My Subject</h1>
                  <p class="mb-0 text-white"><a class="text-white" href="#">My Account</a>  /  <span class="text-success">My Subject</span></p>
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
                           <h5 class="card-title mb-4">My Subject</h5>
                           <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Subject</th>
                                        <th>Subject Type</th>
                                        <th>Deskripsi</th>
                                        <th>Organisasi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php $no = 1;
                                    foreach ($row->result() as $key => $data) : ?>
                                        <tr>
                                            <td style="width: 5%"><?= $no++ ?></td>
                                            <td><?= $data->name ?></td>
                                            <td><?= $data->subject_type_name ?></td>
                                            <td><?= $data->description ?></td>
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
      