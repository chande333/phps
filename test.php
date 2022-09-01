<?php
// Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])){
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');
    }



function uno(){
    $temp1 = "Bearer akjdskdksdj";
    $temp2 = str_replace("Bearer","JWT=",$temp1);
    echo $temp2;
    // echo "uno";
    // call_user_func('tres');
}


function dos(){
    echo "dos";
}


function tres(){
    echo "tres";
}

uno();
dos();