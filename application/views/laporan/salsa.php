<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).

// create new PDF document                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      


$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('GO-LOMBA');
$pdf->SetTitle('Registration Form');
$pdf->SetSubject('Form pendaftaran');

// set default header data

$pdf->SetHeaderData("logo_uicci.png", 16, "YAYASAN TAHFIDZ SULAIMANIYAH  JAWA BARAT", 'Kantor pusat :Jl.Kembang V No.103-151 RT 4/ RW 2 Kwitang,Senen,Kota Jakarta Pusat,
Daerah Khusus Ibukota Jakarta 10420 Telp : 0878 74978104–0856 9462 8948 Website : www.uicci.org
', array(0, 64, 255), array(0, 64, 128));

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, 25, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
	require_once(dirname(__FILE__) . '/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('freeserif', '', 10);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();

// set text shadow effect
$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(0, 0, 0), 'opacity' => 0.4, 'blend_mode' => 'Normal'));

// Set some content to print
$title = '<div style="text-align:center"><center><img src="" width="50" height="50">
<h3>FORM DAFTAR ULANG<br>YT SULAIMANIYAH JAWA BARAT</h3></center></div>';
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'c', true);
$table = '<table width="100%" border="1" cellpadding="6">';
$table .= '
	<tr >
		<td width="4%">1.</td>
		<th width="26%">Nama : </th>
		<td width="70%">'. $pendaftar['nama'] .'</td>
	</tr>
	<tr >
		<th>2.</th>
		<th>LULUSAN (SMP/SD) : </th>
		<th>'. $pendaftar['lulusan'] .'</th>
	</tr>
	<tr >
		<th>3.</th>
		<th>NO. HP/WA : </th>
		<th>'. $pendaftar['no_hp'] .'</th>
	</tr>
	<tr >
		<th>4.</th>
		<th>NIK : </th>
		<th>'. $pendaftar['nik'] .'</th>
	</tr>
	<tr >
		<th>5.</th>
		<th>NISN : </th>
		<th>'. $pendaftar['nisn_santri'] .'</th>
	</tr>
	<tr >
		<th>6.</th>
		<th>UKURAN BAJU : </th>
		<th>'. $pendaftar['uk_baju'] .'</th>
	</tr>
	<tr >
		<th>7.</th>
		<th>UKURAN CELANA : </th>
		<th>'. $pendaftar['uk_celana'] .'</th>
	</tr>
	<tr >
		<th>8.</th>
		<th>UKURAN TAKE/KOPYAH : </th>
		<th>'. $pendaftar['uk_kopiyah'] .'</th>
	</tr>
	<tr >
		<th>9.</th>
		<th>INFAQ MASUK YANG SUDAH DI TRANSFER : </th>
		<th>'. $pendaftar['infaq'] .'</th>
	</tr>
	
</table>';
$pdf->WriteHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, 'c', true);

$content = '

<h3>Kemeja Slimfit</h3>
<table cellpadding="6" width="50%" border="1">
	<tr style="background-color : red !important">
		<th width="100"><small>Ukuran (cm) </small></th> 
		<th><small>14.5</small></th>
		<th><small>15</small></th>
		<th><small>15.5</small></th>
		<th><small>16</small></th>
		<th><small>16.5</small></th>
		<th><small>17</small></th>
	</tr> 
	<tr>
		<th><small>Lebar dada</small></th> 
		<th><small>48</small></th>
		<th><small>50</small></th>
		<th><small>52</small></th>
		<th><small>54</small></th>
		<th><small>56</small></th>
		<th><small>68</small></th>
	</tr>
	<tr>
		<th><small>Panjang Kemeja</small></th> 
		<th><small>66</small></th>
		<th><small>68</small></th>
		<th><small>70</small></th>
		<th><small>72</small></th>
		<th><small>74</small></th>
		<th><small>76</small></th>
	</tr>
	<tr>
		<th><small>Panjang tangan</small></th> 
		<th><small>58</small></th>
		<th><small>59</small></th>
		<th><small>60</small></th>
		<th><small>61</small></th>
		<th><small>62</small></th>
		<th><small>63</small></th>
	</tr>
	<tr>
		<th><small>pundak/bahu</small></th> 
		<th><small>44</small></th>
		<th><small>45</small></th>
		<th><small>46</small></th>
		<th><small>47</small></th>
		<th><small>48</small></th>
		<th><small>49</small></th>
	</tr>
</table>
<h3>Kemeja Reguler</h3>
<table cellpadding="6" width="50%" border="1">
	<tr style="background-color : red !important">
		<th width="100"><small>Ukuran (cm) </small></th> 
		<th><small>14.5</small></th>
		<th><small>15</small></th>
		<th><small>15.5</small></th>
		<th><small>16</small></th>
		<th><small>16.5</small></th>
		<th><small>17</small></th>
	</tr> 
	<tr>
		<th><small>Lebar dada</small></th> 
		<th><small>48</small></th>
		<th><small>50</small></th>
		<th><small>52</small></th>
		<th><small>54</small></th>
		<th><small>56</small></th>
		<th><small>68</small></th>
	</tr>
	<tr>
		<th><small>Panjang Kemeja</small></th> 
		<th><small>66</small></th>
		<th><small>68</small></th>
		<th><small>70</small></th>
		<th><small>72</small></th>
		<th><small>74</small></th>
		<th><small>76</small></th>
	</tr>
	<tr>
		<th><small>Panjang tangan</small></th> 
		<th><small>58</small></th>
		<th><small>59</small></th>
		<th><small>60</small></th>
		<th><small>61</small></th>
		<th><small>62</small></th>
		<th><small>63</small></th>
	</tr>
	<tr>
		<th><small>pundak/bahu</small></th> 
		<th><small>44</small></th>
		<th><small>45</small></th>
		<th><small>46</small></th>
		<th><small>47</small></th>
		<th><small>48</small></th>
		<th><small>49</small></th>
	</tr>
</table>

<h3>CELANA REGULAR</h3>
<table cellpadding="6" width="100%" border="1">
	<tr style="background-color : red !important">
		<th width="100"><small>Ukuran (cm) </small></th> 
		<th><small>28</small></th>
		<th><small>29</small></th>
		<th><small>30</small></th>
		<th><small>31</small></th>
		<th><small>32</small></th>
		<th><small>33</small></th>
		<th><small>34</small></th>
		<th><small>35</small></th>
		<th><small>36</small></th>
	</tr> 
	<tr>
	<th width="100"><small>Ukuran (cm) </small></th> 
		<th><small>28</small></th>
		<th><small>29</small></th>
		<th><small>30</small></th>
		<th><small>31</small></th>
		<th><small>32</small></th>
		<th><small>33</small></th>
		<th><small>34</small></th>
		<th><small>35</small></th>
		<th><small>36</small></th>
	</tr>
	<tr>
	<th width="100"><small>Ukuran (cm) </small></th> 
		<th><small>28</small></th>
		<th><small>29</small></th>
		<th><small>30</small></th>
		<th><small>31</small></th>
		<th><small>32</small></th>
		<th><small>33</small></th>
		<th><small>34</small></th>
		<th><small>35</small></th>
		<th><small>36</small></th>
	</tr>
	<tr>
	<th width="100"><small>Ukuran (cm) </small></th> 
		<th><small>28</small></th>
		<th><small>29</small></th>
		<th><small>30</small></th>
		<th><small>31</small></th>
		<th><small>32</small></th>
		<th><small>33</small></th>
		<th><small>34</small></th>
		<th><small>35</small></th>
		<th><small>36</small></th>
	</tr>
</table>

<br>
<br>
<br>
<div style="text-align: center">
<center><img src="" width="50" height="50">
<h3 style="align-text : center">FORMULIR KESEDIAAN MEMBAYAR</h3></center>
</div>
<p>Yang bertanda tangan di bawah ini : </p>
<table cellpadding="6" width="100%" border="0">
	<tr style="background-color : red !important">
		<th width="170">Nama  </th> 
		<th>: '. $pendaftar['nama_ortu'] .'</th>
	</tr> 
	<tr>
	<th width="170">Alamat Rumah  </th> 
		<th>: '. $pendaftar['alamat_rumah'] .' </th>
	</tr>
	<tr>
	<th width="170">Telepon Rumah/HP  </th> 
		<th>: '. $pendaftar['no_hp'] .' </th>
	</tr>
	<tr>
			<th width="170">Pekerjaan/Jabatan  </th> 
			<th>: '. $pendaftar['pekerjaan'] .' </th>
	</tr>
	<tr>
			<th width="170">Alamat Kantor/Pekerjaan  </th> 
			<th>: '. $pendaftar['alamat_kantor'] .' </th>
	</tr>
	<tr>
			<th width="170">Telepon	  </th> 
			<th>: '. $pendaftar['telepon'] .' </th>
	</tr>
</table>
<p>Adalah orang tua/wali dari Santri, </p>
<table cellpadding="6" width="100%" border="0">
	<tr style="background-color : red !important">
		<th width="170">Nama  </th> 
		<th>: '. $pendaftar['nama'] .' </th>
	</tr> 
	<tr>
	<th width="170">NIS  </th> 
		<th>: '. $pendaftar['nisn'] .' </th>
	</tr>
	<tr>
	<th width="170">YTS  Cabang  </th> 
		<th>: '. $pendaftar['yts_cabang'] .' </th>
	</tr>
	<tr>
			<th width="170">Kelas Santri	  </th> 
			<th>: '. $pendaftar['kelas_santri'] .' </th>
	</tr>
	<tr>
			<th width="170">No. Telepon/HP   </th> 
			<th>: '. $pendaftar['no_hp'] .'</th>
	</tr>
</table>
<P>Menyatakan bahwa saya bersedia untuk membayar Biaya Pendidikan (BP) Yayasan  Tahfıdz Sulaimaniyah Jabar<br>Dengan rincian sebagai berikut: </P>
<table cellpadding="6" width="50%" border="0">
	<tr style="background-color : red !important">
		<th width="200">Infaq Masuk (IM)  </th> 
		<th>: Rp. 3.500.000,-</th>
	</tr> 
	<tr>
	<th width="200">Infaq Perlengkapan</th> 
		<th>: Rp. 1.500.000,-</th>
	</tr>
	<tr>
	<th width="200">Infaq Makan/bulan  </th> 
		<th>: Rp. 900.000,-</th>
	</tr>
</table>
<br>

<p>Demikian Surat Kesediaan Membayar ini saya buat dalam keadaan sadar dan tanpa tekanan. Saya bersedia menerima keputusan yang akan dikeluarkan oleh Yayasan Tahfıdz  Sulaimaniyah Jawa Barat dalam penentuan besaran Biaya Pendidikan dan Uang Makan yang harus saya bayarkan.</p>
<br>
<div style="text-align:right">
	<p>Jawa Barat, ' . date("d F Y", time()) . '</p>
	<br>
	<h4>Yang Membuat Pernyataan,</h4>
</div>

<br>
<p>.</p>

<div style="text-align:left">
	<p>(....................)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  (....................)</p>
</div>
</br>
</br>
</br>
</br>
<p>.</p>

</br>
</br>
<div style="text-align:center">
<center><h3 style="text-align : center; margin-top : 100px;">SURAT PERJANJIAN WALI SANTRI</h3></center>
</div>
<table cellpadding="6" width="100%" border="0">
	<tr style="background-color : red !important">
		<th width="170">Nama  </th> 
		<th>: '. $pendaftar['nama_ortu'] .' </th>
	</tr> 
	<tr>
	<th width="170">Alamat Rumah  </th> 
		<th>: '. $pendaftar['alamat_rumah'] .' </th>
	</tr>
	<tr>
	<th width="170">Telepon Rumah/HP  </th> 
		<th>: '. $pendaftar['no_hp'] .' </th>
	</tr>
	<tr>
			<th width="170">Pekerjaan/Jabatan  </th> 
			<th>: '. $pendaftar['pekerjaan'] .' </th>
	</tr>
	<tr>
			<th width="170">Alamat Kantor/Pekerjaan  </th> 
			<th>: '. $pendaftar['alamat_kantor'] .' </th>
	</tr>
	<tr>
			<th width="170">Telepon	  </th> 
			<th>: '. $pendaftar['telepon'] .' </th>
	</tr>
</table>
<p>Adalah orang tua/wali dari Santri, </p>
<table cellpadding="6" width="100%" border="0">
	<tr style="background-color : red !important">
		<th width="170">Nama  </th> 
		<th>: '. $pendaftar['nama'] .' </th>
	</tr> 
	<tr>
	<th width="170">NIS  </th> 
		<th>: '. $pendaftar['nisn'] .' </th>
	</tr>
	<tr>
	<th width="170">YTS  Cabang  </th> 
		<th>: '. $pendaftar['yts_cabang'] .' </th>
	</tr>
	<tr>
			<th width="170">Kelas Santri	  </th> 
			<th>: '. $pendaftar['kelas_santri'] .' </th>
	</tr>
	<tr>
			<th width="170">No. Telepon/HP   </th> 
			<th>: '. $pendaftar['no_hp'] .' </th>
	</tr>
</table>
<P>Menyatakan bahwa kami :</P>
<ol>
<li>Bersedia mengikuti semua peraturan yang ada di ponpes Sulaimaniyah</li>
<li>Bersedia mengikuti rapat wali santri</li>
<li>Bersedia dan merelakan setiap santri dalam menempuh setiap pendidikan dan bersedia apabila suatu saat karena system pendidikan yang berlaku santri akan dipindah di cabang Sulaimaniyah yang lain.</li>
</ol>
<br>
<br>
<div style="text-align:center">
<center><p style="text-align : center; text-color : red">Jawa Barat, ' . date('d F Y', time()) . '<br>Yang Membuat Pernyataan,</p><br><p>.</p><br><br><p style="text-align : center; margin-top : 100px;">Materai. 6000,-</p><br><br><br><p style="text-align : center; margin-top : 100px;">(     ………………………………….…….   )<br>WALI SANTRI</p></center>
</div>
<p>.</p>
<p>.</p>

<p>
<br>
<b>Penutup</b><br>
<br>
UICCI – SULAIMANIYAH berhak penuh dalam penentuan Siswa yang akan diberi beasiswa ke Turki dengan pertimbangan oleh pihak UICCI – SULAIMANIYAH.<br><br>
Apabila Santri Tidak Bisa Mengikuti Program Pendidikan Sesuai Dengan Target Yang Sudah Ditentukan Maka Akan Diluluskan Dari Pesantren Sulaimaniyah  Tanpa Diberangkatkan Ke Turki <br><br>
Peraturan tata tertib ini berlaku sejak tanggal ditetapkan, dan apabila di kemudian hari terdapat kekeliruan akan ditinjau dan ditetapkan kembali.<br><br>
</p>

<div style="text-align:center">
<center><p style="text-align : center; text-color : red">Jawa Barat / ........... 20.....<br><b>TTD</b><br><b>KETUA YAYASAN TAHFIDZ SULAIMANIYAH </b></p></center></div>
<table align="center" cellpadding="40" width="100%" border="1">
	<tr align="center" valign="top" cellpadding="10"  style="background-color : red !important">
		<th valign="top">PIHAK YTS-SULAIMANIYAH</th> 
		<th valign="top">PIHAK WALI MURID</th>
		<th valign="top">MURID</th>
	</tr> 
	<tr align="center" valign="top" cellpadding="40"  style="background-color : red !important">
		<th valign="top"></th> 
		<th valign="top">Materai Rp. 6000,-</th>
		<th valign="top"></th>
	</tr> 
</table>

';
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $content, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('REGISTRATION.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
