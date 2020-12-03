

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg">
                <?php if($this->session->flashdata('flash')) : ?>
                <?= $this->session->flashdata('flash') ?>
                <?php endif?>

                
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Halaman Admin </h1>
                  </div>
                  <form class="user" action="<?= base_url()?>login/index" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name = "email" placeholder="Masukan Alamat Email">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name ="password" placeholder="Kata Sandi">
                    </div>
              
                    <button type = "submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
              
                    
                  </form>
                  <hr>
                  
          
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

 