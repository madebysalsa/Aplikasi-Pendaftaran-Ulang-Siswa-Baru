

<!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Halaman Pendaftar</h1>
            <div class="row">
              <div class="col-lg-6">
              <form action="<?= base_url() ?>document/cetak_lokasi" method="post">
                <select name="lokasi" id="lokasi" class="form-control">
                  <?php foreach($lokasi as $l) : ?>
                    <option value="<?= $l['lokasi'] ?>"><?= $l['lokasi'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-lg-6">
                <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Data Lokasi</button>
              </form>
              </div>
            </div>
          </div>
  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-12 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Table Pendaftar</h1>
                <div style="overflow-x : scroll;">
                <table id="myTable" class="table">
                    <thead>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Lulusan</th>
                        <th>Nomor Telepon</th>
                        <th>NIK</th>
                        <th>NISN</th>
                        <th>Ukuran Baju</th>
                        <th>Ukuran Celana</th>
                        <th>Ukuran Kopiyah</th>
                        <th>Infaq</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($pendaftar as $p) :?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['lulusan'] ?></td>
                            <td><?= $p['no_telp'] ?></td>
                            <td><?= $p['nik'] ?></td>
                            <td><?= $p['nisn_santri'] ?></td>
                            <td><?= $p['uk_baju'] ?></td>
                            <td><?= $p['uk_celana'] ?></td>
                            <td><?= $p['uk_kopiyah'] ?></td>
                            <td><?= $p['infaq'] ?></td>
                            <td>
                            <a href="<?= base_url() ?>admin/delete_pendaftar/<?= $p['id'] ?>" class="btn btn-danger"><i class="fas fa-ban"></i> </a>       
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

 