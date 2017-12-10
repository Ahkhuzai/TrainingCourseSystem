<?php
//============================================================+
// File name   : example_051.php
// Begin       : 2009-04-16
// Last Update : 2013-05-14
//
// Description : Example 051 for TCPDF class
//               Full page background
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
 * @abstract TCPDF - Example: Full page background
 * @author Nicola Asuni
 * @since 2009-04-16
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {
	//Page header
	public function Header() {
		// get the current page break margin
		$bMargin = $this->getBreakMargin();
		// get current auto-page-break mode
		$auto_page_break = $this->AutoPageBreak;
		// disable auto-page-break
		$this->SetAutoPageBreak(false, 0);
		// set bacground image
		$img_file = K_PATH_IMAGES.'cer.jpg';
		$this->Image($img_file, 0, 0, 300, 210, '', '', '', false, 300, '', false, false, 0);
		// restore auto-page-break status
		$this->SetAutoPageBreak($auto_page_break, $bMargin);
		// set the starting point for the page content
		$this->setPageMark();
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('DSR');
$pdf->SetTitle('CERTIFICATE');
$pdf->SetSubject(' ');
$pdf->SetKeywords('');

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(0);
$pdf->SetFooterMargin(0);

// remove default footer
$pdf->setPrintFooter(false);

// set auto page breaks
$pdf->SetAutoPageBreak(FALSE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 48);

// add a page
$pdf->AddPage('L');


// set some language dependent data:
$lg = Array();
$lg['a_meta_charset'] = 'UTF-8';
$lg['a_meta_dir'] = 'rtl';
$lg['a_meta_language'] = 'fa';
$lg['w_page'] = 'page';

// set some language-dependent strings (optional)
$pdf->setLanguageArray($lg);

// ---------------------------------------------------------
// Restore RTL direction
$pdf->setRTL(true);

// set font
$pdf->SetFont('aefurat', '', 16);
$pdf->SetXY(15, 78);
$pdf->Cell(0, 20, 'احلام الخزاعي',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 80);
$pdf->Cell(30, 0, 'Ahlam Alkhuzao', 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->SetXY(15, 88);
$pdf->Cell(30, 0, 'قد أتمت حضور دورة اعداد الباحثين',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 90);
$pdf->Cell(30, 0, 'has attendent the work shop OF RESERCHER ', 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->SetXY(15, 98);
$pdf->Cell(30, 0, 'يوم الاثنين الموافق 12-12-2017',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 100);
$pdf->Cell(30, 0, 'On Monday 12-12-2017 ', 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->SetXY(15, 108);
$pdf->Cell(30, 0, 'بما يعادل 10 ساعه /ـات تدريبية',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 110);
$pdf->Cell(30, 0, 'Consisting of 10 hours of training', 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->Image('images/sig.png', 170, 170, 20, 20, '', '', 'L', false, 0, '', false, false, 0, false, false, false);
$pdf->SetXY(120, 190);
$pdf->Cell(30, 0, 'د.احمد الخزاعي',0, $ln=0, 'C', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(120, 200);
$pdf->Cell(30, 0, 'Dr.Ahmed Alkhuzai',0, $ln=0, 'C', 0, '', 0, false, 'D', 'C');





// set LTR direction for english translation


// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_051.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
