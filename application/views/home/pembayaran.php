<div id="overviews" class="section lb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8  offset-md-2">
				<h3>Formulir Kesediaan Membayar </h3>

				<p class="lead">Pastikan anda melakukan daftar ulang sesuai lokasi tujuan anda</p>

			</div>
		</div>
		<div class="container">

			<div class="row mt-3 mb-5 justify-content-center">
				<div class="col-md-6">


					<form action="<?= base_url()?>home/pembayaran/<?= $pendaftar['nisn_santri']?>" method="post">
						<div class="form-group">
							<label for="Nama">Nama Wali: </label>
							<input name="nama_ortu" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Nama Orang Tua/Wali">
							<?= form_error('nama_ortu','<small class="text-danger">','</small>')?>

						</div>
						<div class="form-group">
							<label for="Nama">Alamat Rumah : </label>
							<input name="alamat_rumah" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Alamat Rumah">
							<?= form_error('alamat_rumah','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Nomor Telepon/HP : </label>
							<input name="no_hp" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Nomor Telepon/Handphone">
							<?= form_error('no_hp','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Pekerjaan : </label>
							<input name="pekerjaan" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Pekerjaan">
							<?= form_error('pekerjaan','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Alamat Pekerjaan : </label>
							<input name="alamat_kantor" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Alamat Kantor">
							<?= form_error('alamat_kantor','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Telepon :</label>
							<input name="telepon" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Telepon Pekerjaan">
							<?= form_error('telepon','<small class="text-danger">','</small>')?>
						</div>


				</div>
				<div class="col-lg-6">

						<div class="form-group">
							<label for="Nama">Nama : </label>
							<input name="nama" type="text" class="form-control "  disabled id="exampleFormControlInput1"
								placeholder="Nama Santri" value="<?= $pendaftar['nama']?>">
							<?= form_error('nama','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">NISN : </label>
							<input name="nisn" type="text" class="form-control" disabled id="exampleFormControlInput1"
								placeholder="Nomor INduk Siswa Nasional"  value="<?= $pendaftar['nisn_santri']?>">
							<input name="nisn" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="lNomor INduk Siswa Nasional" hidden value="<?= $pendaftar['nisn_santri']?>">
							<?= form_error('nisn','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
                            <label for="Nama">YTS Cabang : </label>
                            <select name="yts_cabang" class="form-control" >
                                <?php foreach( $lokasi as $l) :?>
									<option value="<?= $l['lokasi'] ?>"><?= $l['lokasi']?></option>
                                <?php endforeach?>
                            </select>
							<?= form_error('yts_cabang','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Kelas Santri : </label>
							<select name="kelas_santri" class="form-control" >
                                <option value="PraTahfidz ">PraTahfidz </option>
                                <option value="Tahfidz">Tahfidz</option>
                                <option value="Tadris ">Tadris </option>
                            </select>
							<?= form_error('kelas_santri','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Telepon/Handphone : </label>
							<input name="no_telp" type="text" class="form-control" 
								value="<?= $pendaftar['no_telp']?>" disabled id="exampleFormControlInput1"
								placeholder="Nomor Telepon/Handphone">
							<?= form_error('no_telp','<small class="text-danger">','</small>')?>
						</div>
				</div>
			</div>

		</div>
		<hr>
		<div class="row">
			<div class="col-lg text-center">
				<button class="btn btn-primary" type="submit">
					Selanjutnya
				</button>
			</div>
		</div>
	</div>
</div>

</form>
						

