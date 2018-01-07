<?php
require_once"../DAL/PersonaRepo.php";
require_once"../DAL/UserRepo.php";
require_once"../DAL/UserRoleRepo.php";
$per= new PersonaRepo();
$usr = new UserRepo();
$usrRole= new UserRoleRepo();
try {
    $dbstr1 = " (DESCRIPTION =
                                (ADDRESS = (PROTOCOL = TCP)(HOST = uqu-scan.uqu.local)(PORT = 1521))
                                (CONNECT_DATA =
                                  (SERVER = DEDICATED)
                                  (SERVICE_NAME = uquprod)
                                )
                              )";

    $conn = oci_pconnect('rsh', 'rsh#2015$', $dbstr1, 'AL32UTF8') or die(ocierror());
    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    } else {
        $dateFormatSet = oci_parse($conn, 'Alter Session SET NLS_DATE_FORMAT = "DD-MM-YYYY"');
        oci_execute($dateFormatSet);
        $sql = oci_parse($conn, 'SELECT * FROM vrsh_instructors');
        oci_execute($sql);
        $count=0;
        while (($row = oci_fetch_array($sql, OCI_ASSOC))) {
            $instructor[$count]=$row;
            $perId= $per->save(0,$instructor[$count]['EMPLOYEE_ID'],$instructor[$count]['EMPLOYEE_NAME'],$instructor[$count]['EMPLOYEE_NAME_S'],
                    $instructor[$count]['MOBILE_NO'], $instructor[$count]['FACULTY_NAME'], NULL, NULL, $instructor[$count]['EMPLOYEE_CERTIFICATE'],  $instructor[$count]['DEPT_CODE'], $instructor[$count]['DEPT_CODE'] ,
                    0,  $instructor[$count]['RANK_DESC'], $instructor[$count]['GENDER_DESC'], $instructor[$count]['NATIONALITY_DESC']);
            $username = explode("@", $instructor[$count]['EMAIL']);
            $usr_id= $usr->save(0,$username[0], NULL, $instructor[$count]['EMAIL'], $perId);
            $usrRole->save(0, $usr_id, 2);
            $count++;
        }
        



    }

} catch (Exception $e) {
    echo $e->getMessage();
}
?>