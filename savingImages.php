
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>PHP-IMG</title>


</head>
<body>
<h1 style="color:green">PHP Images</h1>
<?php

// downloadListOfImages();
downloadOneImage('https://www.lithuania.travel/media/cache/widen_1100/uploads/mediaparkcms/article/6068909b49151e02d128be4be8944857.jpeg');
function downloadListOfImages(){
    $listOfImages = [
        'https://www.lithuania.travel/media/cache/widen_1100/uploads/mediaparkcms/article/d76379632d1cd3472a9a45b740d09130.jpeg',
        'https://www.lithuania.travel/media/cache/widen_1100/uploads/mediaparkcms/article/6d8d9b705cd805cf5c0eb7a1ec22b41d.jpeg',
        'https://www.lithuania.travel/media/cache/widen_1100/uploads/mediaparkcms/article/cf4025370d36fb574979b9b45e1189fb.jpeg'

    ];

    echo '<h2>Files Saved</h2>';
    echo '<p>Location:images/</p>';
    foreach ($listOfImages as $thisId) {
        $imgUrl = $thisId;
        $regexPattern = "(\/)(?!.*\/)(.*)"; //Regex to take file name src: https://stackoverflow.com/questions/8374742/regex-last-occurrence
        preg_match('/'.$regexPattern.'/', $imgUrl, $matches);
        $filename = $matches[2];       
        file_put_contents("images/".$filename, file_get_contents($imgUrl));
        echo '<p>'.$filename.'</p>';
    }
}

function downloadOneImage($imageUrl){

    echo '<h2>Files Saved</h2>';
    echo '<p>Location:images/</p>';        
    $regexPattern = "(\/)(?!.*\/)(.*)"; //Regex to take file name src: https://stackoverflow.com/questions/8374742/regex-last-occurrence
    preg_match('/'.$regexPattern.'/', $imageUrl, $matches);
    // var_dump($matches);
    $filename = $matches[2];
    file_put_contents("images/".$filename, file_get_contents($imageUrl));   
    echo '<p>'.$filename.'</p>';
}






    ?>

</body>
</html>