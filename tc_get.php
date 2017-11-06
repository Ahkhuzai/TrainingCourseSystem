<?php

#Include the connect.php file
include ('config/config.php');
// Connect to the database
        
$mysqli = new mysqli($DBHOST, $DBUSERNAME, $DBPASSWORD, $DBNAME);
mysqli_set_charset($mysqli,"utf8");

/* check connection */
if (mysqli_connect_errno())
	{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}
// get data and store in a json array
$query = "SELECT trainingcourse.id,trainingcourse.status as sid ,name, registerstatus.status, add_date "
        . "FROM `trainingcourse` join timetable JOIN registerstatus "
        . "WHERE trainingcourse.id=timetable.tc_id and trainingcourse.status=registerstatus.id; ";
$result = $mysqli->prepare($query);
$result->execute();
/* bind result variables */
$result->bind_result($id,$sid,$name,$status,$add_date);
/* fetch values */
while ($result->fetch())
	{
    switch($status)
    {
        case 'Processing':{$status="تحت الدراسة" ;break;}
        case 'Accepted':{$status="مقبول" ;break;    } 
        case 'Rejected':{$status="مرفوض" ;break;}
        case 'incomplete':{$status="غير مكتمل" ;break; }
    }
	$tc[] = array(
                'id'=>$id,
                'sid'=>$sid,
		'name' =>$name ,
		'status' => $status,
		'add_date' => $add_date
	);
	}
echo json_encode($tc);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>