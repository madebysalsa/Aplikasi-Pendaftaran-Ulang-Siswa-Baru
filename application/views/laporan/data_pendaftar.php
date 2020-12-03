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
$pdf->SetAuthor('Daarul Ilmi');
$pdf->SetTitle('Registration Form');
$pdf->SetSubject('Form pendaftaran');

// set default header data

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set header and footer fonts
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(_FILE_) . '/lang/eng.php')) {
	require_once(dirname(_FILE_) . '/lang/eng.php');
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
$title = '<div style="text-align:center"><img src="http://localhost/pesantren/assets/images/author.jpg" width="50" height="50">
<center><h3>Daftar Pendaftaran Haqqo Remaja<br> حقت القر ان العلم | HALALQOTUL QURAN (HAQQO) DARUL ILMI<br><small>Masjid Daarul ilmi,Kav. Kejaksaan blok D no83-84, Pondok Bambu, Jakarta Timur (Telp: 021-8604502)</small></h3></center></div>';
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'c', true);
$table = '<table width="1000" border="1" cellpadding="5">';
$table .= '<tr>
                <th width="11%" >Nama lengkap </th>
                <th width="6%" >Jenis Kelamin </th>
                <th width="8%" >Tempat/Tanggal Lahir </th>
                <th width="14%" >Alamat </th>
                <th width="9%" >Nomor Telepon </th>
                <th width="14%" >Email </th>
            </tr>';

            
            
            foreach ($pendaftar as $p) {
                 $table .=
                '<tr>
                    <td>'. $p['nama'] .'</td>
                    <td>'. $p['jkel'] .'</td>
                    <td>'. $p['tpt_lahir'] . '<br>' . $p['tgl_lahir']. '</td>
                    <td>'. $p['alamat'] .'</td>
                    <td>'. $p['no_telp'] .'</td>
                    <td>'. $p['email'] .'</td>
                </tr>';
            };
            
            $table .= '</table>';
            
            $pdf->writeHTMLCell(0, 0, '', '', $table, 0, 1, 0, true, '', true);

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('REGISTRATION.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+