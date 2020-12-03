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
$title = '<div style="text-align:center"><center><img src="http://localhost/pesantren/assets/images/logo_uicci.png" width="50" height="50">
<h3>FORM DAFTAR ULANG<br>YT SULAIMANIYAH '. strtoupper($lokasi_yts) .'</h3></center></div>';
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'c', true);
$i = 1;
$table = '<table width="1000" border="1" align="center" cellpadding="5">';
$table .= '<tr>
                <th width="3%" >No </th>
                <th width="8%" >Nama lengkap </th>
                <th width="5%" >Lulusan </th>
                <th width="9%" >No. Hp </th>
                <th width="9%" >NIK </th>
                <th width="9%" >NISN</th>
                <th width="5%" >Ukuran Baju </th>
                <th width="5%" >Ukuran Celana </th>
                <th width="6%" >Ukuran Kopiyah </th>
                <th width="6%" >Infaq </th>
            </tr>';
            
            
            foreach ($pendaftar as $p) {
                 $table .=
                '<tr>
                    <td>'. $i++ .'</td>
                    <td>'. $p['nama'] .'</td>
                    <td>'. $p['lulusan'] .'</td>
                    <td>'. $p['no_telp'] . '</td>
                    <td>'. $p['nik'] .'</td>
                    <td>'. $p['nisn_santri'] .'</td>
                    <td>'. substr($p['uk_baju'],0,1) .'</td>
                    <td>'. substr($p['uk_celana'],0,1) .'</td>
                    <td>'. substr($p['uk_kopiyah'],0,1) .'</td>
                    <td>'. $p['infaq'] .'</td>
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
