<?php
include 'libs/smarty/libs/Smarty.class.php';
require_once 'TrainingCourse.php';
$smarty = new Smarty();
error_reporting(0);
if (isset($_POST['upload'])) {
    if ($_FILES['fileToUpload']['error'] == 0) {   
        $uploaddir = 'uploads/cv/';
        $userid=1;
        $FileType = pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION);
        $uploadfile = $uploaddir .$userid.' - '.'cv - '.date("Y-m-d").'.'.$FileType;
        
        if (file_exists($uploadfile))
            echo "الملف محمل مسبقاً";
        else
        {
            //check file extention 
            if($_FILES['fileToUpload']['type']=='application/pdf' || $_FILES['fileToUpload']['type']=='application/vnd.wordperfect' || $_FILES['fileToUpload']['type']=='application/msword' )
                    //check file size 
                    if($_FILES['fileToUpload']['size']<=500000)
                    {

                        echo $uploadfile;
                        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
                            echo "File is valid, and was successfully uploaded.\n";
                        } else {
                            echo "Possible file upload attack!\n";
                        }
                    }
                    else 
                        echo 'file size';
            else
                echo 'not supported';
        }
    }
    else 
        echo $_FILES['fileToUpload']['error'];
}
$smarty->display("fileupload.tpl");
?>