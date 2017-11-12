<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';
//error_reporting(0);
$smarty=new Smarty();
$ttid=$_GET['id'];
$tc=new TrainingCourse();
$result=$tc->getSingleTrainingCourseInfo($ttid);

$smarty->assign('name',$result['name']);
$smarty->assign('start_date',$result['start_date']);
$smarty->assign('trAllRate',$result['tr_total_avg_rate']);
$smarty->assign('tcAllRate',$result['tc_total_avg_rate']);
$smarty->assign('url','getSingleRate.php?id='.$ttid);
$smarty->display("oldSingleTC.tpl");

?>