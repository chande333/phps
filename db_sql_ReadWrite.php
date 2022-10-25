function pingDB(){
    $call = json_decode(file_get_contents('php://input'));

    include "constants.php";


    $mysqli = new mysqli($servername, $db_username, $db_password, $db_name);

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
	$call = json_decode(file_get_contents('php://input'));
    include "constants.php";

	$conn = new mysqli($servername, $db_username, $db_password, $db_name);

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

