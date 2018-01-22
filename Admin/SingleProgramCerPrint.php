<?php
session_start();
require_once '../TrainingCourseModule.php';
require_once '../RegistrationModule.php';
error_reporting(0);
$tcMan=new TrainingCourseModule();
$trMan=new RegistrationModule();
$result_persona=$trMan->getUserInfo($_SESSION['trainee']);
$resultProgram = $tcMan->getProgramInfo($_SESSION['p_id']);
$name_ar=$result_persona['ar_name'];
$name_eng=$result_persona['eng_name'];
$rank =$result_persona['rank'];
switch($rank)
{
    case 'أستاذ مشارك':
    case'أستاذ مساعد':
    case'أستاذ': { 
        $name_ar='الدكتور/ة '.$name_ar;
        $name_eng='Dr.'.$name_eng;
        break;
    }
    case'مدرس لغة':
    case'أستاذ':
    case'معيد': { 
        $name_ar='الاستاذ/ة '.$name_ar;
        $name_eng='A.'.$name_eng;
        break;
    }            
}

$tcname_ar=$resultProgram['name'];
$tcname_eng=$resultProgram['eng_name'];
$dayofweek = date('w', strtotime($_SESSION['sdate']));
switch($dayofweek)
{
    case 0: {$ar_date_string='الاحد';$eng_date_string='Sunday';break;}
    case 1: {$ar_date_string='الاثنين';$eng_date_string='Munday';break;}
    case 2: {$ar_date_string='الثلاثاء';$eng_date_string='Tuseday';break;}
    case 3: {$ar_date_string='الاربعاء';$eng_date_string='Wednesday';break;}
    case 4: {$ar_date_string='الخميس';$eng_date_string='thursday';break;}
    case 5: {$ar_date_string='الجمعة';$eng_date_string='Friday';break;}
    case 6: {$ar_date_string='السبت';$eng_date_string='Saterday';break;}
}
include "../libs/HijriDate/HijriDate.php";
$hijri = new HijriDate();
$hijri = new HijriDate( strtotime($_SESSION['sdate']) );
$day =$ar_date_string." الموافق ".$hijri->get_day()."  ".$hijri->get_month_name( $hijri->get_month() )." ".$hijri->get_year();
$date_ar=$day;
$date_eng=$eng_date_string.' the '.$_SESSION['sdate'];
$date_eng=date('l jS \of F Y ', strtotime($_SESSION['sdate']));
$hours=$resultProgram['hours'];

require_once '../libs/tcpdf/tcpdf.php';

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
                $img_file = '../images/template/ProgramCer.jpg';
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
$pdf->setRTL(true);

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
// set font
$pdf->SetFont('Sakkal_Majalla', '', 20, '', false);
$pdf->SetXY(15, 78);
$pdf->Cell(0, 20, $name_ar,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 80);
$pdf->Cell(30, 0,$name_eng, 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->SetXY(15, 88);
$pdf->Cell(30, 0, 'قد أتمت حضور برنامج '.$tcname_ar,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 90);
$pdf->Cell(30, 0, 'has attendent the work shop of '.$tcname_eng, 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->SetXY(15, 98);
$pdf->Cell(30, 0,  'في يوم '.$date_ar,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 100);
$pdf->Cell(30, 0, 'On '.$date_eng, 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
$pdf->SetXY(15, 108);
$pdf->Cell(30, 0, ' بما يعادل'.$hours.' ساعه /ـات تدريبية',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
$pdf->SetXY(257, 110);
$pdf->Cell(30, 0, 'Consisting of '.$hours.' hours of training', 0, $ln=0, 'L', 0, '', 0, false, 'D', 'L');
//Close and output PDF document
$pdf->Output('certificate.pdf', 'I');
