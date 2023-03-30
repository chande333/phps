<?php

$call = json_decode(file_get_contents('php://input'));

if ($call->token != ""){ echo "Bad Token";return; }


$order = isset($call->order) && $call->order != "" ? " ORDER BY ".urldecode($call->order) : "";
$direction = isset($call->order) && $call->order != "" && isset($call->direction) && $call->direction != "" ? " ".$call->direction : "";
$query = isset($call->query) ? " WHERE ".urldecode($call->query) : "";
$itemID =  isset($call->id) ? " WHERE id = ".urldecode($call->id) : "";

require_once "constants.php";

if (isset($call->fn)){
    call_user_func($call-> fn);
}
else{
    echo "Error: fn not declared<br>";
    var_dump($call);
}
