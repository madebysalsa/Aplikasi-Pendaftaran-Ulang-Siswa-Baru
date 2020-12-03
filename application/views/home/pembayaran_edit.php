<div id="overviews" class="section lb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8  offset-md-2">
				<h3>Formulir Kesediaan Membayar - Jakarta Ali Dayi</h3>
				<p class="lead">Pastikan anda melakukan daftar ulang sesuai lokasi tujuan anda</p>

			</div>
		</div>
		<div class="container">

			<div class="row mt-3 mb-5 justify-content-center">
				<div class="col-md-6">


					<form action="<?= base_url()?>home/edit_pembayaran/<?= $pendaftar['nisn_santri']?>" method="post">
						<div class="form-group">
							<label for="Nama">Nama Wali: </label>
							<input value="<?= $pendaftar['nama_ortu']?>" name="nama_ortu" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Nama Orang Tua/Wali">
							<?= form_error('nama_ortu','<small class="text-danger">','</small>')?>

						</div>
						<div class="form-group">
							<label for="Nama">Alamat Rumah : </label>
							<input value="<?= $pendaftar['alamat_rumah']?>" name="alamat_rumah" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Alamat Rumah">
							<?= form_error('alamat_rumah','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Nomor Telepon/HP : </label>
							<input value="<?= $pendaftar['no_hp']?>" name="no_hp" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Nomor Telepon/Handphone">
							<?= form_error('no_hp','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Pekerjaan : </label>
							<input value="<?= $pendaftar['pekerjaan']?>" name="pekerjaan" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Pekerjaan">
							<?= form_error('pekerjaan','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Alamat Pekerjaan : </label>
							<input value="<?= $pendaftar['alamat_kantor']?>" name="alamat_kantor" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Alamat Kantor">
							<?= form_error('alamat_kantor','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">Telepon :</label>
							<input value="<?= $pendaftar['telepon']?>" name="telepon" type="text" class="form-control"  id="exampleFormControlInput1"
								placeholder="Telepon Pekerjaan">
							<?= form_error('telepon','<small class="text-danger">','</small>')?>
						</div>

<div class="card">
    <div class="card-body">
        				<div class="form-group">
						<label for="Nama">Ukuran Baju : </label> <br>
						<div class="form-check form-check-inline">
							<input name="baju" class="form-check-input" type="radio" id="inlineradio1" value="small">
							<label class="form-check-label" for="inlineradio1">Small</label>
						</div> 
						<div class="form-check form-check-inline">
							<input name="baju" class="form-check-input" type="radio" id="inlineradio2" value="medium">
							<label class="form-check-label" for="inlineradio2">Medium</label>
						</div>

						<div class="form-check form-check-inline">
							<input name="baju" class="form-check-input" type="radio" id="inlineradio2" value="large">
							<label class="form-check-label" for="inlineradio2">Large</label>
						</div>

						<div class="form-check form-check-inline">
							<input name="baju" class="form-check-input" type="radio" id="inlineradio2" value="extralarge">
							<label class="form-check-label" for="inlineradio2">Extra Large</label>
						</div>
						<br>
						<?= form_error('baju','<small class="text-danger">','</small>')?>
					</div>

					<div class="form-group">
						<label for="Nama">Ukuran Celana : </label> <br>
						<div class="form-check form-check-inline">
							<input name="celana" class="form-check-input" type="radio" id="inlineradio1" value="small">
							<label class="form-check-label" for="inlineradio1">Small</label>
						</div>
						<div class="form-check form-check-inline">
							<input name="celana" class="form-check-input" type="radio" id="inlineradio2" value="medium">
							<label class="form-check-label" for="inlineradio2">Medium</label>
						</div>

						<div class="form-check form-check-inline">
							<input name="celana" class="form-check-input" type="radio" id="inlineradio2" value="large">
							<label class="form-check-label" for="inlineradio2">Large</label>
						</div>

						<div class="form-check form-check-inline">
							<input name="celana" class="form-check-input" type="radio" id="inlineradio2" value="extralarge">
							<label class="form-check-label" for="inlineradio2">Extra Large</label>
						</div>
						<br>
						<?= form_error('celana','<small class="text-danger">','</small>')?>
					</div>

					<div class="form-group">
						<label for="Nama">Ukuran Take / Kopiyah : </label> <br>
						<div class="form-check form-check-inline">
							<input name="take" class="form-check-input" type="radio" id="inlineradio1" value="small">
							<label class="form-check-label" for="inlineradio1">Small</label>
						</div>
						<div class="form-check form-check-inline">
							<input name="take" class="form-check-input" type="radio" id="inlineradio2" value="medium">
							<label class="form-check-label" for="inlineradio2">Medium</label>
						</div>

						<div class="form-check form-check-inline">
							<input name="take" class="form-check-input" type="radio" id="inlineradio2" value="large">
							<label class="form-check-label" for="inlineradio2">Large</label>
						</div>

						<div class="form-check form-check-inline">
							<input name="take" class="form-check-input" type="radio" id="inlineradio2" value="extralarge">
							<label class="form-check-label" for="inlineradio2">Extra Large</label>
						</div>
						<br>
						<?= form_error('take','<small class="text-danger">','</small>')?>
					</div>
					<div class="form-group">
						<label for="Nama">Infaq Masuk Yang Sudah Ditransfer : </label>
						<input type="text" name='infaq' class="form-control" id="exampleFormControlInput1" placeholder="Jumlah Infaq">
						<?= form_error('infaq','<small class="text-danger">','</small>')?>
					</div>
	
    </div>
</div>
				</div>
				<div class="col-lg-6">

						<div class="form-group">
							<label for="Nama">Nama : </label>
							<input name="nama" type="text" class="form-control "  id="exampleFormControlInput1"
								placeholder="Nama Santri" value="<?= $pendaftar['nama']?>">
							<?= form_error('nama','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">NISN : </label>
							<input name="nisn" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Nomor INduk Siswa Nasional"  value="<?= $pendaftar['nisn_santri']?>">
							<input name="nisn" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="lNomor INduk Siswa Nasional" hidden value="<?= $pendaftar['nisn_santri']?>">
							<?= form_error('nisn','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
                            <label for="Nama">YTS Cabang : </label>
                            <select name="yts_cabang" class="form-control" >
                                <option value="jakarta">jakarta</option>
                                <option value="Bogor">Bogor</option>
                                <option value="Bandung">Bandung</option>
                                <option value="Bodo Amat">Bodo Amat</option>
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
							<input name="no_hp" type="text" class="form-control" 
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
				<button class="btn btn-primary" type="submit">
					Cetak
				</button>
			</div>
		</div>
	</div>
</div>

</form>
