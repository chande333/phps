<?php

function getLastId() {
    global $globconn;
   
	$query = "SELECT MAX(id) as lastid
    FROM ".$GLOBALS['tableName'];
	$result = mysqli_query($globconn, $query);

   
    $outArray = [];
    $row = $result->fetch_assoc();

    echo($row['lastid'] + 1);
}
