<?php
session_start();
require_once '../DAL/RegistrationRepo.php';
require_once '../TrainingCourseModule.php';
error_reporting(0);
$tcMan=new TrainingCourseModule();
require_once '../RegistrationModule.php';
error_reporting(0);
$trMan=new RegistrationModule();
if($_SESSION['user_id'])
{
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
    $pdf->SetTitle('RegisrationForm');
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
    $pdf->AddPage('P');
    $pdf->setRTL(true);
    $pdf->SetLineStyle( array( 'width' => 0.5, 'color' => array(49, 86, 32)));
    $pdf->Rect(5, 5, $pdf->getPageWidth()-10, $pdf->getPageHeight()-10);
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
    //get Information: 
    $tt_id=$_SESSION['tt_id'];
    $tcResult= $tcMan->getSingleTrainingCourseInfo($tt_id);
    $tcname=$tcResult['tc_ar_name'];
    $trname=$tcResult['tr_ar_name'];
    $date_ar=$tcResult['start_date'];
    $location=$tcResult['location'];
    $user_id=$_SESSION['user_id'];
    $usrInfo=$trMan->getTraineeInfo($user_id);
    $tename=$usrInfo['ar_name'];
    $teuqu=$usrInfo['uqu_id'];
    $department=$usrInfo['department'];
    //$barcode=$tt_id.'-'.$user_id;
    $barcode = "http://dsr.uqu.edu.sa/rtp/Admin/takingAttendance.php?usr_id=$user_id&tt_id=$tt_id";
    // set font
    $pdf->SetFont('Sakkal_Majalla', '', 14, '', false);
    $pdf->Image('../images/logo_dsr.png', 130, 15, 40, 20, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);
    
    $pdf->SetXY(15, 40);
    $pdf->writeHTML("<hr>", true, false, false, false, '');

    $pdf->Cell(0, 50, '(( نموذج طلب التسجيل ))',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->SetXY(15, 50);
    $pdf->Cell(0, 0, 'اسم الدورة :'.$tcname,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->SetXY(15, 60);
    $pdf->Cell(0, 0, 'اسم المدرب :'.$trname,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->SetXY(15, 70);
    $pdf->Cell(0, 0, 'تاريخها  :'.$date_ar,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->SetXY(15, 80);
    $pdf->Cell(0, 0, 'مكان إقامة الدورة  :'.$location,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->writeHTML("<hr>", true, false, false, false, '');
    $pdf->SetXY(15, 90);
    $pdf->Cell(0, 0, 'اسم المتدرب :'.$tename,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->SetXY(15, 100);
    $pdf->Cell(0, 0, 'رقم المنسوب  :'.$teuqu,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->SetXY(15, 110);
    $pdf->Cell(0, 0, 'الكلية:'.$department,0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    $pdf->writeHTML("<hr>", true, false, false, false, '');
    $pdf->SetXY(15, 120);
    $pdf->SetFont('Sakkal_Majalla', '', 12, '', false);
    $pdf->Cell(0, 0, '**لتسجيل حضورك في الدورة .. الرجاء احضاء طلب التسجيل مع مراعاة وضوح الbarcode',0, $ln=0, 'R', 0, '', 0, false, 'D', 'C');
    // new style
    $style = array(
    'border' => 2,
    'padding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => array(255,255,255)
    );
    // QRCODE,H : QR-CODE Best error correction
    $pdf->write2DBarcode($barcode, 'QRCODE,H', 140, 150, 50, 50, $style, 'N');
  
//Close and output PDF document
    $pdf->Output('RegistrationRequest.pdf', 'I');

}
else 
    header('Location:SingleRegister.php');