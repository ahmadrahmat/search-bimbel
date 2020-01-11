        <!-- Inner Header -->
        <section class="section-padding bg-dark inner-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h1 class="mt-0 mb-3 text-white">Popular Bimbel</h1>
                  <div class="breadcrumbs">
                     <p class="mb-0 text-white"><a class="text-white" href="#">Bimbel</a>  /  <span class="text-success">Popular</span></p>
                  </div>
               </div>
            </div>
         </div>
        </section>
      <!-- End Main Slider With Form -->        
        
        <!-- Properties by City -->
        <section class="section-padding bg-white">
         <div class="container">
            <div class="row">
               <?php $no = 1; foreach ($popcity->result() as $key => $datas) : ?>
               <div class="col-lg-4 col-md-4">
                  <div class="card bg-dark text-white card-overlay">
                  <form method="get" action="<?=site_url('home/cari')?>#search">
                     <input name="city" type="hidden" value="<?= $datas->id ?>">
                     <button type="submit" class="btn" style="padding: 0px 0px;">
                        <img class="card-img" src="<?= base_url() ?>assets/frontend/img/overlay/<?= (rand(1,4)); ?>.png" alt="Card image">
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