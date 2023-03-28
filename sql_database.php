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

	globals $call;
	globals $servername;
	globals $dbname;
	globals $dbusername;
	globals $dbpassword;
	
	$outArray = array();
	$where = "";
	$order = "";

	if (isset($call->id)){
	    $where = " WHERE id = '".$call->id."' ";
	}

	if (isset($call->order)){
	    $order = " ORDER BY ".$call->order." ".$call->direction;
	}

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM ".$call->table." ".$where.$order;
	
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
