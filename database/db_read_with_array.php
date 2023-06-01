// It createsan array to build the filter

function getFilteredTopics(){
    global $call;

    $outArray = new stdClass();

    $conditions = [];

    if (!empty($call->name)) {
        $conditions[] = "LOWER(tasks.name) LIKE '%" . $call->name . "%'";
    }

    // if (!empty($call->weekday)) {
    //     $conditions[] = "weekday IN ".transformStringToSQL($call->weekday);
    // }
    if (!empty($call->weekday)  || $call->weekday == "0") {
        $conditions[] = "weekdays.filter like '%".($call->weekday)."%'";
    }

    if (!empty($call->topics)  || $call->topics == "0") {
        $conditions[] = "tasks.type = '" . $call->topics . "'";
    }

    if (!empty($call->status) || $call->status == "0") {
        $conditions[] = "tasks.status in (" . $call->status . ")";

    }

    if ($call->all_day_filter){
        $conditions[] = " weekdays.filter NOT IN (0123456,135,24) ";
    }

    $filters = '';
    if (!empty($conditions)) {
        $filters = "WHERE " . implode(" AND ", $conditions);
    }

    $orderBy = "";
    if (!empty($call->orderBy)) {
        $orderBy = "ORDER BY ".$call->orderBy." ".$call->direction;
    }

    

    $query = "SELECT tasks.*, weekdays.filter as weekfilters
    FROM weekly_tasks tasks
    JOIN weekly_weekdays weekdays ON tasks.weekday = weekdays.id
    ". $filters.$orderBy;
    
    //echo $query; //return;
   // var_dump(json_encode(transformArray(readSQLDBfromQuery($query,true))));return;
   
   $outArray->values  = transformArray(readSQLDBfromQuery($query,true));
   $outArray->valuesArr  = (readSQLDBfromQuery($query,true));
   $outArray->query = explode("\r\n", $query);
   $outArray->query2 = str_replace("\r\n", " ", $query);;
//    array_unshift($outArr, );
   echo json_encode($outArray);
    //echo json_encode(transformArray(readSQLDBfromQuery($query,true))); 
    return;

}
