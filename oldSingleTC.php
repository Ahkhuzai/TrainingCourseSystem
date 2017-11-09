<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';
//error_reporting(0);
$smarty=new Smarty();
$tcid=$_GET['id'];
$tc=new TrainingCourse();
$result=$tc->getSingleTrainingCourseInfo($tcid);

$smarty->assign('name',$result['name']);
$smarty->assign('start_date',$result['start_date']);
$smarty->assign('trAllRate',$result['tr_total_avg_rate']);
$smarty->assign('tcAllRate',$result['tc_total_avg_rate']);
$smarty->display("oldSingleTC.tpl");

?>