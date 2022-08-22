

<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Check List of Images</title>


</head>
<body>
<h1 style="color:green">PHP Images</h1>
<?php

redirectURLCheck();

function redirectURLCheck(){
    
    $productIDs = [
        78396,78413,78414,78415,78416,78418,78427,78428,78429,78439,78443,78444,78445,78446,78448,78449,78450,78451,78452,78464,78467,78472,78523,78524,78531,78532,78535,78553,78569,78570,78575,78576,78611,78622,78635,78639,78650,78651,78652,78653,78661,78663,78669,78670,78672,78678,78685,78703,78704,78705,78707,78708,78709,78721,78722,78724,78725,78726,78729,78730,78737,78738,78739,78742,78767,78771,78777,78778,78780,78781,78797,78812,78813
    ];

    // var_dump($productIDs);
    echo "productIDs,url,response<br>";

    foreach ($productIDs as $thisId) {
        $imgLocation = ' ';
        $imgUrl = $imgLocation.$thisId.'.jpg';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $imgUrl);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result=curl_exec($ch);    
        $header_response = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if ($header_response == "404"){
            $res = "<b style='color:red'>404</b>";
        }
        else{
            $res = $header_response;
        }
        echo $thisId.",".$res.",<a target='_blank' href='".$imgUrl."'>".$imgUrl."</a><br>";
        curl_close($ch);
    
    }

};