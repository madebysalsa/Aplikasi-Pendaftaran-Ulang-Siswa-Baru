<div id="overviews" class="section lb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8  offset-md-2">
				<h3>Formulir Daftar Ulang</h3>
				

				<p class="lead">Pastikan anda melakukan daftar ulang sesuai lokasi tujuan anda</p>
				<?php if($this->session->flashdata('flash')) : ?>
				<?= $this->session->flashdata('flash') ?>
				<?php endif?>
			</div>
		</div>
		<div class="container">

			<div class="row mt-3 mb-5 justify-content-center">
				<div class="col-md-6">
			<?= validation_errors() ?>
					<form action="<?= base_url()?>home/daftar_ulang" method="post">
						<div class="form-group">
							<label for="Nama">Nama : </label>
							<input name="nama" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Nama Lengkap">
								<?= form_error('nama','<small class="text-danger">','</small>')?>
								
						</div>
						<div class="form-group">
							<label for="Nama">Lulusan (SMP/SD) : </label>
							<input name="lulusan" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Lulusan">
								<?= form_error('lulusan','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">No. HP / WA : </label>
							<input name="no_telp" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Nomor Handphone">
								<?= form_error('no_telp','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">NIK : </label>
							<input name="nik" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Nomor Induk Kependudukan">
								<?= form_error('nik','<small class="text-danger">','</small>')?>
						</div>
						<div class="form-group">
							<label for="Nama">NISN : </label>
							<input name="nisn" type="text" class="form-control" id="exampleFormControlInput1"
								placeholder="Nomor Induk Siswa Nasional">
								<?= form_error('nisn','<small class="text-danger">','</small>')?>
						</div>

				</div>
				<div class="col-lg-6">
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

		<!-- end messagebox 	<div class="row">
				<div class="col-lg-12">
					<strong>
						<h2>Kemeja Slim Fit</h2>
					</strong>
					<hr>
					<table class="table">
						<thead>
							<th>Ukuran (cm) </th>
							<th>14,5</th>
							<th>15</th>
							<th>15.5</th>
							<th>16</th>
							<th>16.5</th>
							<th>17</th>
						</thead>
						<tbody>
							<tr>
								<td>Lebar Dada</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">48</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">50</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">52</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">54</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">56</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">58</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Panjang Kemeja</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">66</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">68</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">70</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">72</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">74</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">76</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Panjang Tangan</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">58</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">59</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">60</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">61</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">62</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">63</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Pundak/Bahu</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">44</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">45</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">46</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">47</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">48</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">49</label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12">
					<strong>
						<h2>Kemeja Reguler</h2>
					</strong>
					<hr>
					<table class="table">
						<thead>
							<th>Ukuran (cm) </th>
							<th>S</th>
							<th>M</th>
							<th>L</th>
							<th>XL</th>
							<th>XXL</th>
						</thead>
						<tbody>
							<tr>
								<td>Lebar Dada</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">52</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">54.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">57</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">59.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">62</label>
									</div>
								</td>

							</tr>
							<tr>
								<td>Panjang Kemeja</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">67.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">70</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">72.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">75</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">77.5</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Panjang Tangan</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">60</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">61.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">63</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">64.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">65</label>
									</div>
								</td>
							</tr>
							<tr>
								<td> <br> Pundak/Bahu</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">46</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">47</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">48</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">49</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="bahu" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">50</label>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>


			<div class="row">
				<div class="col-lg-12">
					<strong>
						<h2> <br> Celana Regular</h2>
					</strong>
					<hr>
					<table class="table">
						<thead>
							<th>Ukuran (cm) </th>
							<th>28</th>
							<th>29</th>
							<th>30</th>
							<th>31</th>
							<th>32</th>
							<th>33</th>
							<th>35</th>
							<th>36</th>
							<th>37</th>
							<th>38</th>
						</thead>
						<tbody>
							<tr>
								<td>Pinggang</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">72.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">75</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">77.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">82.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">85</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">90</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">92.5</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">95</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="dada" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">97.5</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Panjang Kaki + Pinggang - Selangkangan</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+19</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+20</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+21</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+22</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+23</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+24</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+25</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+26</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+27</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="kemeja" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">80+28</label>
									</div>
								</td>
							</tr>
							<tr>
								<td>Pinggul</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">98</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">100</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">102</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">104</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">106</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">110</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">112</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">114</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">116</label>
									</div>
								</td>
								<td>
									<div class="form-check form-check-inline">
										<input name="tangan" class="form-check-input" type="radio" id="inlineradio1" value="option1">
										<label class="form-check-label" for="inlineradio1">118</label>
									</div>
								</td>

							</tr>

							</tr>
						</tbody>
					</table> 
				</div>
			</div>-->
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
