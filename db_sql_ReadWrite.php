<?php
// Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])){
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');
    }

// Access-Control headers are received during OPTIONS requests
    if($_SERVER['REQUEST_METHOD'] == 'OPTIONS'){
        if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD'])) header("Access-Control-Allow-Methods: GET, POST, 	OPTIONS");         
        if(isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) header("Access-Control-Allow-Headers: {$_SERVER['	HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
        exit(0);
    }

include "constants.php";
$call = json_decode(file_get_contents('php://input'));

if ($call){    
    call_user_func($call->fn);
}
else{
    echo "error in call";
}



function pingDB(){
    global $call;

    $mysqli = new mysqli($GLOBALS['servername'], $GLOBALS['db_username'], $GLOBALS['db_password'], $GLOBALS['db_name']);

    /* check connection */
    if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }

    /* check if server is alive */
    if ($mysqli->ping()) {
    printf ("1");
    } else {
    printf ("Error: %s\n", $mysqli->error);
    }

    /* close connection */
    $mysqli->close();
}


function readAllDBItems(){
	global $call;

	$conn = new mysqli($GLOBALS['servername'], $GLOBALS['db_username'], $GLOBALS['db_password'], $GLOBALS['db_name']);

    	$sort = "";

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

    $sql = "SELECT *
    FROM my_db.my_table datas
    WHERE datas.enabled = 1 ORDER BY ".$call->sort;	
	
    $result = $conn->query($sql);    

    $outArray = [];
	if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
            array_push($outArray,
            $row            
            );
    }
	} else {
    	echo "0 results";
	}


    echo json_encode($outArray);
	
	$conn->close();
}


function updateDB(){
	global $call;

    	$outArray = array();

	$conn = new mysqli($GLOBALS['servername'], $GLOBALS['dbusername'], $GLOBALS['dbpassword'], $GLOBALS['database']);
	
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "UPDATE ".$call->table." 
   	SET name = '".$call->name."',
        author = '".$call->author."',
        type = '".$call->type."',
        notes = '".urldecode($call->notes)."'
        WHERE id = '".$call->id."'
    ";
	$result = $conn->query($sql);

	
	$conn->close();


}


function getNextAvailableID(){
    global $call;

    $conn = new mysqli($GLOBALS['servername'], $GLOBALS['dbusername'], $GLOBALS['dbpassword'], $GLOBALS['database']);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	
	$sql = "SELECT MAX(id) as lastid
    FROM $call->table";
	
    $result = $conn->query($sql);
    $outArray = [];
    $row = $result->fetch_assoc();

    echo($row['lastid'] + 1);


	
	$conn->close();

    
}
