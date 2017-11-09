<?php
$target_dir = "uploads/signature/";
$target_file = $target_dir . basename($_FILES["TrSign"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["TrSign"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "صيغة التوقيع غير صحيحة, الصيغ المقبولة هي png.gif,jpg, jpeg";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "الملف محمل مسبقاً";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["TrSign"]["size"] > 500000) {
    echo "حجم الملف كبير جداً ";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "صيغة التوقيع غير صحيحة, الصيغ المقبولة هي png.gif,jpg, jpeg";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "عذرا لم يتم تحميل الملف";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["TrSign"]["tmp_name"], $target_file)) {
        echo "تم تحميل الملف بنجاح";
    } else {
        echo "عذرا لم يتم تحميل الملف";
    }
}
?>