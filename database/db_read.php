<?php

// Two functions 
// READ from a specific ID and from a given query

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



function readSQLDBfromQuery(){

	global $globconn;
	$outArray = array();

	$globconn = new mysqli($GLOBALS['servername'], $GLOBALS['dbusername'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);

	if ($globconn->connect_error) {
		die("Connection failed: " . $globconn->connect_error);
	}
	
	$sql = "SELECT * FROM ".$GLOBALS['tableName']." ".$GLOBALS['query'].$GLOBALS['order'].$GLOBALS['direction'];

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
