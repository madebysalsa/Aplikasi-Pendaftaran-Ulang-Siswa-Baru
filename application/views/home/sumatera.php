<div id="overviews" class="section lb">
        <div class="container">
<div class="section-title row text-center">
                <div class="col-md-8 mt-5 offset-md-2">
                    <h3>Cabang Pulau Sumatera</h3>
                    <p class="lead">Pastikan anda melakukan daftar ulang sesuai lokasi tujuan anda</p>
                </div>
            </div>
<?php foreach( $lokasi as $l) : ?>
<div class="container">
        <div class="row mt-3">
            <div class="col-md-12">
                <form action="<?= base_url()?>home/daftarulang/" method="post">
                    <input type="text" value="<?= $l['provinsi'] ?>" class="btn btn-primary" name="lokasi" hidden>
                    <button class="btn btn-primary"><?= $l['provinsi'] ?></button>
                </form>
            </div>
        </div> 
</div>
<?php endforeach?>

<?= $this->session->userdata('lokasi')?>
</div>
</div>
