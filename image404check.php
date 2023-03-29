

<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Check List of Images</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<h1 style="color:green">PHP Images</h1>
<?php

redirectURLCheck();

function redirectURLCheck(){

    $productIDs = [
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MTYwMXxpbWFnZS9qcGVnfGltYWdlcy9oNTcvaDUwLzE1NjI3MTUyNDI0OTkwLmpwZ3xhMmUyZTY5Y2YxNDVjZmZkN2I4OWM4MDViNDQ1ZTFlZjZkNmJjNjk0N2NlMjhiY2VkZDhiNTAyYmYzYjA4NWU4',
        'https://rowentaspain.es/shop-img/RH6737.png',
        'https://rowentaspain.es/shop-img/RH6751WO.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/378F0437-7AC4-4F25-A710132A74B15FE7/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/RH6921WO.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/42940209-2237-48CF-86D14396DCBB6C26/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/RH8133WA.png',
        'https://rowentaspain.es/shop-img/RH8147WA.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNzM2MHxpbWFnZS9qcGVnfGltYWdlcy9oM2QvaDQ2LzE1NjQ3NDkyOTk3MTUwLmpwZ3xmMDhiYmY2M2JjYTVmMzA3NTM2ZDM0ZjkyOWFmMzI2YmQ0MThjOTJiMTBjNzBlNGFmOWMxZWRhMTRjYzc4OTc2',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MTM2MXxpbWFnZS9qcGVnfGltYWdlcy9oYTcvaGNiLzE0MDUxNzA0ODMyMDMwLmpwZ3xiOWE5NWQwYTQ1ODFiNTU2ZjA4ZjI5OGZjMzUwZTQ2MzEyZmU0OGI5NWM4ZTI2NTVjMDM3ZGRjNzM3YTU2NjNk',
        'https://rowentaspain.es/shop-img/RH9678.png',
        'https://rowentaspain.es/shop-img/RH9695WO.png',
        'https://www.rowenta.es/medias/1-main-082ROW-PackXForce1160YCabezaAquaDeRegalo-05-07-2021.jpg?context=bWFzdGVyfHJvb3R8NDA5MDl8aW1hZ2UvanBlZ3xoNGUvaDc1LzE1MDIxMTI1NzMwMzM0LmpwZ3w1NjZiNmUyY2FmMjNmMDY3NmZhY2Y4N2I2OWVkMjUzM2Y0NDJjNjU4M2JiZDI0MGJhNGU2MWQ2MzA4MzY5NDM5',
        'https://twicpics.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxMjAxMDF8aW1hZ2UvanBlZ3xpbWFnZXMvaGE1L2hlMi8xNjA4MTA1NzE1MzA1NC5qcGd8MjllMzdmZDUyYTVhNjg1MGEwNmEzMjQ4MmUyM2I3ODQxNmM4MjFmNmJmNjJmZTQyOWQ5NGFlZGFiOGI0MDUwNg&twic=v1/quality=70/resize=2000',
        'https://d32iut21qthkdz.cloudfront.net/images/media/ACFB555C-206F-4A51-90BBF667F02406FB/?w=2362&h=2362&crop=false',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0NDE0OXxpbWFnZS9qcGVnfGltYWdlcy9oMGIvaDRlLzE1NjM1MzIyNDA0ODk0LmpwZ3xhYzVjMDJlNjg3NzU1MGQ5ODVkZDgxYjY1ZDRiZjY5MDE1OGYyOTU3MmNmNjhjNzBkMzJiZTVhZTcyNjczYWQy',
        'https://rowentaspain.es/shop-img/RO2913EA.png',
        'https://rowentaspain.es/shop-img/RO3125EA.png',
        'https://rowentaspain.es/shop-img/RO4825EA.png',
        'https://rowentaspain.es/shop-img/RO6859EA.png',
        'https://rowentaspain.es/shop-img/RO7212EA.png',
        'https://rowentaspain.es/shop-img/RO7649EA.png',
        'https://rowentaspain.es/shop-img/RO7740EA.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w4MTQ4N3xpbWFnZS9qcGVnfGltYWdlcy9oOTIvaDBhLzE1Mjc2NjY5Njk4MDc4LmpwZ3wzZjA3ODEwZTZiOTUxMWQ0YjJkMDRlYTAzZjU0MTJhNzE1Y2NhMTZhYmM1MmM5MzQ5ZDY4NjI2ODFkM2NmM2Q1',
        'https://rowentaspain.es/shop-img/RR7267WH.png',
        'https://rowentaspain.es/shop-img/RR7335.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/5B2BC4D6-3B98-4843-BCD9425DE9C338AC/?w=2362&h=2362&crop=false',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNTk3MHxpbWFnZS9qcGVnfGltYWdlcy9oMmMvaGFhLzE1MDA5NTUzOTQwNTEwLmpwZ3xhNGYyMjA2YWVlMjZmNTUzZWFiM2FmNDg5NjY1Y2E4OTNhNTBkMzZkOWQyNzIxYTIwNDFkZDAxOGU5OTBmMjg5',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MTU1NHxpbWFnZS9qcGVnfGltYWdlcy9oM2IvaGExLzE0Njc5NTE3NzkwMjM4LmpwZ3wxNmE0YmE2M2M2NDkzODRhMTUwMDkzYmVlYzZmZDRmMzg4ZTY5MzliM2Y2MTJmY2M0YmNhYWI1ODAwYWZmYzkw',
        'https://rowentaspain.es/shop-img/RR7647.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/F4EB5ED9-FD8F-450F-99DD241705C23593/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/E17CF5D8-6B92-4F90-8FBBE36AA244E923/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/RR7947.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/7E837CC0-54F5-4D07-93F3950F4B2C5C86/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/BA43A5FC-5AFA-409F-838C16FD3B7295B9/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/BA43A5FC-5AFA-409F-838C16FD3B7295B9/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/RY6597WH.png',
        'https://rowentaspain.es/shop-img/RY7757WH.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/5DC7E7B2-9CDF-4BE5-B4EC52639EFF669F/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/C21BA755-614E-4A95-B34284F8E91B3FE6/?w=2362&h=2362&crop=false',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyMTI1NnxpbWFnZS9qcGVnfGltYWdlcy9oMmEvaDg1LzE1NzUxMTkwNTExNjQ2LmpwZ3xmMWZmOGViYzA0ZGY1OWQ4N2VhMjU3ZjQ1ZjViZmY5MzBiZjZiODAxMmU3NjA2ODQ4Yjg0YjZlNzJhZWUzNTRj',
        'https://rowentaspain.es/shop-img/SF4210F0.png',
        'https://rowentaspain.es/shop-img/SF4522E0.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyMjM4M3xpbWFnZS9qcGVnfGltYWdlcy9oMmYvaDQ5LzE1NjI4NDIyMzE2MDYyLmpwZ3w0ODk5YTYxMzVkZjA5Y2NkNGVlY2NkZDk0YzU4YTNkZDI0YzQwNzM1NTlmMDdjNjhjNDY4OTM4YjY3NTFlYjNi',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxOTA3NnxpbWFnZS9qcGVnfGltYWdlcy9oMTgvaDBiLzE1NjI4NDM0NDcyOTkwLmpwZ3w1NDg5YTYwZDNiMmY4ZmZiNjQyNGM3MjZhODAxMzY2OWJlNjY0YjdlMWQzOGY3YjhmZWU1YmU5MzY2MWVlZjhl',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNzUzMnxpbWFnZS9qcGVnfGltYWdlcy9oMjIvaDk1LzE1NzUxMTMzNzI0NzAyLmpwZ3xhMDZlNTBmZmQ5YzhmYjEyYmVlMzAyZTQ1YjUzOTg5NDAzZDRjZmYzNDRmMTRlMWZiYjNkYTMzODE1ZDdiODg1',
        'https://d32iut21qthkdz.cloudfront.net/images/media/E28B7E93-05A1-4CFB-ABC930451F1E6877/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/SF7510F0.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/E434E2F2-F704-4DF7-999DB1048DD32255/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/SO2320F2.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/AF9539CA-1F5A-4B17-90C22E4EEE0E4375/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/18A25E7B-CF60-41EC-96DC4FD9B28F3009/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/3E560DE9-E518-433F-8E06539CC209BE70/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/SO9420F0.png',
        'https://rowentaspain.es/shop-img/TN1300F0.png',
        'https://rowentaspain.es/shop-img/TN2801.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/0E8C2CE8-512E-4A30-95B8DF4D0FEA6ADC/?w=2362&h=2362&crop=false',
        'https://d32iut21qthkdz.cloudfront.net/images/media/6D98F1B0-94F8-4C70-927D283CA9F25756/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/TN3800.png',
        'https://rowentaspain.es/shop-img/TN3840.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/D42EB515-BC28-422D-B141955C2723082F/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/TN5201.png',
        'https://rowentaspain.es/shop-img/TN5221.png',
        'https://rowentaspain.es/shop-img/TN5241.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/1798BF7F-5CD7-45FE-8B915F3EB4406D3A/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/TN6010F5.png',
        'https://rowentaspain.es/shop-img/TN6040.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/F525EAED-B2CC-46F3-85E45AF7B6784C89/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/TN6200.png',
        'https://rowentaspain.es/shop-img/TN8931.png',
        'https://rowentaspain.es/shop-img/TN9110.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/B109E665-0525-4126-AA6596ED74EBA008/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/TN9400.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/66F174A5-23FD-4427-B06EC1D7D5897F6B/?w=2362&h=2362&crop=false',
        'https://rowentaspain.es/shop-img/TN9460.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0OTQyN3xpbWFnZS9qcGVnfGltYWdlcy9oNjUvaDZkLzE1NzQzNjU3NDc2MTI2LmpwZ3xjZDcyNmE5MWRiNGY5ZDBmMTJmOWYxYjNlYWU1NWE1YWFhNzMwOTk2OGY3ZTM4ODgxNDk4ZTMwODU2OWJjODhi',
        'https://rowentaspain.es/shop-img/UR2020.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzODM3MnxpbWFnZS9qcGVnfGltYWdlcy9oNDEvaGM5LzE1NjIzMTg4NjExMTAyLmpwZ3w3NmI2NGUzMDU0MWM2Mzg2YWVlY2NmYjViNmUwYzllMTIwM2Q2NzUxOTBhOTI3NDRkZTE4YjkyMzAyOTg4Mzdj',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzOTU1MHxpbWFnZS9qcGVnfGltYWdlcy9oMTUvaGQyLzE1MzU2MTM1NzAyNTU4LmpwZ3xlZTdkMmMxOTAxOWRiZDlmZGUxYTczMTQ5YmI5YmFjZGVhNWU5YjM1OTVlZjc4NTUzNDMzOTA4ODNmZTIzMWU2',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0NDM3NXxpbWFnZS9qcGVnfGltYWdlcy9oNGQvaDA2LzE1NjIzMjAxNTg3MjMwLmpwZ3wxYjZlNmYxMDAwZjdlNjU0ZGUzNzdjMTM2NjhjNDA3YTU4NjE1MzY2OTlmYzY2MGE4ZDMzNDE1OWE1NDliNjZi',
        'https://rowentaspain.es/shop-img/VR8225F0.png',
        'https://rowentaspain.es/shop-img/VR8227F0.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w2MjQwNnxpbWFnZS9qcGVnfGltYWdlcy9oZDcvaDMxLzE1NjI4MzU3NDY4MTkwLmpwZ3w3MjZlYWFkYWI0Mjk0OGYwZmFjODRjYTI3MDdmYThkOTc1YzIzYzBkNTBkODgxZGNjYzFhYjE4M2Y0YzBjY2Jl',
        'https://rowentaspain.es/shop-img/VR8320F0.png',
        'https://rowentaspain.es/shop-img/VU2330.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w2Mjg0NnxpbWFnZS9qcGVnfGltYWdlcy9oMjgvaGMyLzE0Njc5NDQ0NTIwOTkwLmpwZ3w0NTYzZDk4NTQwNzkxZDhmYWVhMTMzNGE4OWEyZTU1ZWY3YWE2YzVlMTgyZmY2YzlmOGI2NzYwMjk4ZmYyMmJj',
        'https://rowentaspain.es/shop-img/VU2730.png',
        'https://d32iut21qthkdz.cloudfront.net/images/media/6A403C19-337E-4AA4-BC0400E44FFFC210/?w=2362&h=2362&crop=false',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNTMxMnxpbWFnZS9qcGVnfGltYWdlcy9oNWUvaDQwLzE1NzUxMTQ1NjUyMjU0LmpwZ3xmZTAwMWU0ZGJmNTg2NWNkYzgzNGJlZjAyMmMyZjgzZDg3ODZhYzE1NjZmNjA1M2RmYjNiYzY2YjNhMTFjYzE5',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNjA4N3xpbWFnZS9qcGVnfGltYWdlcy9oYWUvaGQwLzE1Njg5MjY5MjgwNzk4LmpwZ3wyY2Q1MmEzZmVkMDY0ZTU1Y2VmYzAzNTNhMGM5Mjk5Y2I2NzFhZmYxNzk0ZGY1ZjAyNzExZDZiMTViN2U2YzIz',
        'https://rowentaspain.es/shop-img/VU5870.png',
        'https://rowentaspain.es/shop-img/VU5880.png',
        'https://rowentaspain.es/shop-img/VU6210F0.png',
        'https://rowentaspain.es/shop-img/VU6670F0.png',
        'https://rowentaspain.es/shop-img/VU6720.png',
        'https://rowentaspain.es/shop-img/VU6770.png',
        'https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w4NzEyN3xpbWFnZS9qcGVnfGltYWdlcy9oMWYvaDNlLzE1NDMxNDc0MzgwODMwLmpwZ3xmZDY2ZjAyZmI4OGQ1ZTk4ZjE5OTBmMmMwNWM3NmQ2YjQ2MjZiODhiZjI5MTRlOTkwMWU5Y2Y3NTJlMjQxYzk5'
         ];
    
    // $productIDs = [
    //     78396,78413,78414,78415,78416,78418,78427,78428,78429,78439,78443,78444,78445,78446,78448,78449,78450,78451,78452,78464,78467,78472,78523,78524,78531,78532,78535,78553,78569,78570,78575,78576,78611,78622,78635,78639,78650,78651,78652,78653,78661,78663,78669,78670,78672,78678,78685,78703,78704,78705,78707,78708,78709,78721,78722,78724,78725,78726,78729,78730,78737,78738,78739,78742,78767,78771,78777,78778,78780,78781,78797,78812,78813
    // ];

    // var_dump($productIDs);
    echo "<div class='row'><div class='col border'>productIDs</div><div class='col border'>url</div><div class='col border'>response</div></div>";

    foreach ($productIDs as $thisId) {
        $imgLocation = '';
        // $imgUrl = $imgLocation.$thisId.'.jpg';
        $imgUrl = $imgLocation.$thisId;
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
        else if ($header_response == "200"){
            $res = $header_response;
        }
        else{
            $res = "<b style='color:orange'>".$header_response."</b>";
        }

        echo "<div class='row' style='width:900px'><div class='col border'>".$res."</div><div class='col border' style='overflow:hidden'><a target='_blank' href='".$imgUrl."'>".$imgUrl."</a></div></div>";

        // echo "<div class='row'><div class='col border'>".$thisId."</div><div class='col border'>".$res."</div><div class='col border'><a target='_blank' href='".$imgUrl."'>".$imgUrl."</a></div></div>";
        curl_close($ch);
    
    }

};