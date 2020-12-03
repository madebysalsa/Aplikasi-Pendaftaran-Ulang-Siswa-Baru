<div id="overviews" class="section lb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8  offset-md-2">
				<h3>SURAT PERJANJIAN WALI SANTRI</h3>
				<p class="lead">Yang bertanda tangan di bawah ini : </p>

			</div>
		</div>
		<div class="container">

			<div class="row mt-3 mb-5 justify-content-center">
				<div class="col-md-6">


					<form action="<?= base_url()?>home/pembayaran/<?= $pendaftar['nisn_santri']?>" method="post">
						<div class="form-group">
							<label for="Nama">Nama Wali: </label>
							<input name="nama_ortu" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Nama Orang Tua/Wali" value="<?= $pendaftar['nama_ortu']?>">
							<?= form_error('nama_ortu','<small class="text-danger">','</small>')?>

						</div>
						<div class="form-group">
							<label for="Nama">Alamat Rumah : </label>
							<input name="alamat_rumah" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Alamat Rumah" value="<?= $pendaftar['alamat_rumah']?>">
							<?= form_error('alamat_rumah','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Nomor Telepon/HP : </label>
							<input name="no_hp" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Nomor Telepon/Handphone" value="<?= $pendaftar['no_hp']?>">
							<?= form_error('no_hp','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Pekerjaan : </label>
							<input name="pekerjaan" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Pekerjaan" value="<?= $pendaftar['pekerjaan']?>">
							<?= form_error('pekerjaan','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Alamat Pekerjaan : </label>
							<input name="alamat_kantor" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Alamat Kantor" value="<?= $pendaftar['alamat_kantor']?>">
							<?= form_error('alamat_kantor','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Telepon :</label>
							<input name="telepon" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Telepon Pekerjaan" value="<?= $pendaftar['telepon']?>">
							<?= form_error('telepon','<small class="text-danger">','</small>')?>
						</div>


				</div>
				<div class="col-lg-6">

						<div class="form-group">
							<label for="Nama">Nama : </label>
							<input name="nama" type="text" class="form-control " disabled id="exampleFormControlInput1"
								placeholder="Nama Santri" value="<?= $pendaftar['nama']?>">
							<?= form_error('nama','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">NISN : </label>
							<input name="nisn" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Nomor INduk Siswa Nasional" disabled value="<?= $pendaftar['nisn_santri']?>">
							<input name="nisn" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="lNomor INduk Siswa Nasional" hidden value="<?= $pendaftar['nisn_santri']?>">
							<?= form_error('nisn','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
                            <label for="Nama">YTS Cabang : </label>
                            <input disabled value="<?= $pendaftar['yts_cabang']?>" type='text' name="yts_cabang" class="form-control" >
                            
							<?= form_error('yts_cabang','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Kelas Santri : </label>
							<input name="kelas_santri" type="text" class="form-control" disabled value="<?= $pendaftar['kelas_santri']?>" id="exampleFormControlInput1"
								placeholder="Kelas Santri">
							<?= form_error('kelas_santri','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Telepon/Handphone : </label>
							<input name="no_hp" type="text" class="form-control" disabled
								value="<?= $pendaftar['no_hp']?>" id="exampleFormControlInput1"
								placeholder="Nomor Telepon/Handphone">
							<?= form_error('no_hp','<small class="text-danger">','</small>')?>
						</div>
				</div>
			</div>

		</div>
		<hr>
		<div class="row">
			<div class="col-lg text-center">
				<a href='<?= base_url()?>home/edit_pembayaran/<?= $pendaftar['nisn']?>' class="btn btn-success" type="submit">
					Edit Data
                </a>
                <a href='<?= base_url()?>document/index/<?= $pendaftar['nisn']?>' class="btn btn-primary" type="submit">
					Cetak
				</a>
			</div>
		</div>
	</div>
</div>

</form>
