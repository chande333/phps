<?php

// Considering a table with values
// date -- it checks if the date is valid
// 'name','category1', 'category2', 'category3','comment','amount'

function updateSQLDBentry(){

    global $globconn;
	global $call;
	$outArray = array();

	if (isset($call->date) && !empty($call->date) && validateDate($call->date)){
		$date = "date = '".$call->date."' ";
	} 
	elseif (empty($call->date)) {
		$date = "";
	}
	else {
		echo 'Invalid date';
		return;
	}

	$fields = array('name','category1', 'category2', 'category3','comment','amount');
	$fields_sql = array();

	foreach ($fields as $category) {
		if (isset($call->$category) && !empty($call->$category)) {
			$fields_sql[] = "{$category} = '" . urldecode($call->$category) . "'";
		}
	}

	$fields_sql = implode(', ', $fields_sql);

	if (empty($fields_sql)){
		echo "Error: Empty values";	
		return;
	}

	$globconn = new mysqli($GLOBALS['servername'], $GLOBALS['dbusername'], $GLOBALS['dbpassword'], $GLOBALS['dbname']);

	if ($globconn->connect_error) {
		die("Connection failed: " . $globconn->connect_error);
	}
	
	$sql = "UPDATE ".$GLOBALS['tableName']." 
		SET ".$fields_sql."
		WHERE id = ".$GLOBALS['itemID'];
	
	$result = $globconn->query($sql);
	
	$globconn->close();
}
