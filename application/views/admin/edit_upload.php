

<!-- Page Heading -->
          

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row justify-content-center">
          
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Edit Gambar</h1>
                <?= $this->session->flashdata('flash') ?>
                <?= validation_errors()?>
                <div style="overflow-x : scroll;">
                
                
                <div class="container">
          <?= form_open_multipart('admin/edit_upload/'.$gambar['id_gambar'])?>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" value="<?= $gambar['gambar']?>" class="form-control-file">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" value="<?= $gambar['kategori']?>" class="form-control">
            <?= form_error('keterangan','<small class="text-danger">','</small>')?>
          </div>
          <div class="form-group">
            <label for="keterangan">keterangan</label>
            <input type="text" name="keterangan" id="keterangan" value="<?= $gambar['keterangan']?>" class="form-control">
            <?= form_error('keterangan','<small class="text-danger">','</small>')?>
          </div>
          <div class="form-group">
            <button class="btn btn-success">Edit</button>
          </div>
          
          </div>
              </div></div>
                
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>