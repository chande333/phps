<?php

$call = json_decode(file_get_contents('php://input')); 

require_once "constants.php";
//$servername = "localhost";
//$dbname  = "";
//$dbusername = "";
//$dbpassword = "";


if (isset($call->fn)){
    call_user_func($call-> fn);
}
else{
    echo "Error: fn not declared<br>";
    var_dump($call);
}

function ping(){
    echo "pong DB";
}



function readSQLDBfromID(){

    global $call;

    $outArray = array();
    $query = "";
    $order = "";

    if (isset($call->id)){
        $query = " WHERE id = '".$call->id."' ";
    }

    if (isset($call->order)){
        $order = " ORDER BY ".urldecode($call->order)." ".urldecode($call->direction);
    }

	$conn = new mysqli($GLOBALS['servername'], $GLOBALS['$dbusername'], $GLOBALS['$dbpassword'], $GLOBALS['$dbname']);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM ".$GLOBALS['tableName']." ".$query." ".$order;
    echo $sql;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

    // output data of each row
    while($response = $result->fetch_assoc()) {

        array_unshift($outArray,$response);
        
    }
	} else {

    	echo "0 results";

	}
	
	$conn->close();

    echo json_encode($outArray);
}


function readSQLDBfromQuery(){

    global $call;

    $outArray = array();
    $query = "";
    $order = "";

    if (isset($call->query)){
        $query = " WHERE ".urldecode($call->query);
    }

    if (isset($call->order)){
        $order = " ORDER BY ".urldecode($call->order)." ".urldecode($call->direction);
    }

	$conn = new mysqli($GLOBALS['servername'], $GLOBALS['$dbusername'], $GLOBALS['$dbpassword'], $GLOBALS['$dbname']);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM ".$GLOBALS['tableName']." ".$query." ".$order;
    echo $sql;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

    // output data of each row
    while($response = $result->fetch_assoc()) {

        array_unshift($outArray,$response);
        
    }
	} else {

    	echo "0 results";

	}
	
	$conn->close();

    echo json_encode($outArray);
}
