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



function updateSQLDBentry(){
    
 
}
