<?php

function test123(){
    global $call;
    $outArray = new stdClass();

    $outArray->test1 = readSQLDBfromQuery($call->query,true);
    echo json_encode($outArray);
}


function readSQLDBfromQuery($inputQuery,$decodeOutput = false,$skipResult = false){

	global $globconn;
	$outArray = array();
    $sql = $inputQuery;

      
	if ($globconn->connect_error) {
		die("Connection failed: " . $globconn->connect_error);
	}
	
	$result = $globconn->query($sql);

    if ($skipResult){return;}

	if ($result->num_rows > 0) {
		while($response = $result->fetch_assoc()) {	
			array_unshift($outArray,$response);		
		}
	} else {
		return array();
	}

	if ($decodeOutput){
        return $outArray;
    }
    else{
        echo json_encode($outArray);
    }

}


// Two functions 
// READ from a specific ID and from a given query


function readSQLDBfromID(){

    global $globconn;
    $outArray = array();

	if ($globconn->connect_error) {
	    die("Connection failed: " . $globconn->connect_error);
	}
	
	$sql = "SELECT * FROM ".$GLOBALS['tableName']."  WHERE id = ".$GLOBALS['itemID'].$GLOBALS['order'].$GLOBALS['direction'];

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



function readSQLDBfromFilter(){

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
