<?php
include "../libs/HijriDate/uCal.class.php";
$d = new uCal;
$d->setLang("ar");

echo "<div dir=\"rtl\">تاريخ اليوم: <b>" . $d->date("Y-m-d   l, F jS h:i A");