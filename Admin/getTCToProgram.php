<?php
error_reporting(0);
require_once '../TrainingCourse.php';
$tcMan = new TrainingCourse();

$result = $tcMan->getTcBySid(2);
$x=0;
for ($i = 0; $i < count($result); $i++) {
    if ($result[$i]['pid'] == NULL) {
        $resultArray[$x] = $result[$i];
        $x++;
    }
}
echo json_encode($resultArray);
?>