        <div class="row">
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Syahriah</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Berisi Informasi pembayaran syahriah.</h6>

                <p class="card-text">Santri dapat melihat history pembayaran syahriah-nya..</p>
                <a href="<?= base_url('santri_spp/view/')?><?= $this->session->userdata['id'];?>" class="btn btn-info">Lihat</a>
              </div>
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Profil</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Berisi data diri.</h6>

                <p class="card-text">Santri dapat mengedit atau melengkapi data diri-nya.</p>
                <a href="<?= base_url('profil_santri/detail/')?><?= $this->session->userdata['id'];?>" class="btn btn-info">Lihat Profil</a>
              </div>
            </div>

          </div>
          <!-- /.col-md-6 -->
        </div>