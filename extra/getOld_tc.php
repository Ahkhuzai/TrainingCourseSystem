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
$query = "SELECT trainingcourse.id,name, start_date 
            FROM `trainingcourse` join timetable JOIN registerstatus 
            WHERE trainingcourse.id=timetable.tc_id and trainingcourse.status=registerstatus.id and registerstatus.id=2 and DATE(end_date) < DATE(NOW())";
$result = $mysqli->prepare($query);
$result->execute();
/* bind result variables */
$result->bind_result($id,$name,$start_date);
/* fetch values */
while ($result->fetch())
	{
    
	$tc[] = array(
                'id'=>$id,
                
		'name' =>$name ,
		
		'start_date' => $start_date
	);
	}
echo json_encode($tc);
/* close statement */
$result->close();
/* close connection */
$mysqli->close();
?>