

<!-- Page Heading -->
          

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tabel Gambar</h1>
                <button data-toggle="modal" data-target="#upload_gambar" class="btn btn-primary">Tambah data <i class="fas fa-plus"></i></button>
                <?= $this->session->flashdata('flash') ?>
                <?= validation_errors()?>
                <div style="overflow-x : scroll;">
                
                <table id="myTable" class="table">
                    <thead>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Gambar</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($gambar as $g) :?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $g['keterangan'] ?></td>
                            
                            <td><img src="<?php echo base_url('upload/img/'.$g['gambar']); ?>"/>
                            </td>
                            <td><?= $g['kategori'] ?></td>
                            
                            <td>
                            <a href="<?= base_url() ?>admin/delete_gambar/<?= $g['id_gambar'] ?>" class="btn btn-danger"><i class="fas fa-ban"></i> </a>       
                            <a href="<?= base_url() ?>admin/edit_upload/<?= $g['id_gambar'] ?>" class="btn btn-success"><i class="fas fa-pen"></i> </a>       
                        </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
              </div></div>
                
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Tambah Modal-->
  <div class="modal fade" id="upload_gambar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
          <?= form_open_multipart('admin/upload')?>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control-file">
          </div>
          <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="kategori" class="form-control">
            <?= form_error('keterangan','<small class="text-danger">','</small>')?>
          </div>
          <div class="form-group">
            <label for="keterangan">keterangan</label>
            <input type="text" name="keterangan" id="keterangan" class="form-control">
            <?= form_error('keterangan','<small class="text-danger">','</small>')?>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="submit" >Submit</button>
        </div>
      </div>
    </div>
  </div>

  </form>