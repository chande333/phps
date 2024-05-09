<?php
function addSQLDBentry(){
     global $call;
    global $globconn;

    $nextID = getNextId();

    // Check connection
    if ($globconn->connect_error) {
        die("Connection failed: " . $globconn->connect_error);
    }

    $sql = "INSERT INTO #######################
    (id,name,notes,feed,tags)
    VALUES ('$nextID','$call->notes','$call->feed','$call->tags')";

    $result = $globconn->query($sql);

    echo $result;

    if ($result == '1') {
        echo json_encode($call);
    }

    $globconn->close();   
 
}

function getNextId() {
    global $globconn;

	$query = "SELECT MAX(id) as lastid
    FROM ops_knowledge.master_view_favorites";
	$result = mysqli_query($globconn, $query);

    $outArray = [];
    $row = $result->fetch_assoc();

    echo($row['lastid'] + 1);
}
