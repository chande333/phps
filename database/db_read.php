<?php

function readSQLDBfromID(){

    global $globconn;
    $outArray = array();

	if ($globconn->connect_error) {
	    die("Connection failed: " . $globconn->connect_error);
	}
	
	$sql = "SELECT * FROM ".$GLOBALS['tableName']." ".$GLOBALS['itemID'].$GLOBALS['order'].$GLOBALS['direction'];

	$result = $globconn->query($sql);

	if ($result->num_rows > 0) {    
		while($response = $result->fetch_assoc()) {
			array_unshift($outArray,$response);        
		}
	} else {
		echo "0 results";
	}
	
	$globconn->close();

	echo json_encode($outArray);
}
