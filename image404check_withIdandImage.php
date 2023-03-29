

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

    $productInfo = [
        'AC9736WO,https://rowentaspain.es/shop-img/AC9736.png',
        'AU4010F0,https://rowentaspain.es/shop-img/AU4010F0.png',
        'AU5010F0,https://rowentaspain.es/shop-img/AU5010.png',
        'AU5020F0,https://rowentaspain.es/shop-img/AU5020.png',
        'AU5610F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNjg3NHxpbWFnZS9qcGVnfGltYWdlcy9oMjMvaDljLzE1NzUxMTIzMzcwMDE0LmpwZ3xiNjA3MjIxODhlMjgyMjZjZTE5Y2RiZTYyZDdjNzljN2YyY2FmOTkxMWFjNTYwYzcwY2MyNGMzOWQzODFmN2E4',
        'AU5620F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNjg3NHxpbWFnZS9qcGVnfGltYWdlcy9oMjMvaDljLzE1NzUxMTIzMzcwMDE0LmpwZ3xiNjA3MjIxODhlMjgyMjZjZTE5Y2RiZTYyZDdjNzljN2YyY2FmOTkxMWFjNTYwYzcwY2MyNGMzOWQzODFmN2E4',
        'BR9640S1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzNTE4MHxpbWFnZS9qcGVnfGltYWdlcy9oNjQvaDBiLzE1NjI4MzI1MTU4OTQyLmpwZ3w4YTBjNjEwMmRiOTkwMjdiOTdlY2RiMDc5ZGUwZGNmNWIxYjdjZjBiODVlMWIxMWE4YjNkZGZhZjFmNTc2ZTA4',
        'BR9660S1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MzM4MHxpbWFnZS9qcGVnfGltYWdlcy9oMzkvaGYxLzE1NjI4MzMxMzE5MzI2LmpwZ3w1NjQyNTdkOWM5MTM4Y2I5MTdkYzVkNzk3YTAyMDQ3MDMxNjQ0ZWU2NWFkYTZjMTc3YTc3MDE4ZGE5YTNmMDQ5',
        'BS1400V0,https://rowentaspain.es/shop-img/BS1400.png',
        'BS1500V0,https://rowentaspain.es/shop-img/BS1500.png',
        'BS1600V0,https://rowentaspain.es/shop-img/BS1600.png',
        'BS1700V0,https://rowentaspain.es/shop-img/BS1700.png',
        'BU2620,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0NjY3N3xpbWFnZS9qcGVnfGltYWdlcy9oNDQvaDFhLzE0Njc5NTM1NjQ4Nzk4LmpwZ3xkMGU0MmFmZTBmNTI4MWFlNWIzYWU1ZDdmMDE2YTQ5YmU3NjZjNzllYzBmMmY5NzVjMTRjMTliMDljMTUxNWE3',
        'CF3112F0,https://rowentaspain.es/shop-img/CF3112F0.png',
        'CF3212F0,https://rowentaspain.es/shop-img/CF3212F0.png',
        'CF321LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxNzk4OXxpbWFnZS9qcGVnfGltYWdlcy9oM2UvaDJhLzE1NzUxMTc4NTg0MDk0LmpwZ3w0NjQwMzMyZWU5MTY1MjFkMTVlOGIzMzA2MDlmNzA3NDM3N2M3MTY2YzhhN2UyNzlkODM1ZTA5NjU5OWRiNjQx',
        'CF3242F0,https://rowentaspain.es/shop-img/CF3242F0.png',
        'CF324LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxOTg1N3xpbWFnZS9qcGVnfGltYWdlcy9oYjkvaGQ1LzE1NzUxMTI4ODc1MDM4LmpwZ3wyNWRiYWI3ZGM1ZGM4NjA5ZDQ2NjEwODlhNjQyYzBiZTVhMGQwNzgyODliMjU3MWQ3MjJmZjRkZDgyOTVkOTZj',
        'CF3460F0,https://rowentaspain.es/shop-img/CF3460F0.png',
        'CF3712F0,https://rowentaspain.es/shop-img/CF3712F0.png',
        'CF371LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzNDc0MHxpbWFnZS9qcGVnfGltYWdlcy9oMzUvaDFkLzE1NzUxMTg3MTAzNzc0LmpwZ3w1OWRhNmFkMzhhNzViNDkzODE5MTAxZDUwZDAzNDA1NWI1ZDA5MGQzOTJhNTcyM2MwZTQ5ZmQxNjJjZTNlZjE5',
        'CF4231F0,https://rowentaspain.es/shop-img/CF4231.png',
        'CF4310F0,https://rowentaspain.es/shop-img/CF4310.png',
        'CF4710F0,https://rowentaspain.es/shop-img/CF4710F0.png',
        'CF5820F0,https://rowentaspain.es/shop-img/CF5820F0.png',
        'CF6130F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzMDM4NnxpbWFnZS9qcGVnfGltYWdlcy9oOGEvaGM3LzE1NjI5NDY0NDY5NTM0LmpwZ3w3MjQ0ZWNmM2I3NzlmMDI1ZWVhMzAwNGUzNjMwN2EyNzk2N2E1YzMzZTA0ZDUwNTY1MmZjZGVmMmQyMWRhNTU2',
        'CF7812F0,https://rowentaspain.es/shop-img/CF7812F0.png',
        'CF7830F0,https://rowentaspain.es/shop-img/CF7830F0.png',
        'CF9530F0,https://rowentaspain.es/shop-img/CF9530F0.png',
        'CF9540F0,https://rowentaspain.es/shop-img/CF9540F0.png',
        'CF961LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzMTU5OHxpbWFnZS9qcGVnfGltYWdlcy9oMmQvaDAxLzE1Njg5Mjc2NTU1Mjk0LmpwZ3w1MzJjNDZlYTFjZjU1ODc2ZThjYTg1M2QwOWExZGU5YThlYWM4ZTNjZDFjNjdkYTIwMGZkMWY5OWRjY2M3YzNi',
        'CF9620F0,https://rowentaspain.es/shop-img/CF9620F0.png',
        'CF9720F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MzM0N3xpbWFnZS9qcGVnfGltYWdlcy9oMzgvaDhmLzE1NjI4NDQ1NDgzMDM4LmpwZ3xiZjlhMTJlY2Q3YzY4ZGFhOTg1YTRlZWFhZjY1Nzg4ZDk3MzlhZmI1MzEyNTcwOWQ0NGQyMGIyZTQzMTAxNWQx',
        'CV4753F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzNzEwM3xpbWFnZS9qcGVnfGltYWdlcy9oYzgvaGU4LzE1NzQ1ODk1NjYxNTk4LmpwZ3xjODBlYTEwZjIzYzIyOTg3YWZkMWQ2NTQ0N2E5MTMxZmVkOTkxNGU4ZWY0MTkxZDQwMDVlNzA2NzAxNjUzYzk1',
        'CV5820F0,https://rowentaspain.es/shop-img/CV5820F0.png',
        'CV5940F0,https://rowentaspain.es/shop-img/CV5940F0.png',
        'CV6130F0,https://d32iut21qthkdz.cloudfront.net/images/media/A9A3505E-2785-4158-89B84D9034E892C3/?w=2362&h=2362&crop=false',
        'CV613LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNDA5MXxpbWFnZS9qcGVnfGltYWdlcy9oNGQvaDczLzE1NzUxMTk1MjMwMjM4LmpwZ3wyNjI5OTFlZmJlZGZjYmY0ZGYwZTc2ODY2Y2NlMTk3NjlmOWViZGM5NWI0NmQ0MDFjZjA5YTM2MjY4ZmE1ZGUw',
        'CV7843F0,https://rowentaspain.es/shop-img/CV7843F0.png',
        'CV7920F0,https://rowentaspain.es/shop-img/CV7920F0.png',
        'CV8740F0,https://rowentaspain.es/shop-img/CV8740F0.png',
        'CV8830F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzMTI4MHxpbWFnZS9qcGVnfGltYWdlcy9oODkvaDI2LzE1NjI4NDk2MDc2ODMwLmpwZ3w3MzRkZTM2NGM0NDA4ODYwMTE2Mzc1ZGM1YTcyNzE5N2I3YmRhZGFmZDQyNzAxYzM1ZDBkYzM3YTQ1OTQ3ZDM3',
        'CV888LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzMDE2NHxpbWFnZS9qcGVnfGltYWdlcy9oYmYvaDY2LzE1NjcwNTE0MzUyMTU4LmpwZ3xkOTc2MDhjZmFiNTk2MzI2NjBjMmI3OTNmNjQyYTQ0NDY0ZDE3MjdlMDMyMWRjODVjY2MyMzM2Zjg3YzdjZWFh',
        'CV9240F0,https://rowentaspain.es/shop-img/CV9240.png',
        'CV9820F0,https://rowentaspain.es/shop-img/CV9820F0.png',
        'CV9920F0,https://d32iut21qthkdz.cloudfront.net/images/media/77EDA6DC-E145-438E-AC91D3AAF73626D0/?w=2362&h=2362&crop=false',
        'DE5010D1,https://rowentaspain.es/shop-img/DE5010D1.png',
        'DG7623F0,https://d32iut21qthkdz.cloudfront.net/images/media/35323430-C28A-4D3C-B7832FFA4EAB80A6/?w=2362&h=2362&crop=false',
        'DG8626F0,https://rowentaspain.es/shop-img/DG8626F0.png',
        'DG9224F0,https://rowentaspain.es/shop-img/DG9224F0.png',
        'DG9246F0,https://rowentaspain.es/shop-img/DG9246F0.png',
        'DG9268F0,https://rowentaspain.es/shop-img/DG9268F0.png',
        'DR3030D1,https://rowentaspain.es/shop-img/DR3030D1.png',
        'DR7000D1,https://rowentaspain.es/shop-img/DR7000D1.png',
        'DR8150D1,https://rowentaspain.es/shop-img/DR8150D1.png',
        'DR8250D1,https://d32iut21qthkdz.cloudfront.net/images/media/EBAC52E7-2D32-47E3-92925B25EA60AEA1/?w=2362&h=2362&crop=false',
        'DR9100D1,https://rowentaspain.es/shop-img/DR9100D1.png',
        'DR9530D1,https://rowentaspain.es/shop-img/DR9530.png',
        'DW4320D1,https://rowentaspain.es/shop-img/DW4320D1.png',
        'DW5210D1,https://rowentaspain.es/shop-img/DW5210D1.png',
        'DW5225D1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzMDQyOXxpbWFnZS9qcGVnfGltYWdlcy9oZjkvaDdiLzE0Njc5NjM0NTQyNjIyLmpwZ3wwOTA4YWI3NWQ1ODgxODU4YTYxNGM5NTliMTdkYmM3NmFjMzQwODQ0ZDliNGJlNjAwOTQyYjlhNmU4ZDZkNDM4',
        'DW5325D1,https://d32iut21qthkdz.cloudfront.net/images/media/8B8B63F8-38E1-428E-A99396122739F86C/?w=2362&h=2362&crop=false',
        'DW6030D1,https://rowentaspain.es/shop-img/DW6030.png',
        'DW6330D1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w1OTEyMXxpbWFnZS9qcGVnfGltYWdlcy9oNGMvaDc0LzE1NjI4MzgzMTU4MzAyLmpwZ3xhYjFmZjJlN2I4ZmFjYThhNTQ2MTA3NzdhNWExMzgzNjY1N2YyYWYyZWFmMjNjMmMwNzhmZWJiYjFjNmNkMWI2',
        'DW7320D1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0NTU4OHxpbWFnZS9qcGVnfGltYWdlcy9oYWEvaDBkLzE1NjI4MzkwMzY3MjYyLmpwZ3xjMDNkMWRhYmE3MThkZDI1OGE5YzliM2M5ZGM3ODNhNGU3ZjhiMmQzODliNDMxYzZhNzE2MWUwZDIyNjZkYWM0',
        'DW8210D1,https://rowentaspain.es/shop-img/DW8210D1.png',
        'DW8215D1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w3NTE3MXxpbWFnZS9qcGVnfGltYWdlcy9oOTMvaDRiLzE0MjA2NTU2MzA3NDg2LmpwZ3wxMDIyZGY0NzcwMTYzN2M5MGNkOTljMzI1N2YzM2QxMzIzYjYzNzQxZDkzNDExMDNmNjY1NjYzMzczZDQ3YzRl',
        'DW9240D1,https://rowentaspain.es/shop-img/DW9240D1.png',
        'DX1550D1,https://rowentaspain.es/shop-img/DX1550D1.png',
        'EP1110F1,https://rowentaspain.es/shop-img/EP1110F1.png',
        'EP4920F0,https://rowentaspain.es/shop-img/EP4920F0.png',
        'EP4930F0,https://rowentaspain.es/shop-img/EP4930F0.png',
        'GZ3038WO,https://twicpics.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxMTQ4OTd8aW1hZ2UvanBlZ3xpbWFnZXMvaGI4L2gwOC8xNjA5MDM4NjE2OTg4Ni5qcGd8YjlmYzBjYTliMDZiOWE1ZjkyZTEwMDZmYWU0ODQyODU1ODI0MmY1YTRiMGU1ZWZlZjdhY2MxYThmYmFhZGIzNg&twic=v1/quality=70/resize=2000',
        'HQ7152F0,https://rowentaspain.es/shop-img/HQ7152F0.png',
        'HQ8120F0,https://rowentaspain.es/shop-img/HQ8120F0.png',
        'HU4020F0,https://d32iut21qthkdz.cloudfront.net/images/media/F283865D-E522-485C-8A262216090240E0/?w=2362&h=2362&crop=false',
        'IS8460D1,https://rowentaspain.es/shop-img/IS8460D1.png',
        'IX7767EA,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzNzA3NHxpbWFnZS9qcGVnfGltYWdlcy9oNzYvaDY5LzE1NjI4MzQ3NzAzMzI2LmpwZ3w4ZWZlMjM2YjRiZTdkMTNlNDliYjhhMmM2ZjFmN2JkM2Q2YmU2MTYyNWYyOTQxNDNhMjU2M2Y4OGU3ZTE2ODQ1',
        'LV2010F0,https://rowentaspain.es/shop-img/LV2010F0.png',
        'LV2020F0,https://rowentaspain.es/shop-img/LV2020F0.png',
        'LV4010F0,https://rowentaspain.es/shop-img/LV4010F0.png',
        'LV4020F0,https://rowentaspain.es/shop-img/LV4020F0.png',
        'LV6020F0,https://rowentaspain.es/shop-img/LV6020.png',
        'LV7030F0,https://rowentaspain.es/shop-img/LV7030F0.png',
        'LV8030F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MzM0OHxpbWFnZS9qcGVnfGltYWdlcy9oOGQvaDRlLzE1NjI5NDgxMjQ2NzUwLmpwZ3w5ZTc4NjM4Mzc5ZDA0YjJkMzA2NzM4ODkyODRjMzFmOTFiN2Y2ZGE3MjE1MGU1Y2YxMTE4MzllMTQ5ZjQ3NTI0',
        'LV8530F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzODA4MXxpbWFnZS9qcGVnfGltYWdlcy9oMDcvaGUyLzE1NjI5NDczNTEzNTAyLmpwZ3w2OGU5YjcxNDBkNWYxZDA5OTRjMDc1OGRhMTQwMWI1MDhhZjIyM2VkZWMxNWJjNzIxOWE3ODczYmI1OTBmM2U0',
        'LY4000F0,https://rowentaspain.es/shop-img/LY4000.png',
        'PU2530F0,https://rowentaspain.es/shop-img/PU2530F0.png',
        'PU2830F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MDM1OXxpbWFnZS9qcGVnfGltYWdlcy9oNjYvaGZhLzE1NzUxMTY1NDExMzU4LmpwZ3xjMGExMmNhZmY3MzJhMTVmNTRiZWFiNjE2N2UwMmExODIwNGE3YWFmNzA0OTgzODU4OWIzMzhlZjljNmRlYzFi',
        'PU3040F0,https://d32iut21qthkdz.cloudfront.net/images/media/C3046EF2-1807-46AD-9CC1CC08B8E8D608/?w=2362&h=2362&crop=false',
        'PU3080F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzNzA3NXxpbWFnZS9qcGVnfGltYWdlcy9oYjIvaDg1LzEzODkwMzExMzU2NDQ2LmJpbnxmODE5YTg4OWExMWY1OTczYTAyZTQ1NjI5ODMyMmNjMjY2NWE3MjFlMjIzNmRlZTk5MWZlZTUyYTNhMDdkMmUw',
        'PU4020F1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNzI2MnxpbWFnZS9qcGVnfGltYWdlcy9oMjMvaGE1LzE0Njc5NjY3ODY3Njc4LmpwZ3wyMDFiMGZhNzAyOTM4MTRkMWFiMjYxMGM3ZTdjY2M4Y2ZkYzYxNGI2ZTUxZjg2NzY4ZjQxNjYwOWE5M2VlNDE0',
        'PU6080F0,https://rowentaspain.es/shop-img/PU6080F0.png',
        'PU8080F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MDIzMnxpbWFnZS9qcGVnfGltYWdlcy9oZjYvaGU2LzE1NDIyMzkwMTQwOTU4LmpwZ3w2ZTAwMDZkYWRhMGJhOWZjMGM1NmRlMDQ5MmQxNGQ0ZTgzZWZjZWFhOWVhM2VhMjRiOTI0YWZlNzk1YmZhMDQ1',
        'QR1510D1,https://rowentaspain.es/shop-img/QR1510.png',
        'QR2020D1,https://rowentaspain.es/shop-img/QR2020D1.png',
        'QR2021D1,https://rowentaspain.es/shop-img/QR2021D1.png',
        'QU5030F0,https://rowentaspain.es/shop-img/QU5030.png',
        'QU5062F0,https://twicpics.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w5Njg3MnxpbWFnZS9qcGVnfGltYWdlcy9oYTAvaDE0LzE2MDgxMTMyNDIxMTUwLmpwZ3w1Y2MyN2ViNDQ4MmZmYjk0YTNlZDg0ZTNiZjM1MWNlZjY0MWY5YzEwOTkxYjY2NzkyYjU1MzU0MDJlZTRiOWNh&twic=v1/quality=70/resize=2000',
        'RH1128,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzMDYzMXxpbWFnZS9qcGVnfGltYWdlcy9oYjgvaDRjLzE1NzAwMzMyMDE5NzQyLmpwZ3xmNzliM2M2MDkzYjgzZWIzMTcyZWZlNTVjNzExOWU0ZmY0NGQ0MTkwMTVhNjRkOTAwMjIzNTg3YzZjMTA0ZmFm',
        'RH6471WO,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MTYwMXxpbWFnZS9qcGVnfGltYWdlcy9oNTcvaDUwLzE1NjI3MTUyNDI0OTkwLmpwZ3xhMmUyZTY5Y2YxNDVjZmZkN2I4OWM4MDViNDQ1ZTFlZjZkNmJjNjk0N2NlMjhiY2VkZDhiNTAyYmYzYjA4NWU4',
        'RH6737WH,https://rowentaspain.es/shop-img/RH6737.png',
        'RH6751WO,https://rowentaspain.es/shop-img/RH6751WO.png',
        'RH6878WO,https://d32iut21qthkdz.cloudfront.net/images/media/378F0437-7AC4-4F25-A710132A74B15FE7/?w=2362&h=2362&crop=false',
        'RH6921WO,https://rowentaspain.es/shop-img/RH6921WO.png',
        'RH6971WO,https://d32iut21qthkdz.cloudfront.net/images/media/42940209-2237-48CF-86D14396DCBB6C26/?w=2362&h=2362&crop=false',
        'RH8133WA,https://rowentaspain.es/shop-img/RH8133WA.png',
        'RH8147WA,https://rowentaspain.es/shop-img/RH8147WA.png',
        'RH9471WO,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNzM2MHxpbWFnZS9qcGVnfGltYWdlcy9oM2QvaDQ2LzE1NjQ3NDkyOTk3MTUwLmpwZ3xmMDhiYmY2M2JjYTVmMzA3NTM2ZDM0ZjkyOWFmMzI2YmQ0MThjOTJiMTBjNzBlNGFmOWMxZWRhMTRjYzc4OTc2',
        'RH9474WO,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MTM2MXxpbWFnZS9qcGVnfGltYWdlcy9oYTcvaGNiLzE0MDUxNzA0ODMyMDMwLmpwZ3xiOWE5NWQwYTQ1ODFiNTU2ZjA4ZjI5OGZjMzUwZTQ2MzEyZmU0OGI5NWM4ZTI2NTVjMDM3ZGRjNzM3YTU2NjNk',
        'RH9678WO,https://rowentaspain.es/shop-img/RH9678.png',
        'RH9695WO,https://rowentaspain.es/shop-img/RH9695WO.png',
        'RH9878WO,https://www.rowenta.es/medias/1-main-082ROW-PackXForce1160YCabezaAquaDeRegalo-05-07-2021.jpg?context=bWFzdGVyfHJvb3R8NDA5MDl8aW1hZ2UvanBlZ3xoNGUvaDc1LzE1MDIxMTI1NzMwMzM0LmpwZ3w1NjZiNmUyY2FmMjNmMDY3NmZhY2Y4N2I2OWVkMjUzM2Y0NDJjNjU4M2JiZDI0MGJhNGU2MWQ2MzA4MzY5NDM5',
        'RH98A8WO,https://twicpics.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxMjAxMDF8aW1hZ2UvanBlZ3xpbWFnZXMvaGE1L2hlMi8xNjA4MTA1NzE1MzA1NC5qcGd8MjllMzdmZDUyYTVhNjg1MGEwNmEzMjQ4MmUyM2I3ODQxNmM4MjFmNmJmNjJmZTQyOWQ5NGFlZGFiOGI0MDUwNg&twic=v1/quality=70/resize=2000',
        'RH9958WO,https://d32iut21qthkdz.cloudfront.net/images/media/ACFB555C-206F-4A51-90BBF667F02406FB/?w=2362&h=2362&crop=false',
        'RH99F1WO,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0NDE0OXxpbWFnZS9qcGVnfGltYWdlcy9oMGIvaDRlLzE1NjM1MzIyNDA0ODk0LmpwZ3xhYzVjMDJlNjg3NzU1MGQ5ODVkZDgxYjY1ZDRiZjY5MDE1OGYyOTU3MmNmNjhjNzBkMzJiZTVhZTcyNjczYWQy',
        'RO2913EA,https://rowentaspain.es/shop-img/RO2913EA.png',
        'RO3125EA,https://rowentaspain.es/shop-img/RO3125EA.png',
        'RO4825EA,https://rowentaspain.es/shop-img/RO4825EA.png',
        'RO6859EA,https://rowentaspain.es/shop-img/RO6859EA.png',
        'RO7212EA,https://rowentaspain.es/shop-img/RO7212EA.png',
        'RO7649EA,https://rowentaspain.es/shop-img/RO7649EA.png',
        'RO7740EA,https://rowentaspain.es/shop-img/RO7740EA.png',
        'RR6871WH,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w4MTQ4N3xpbWFnZS9qcGVnfGltYWdlcy9oOTIvaDBhLzE1Mjc2NjY5Njk4MDc4LmpwZ3wzZjA3ODEwZTZiOTUxMWQ0YjJkMDRlYTAzZjU0MTJhNzE1Y2NhMTZhYmM1MmM5MzQ5ZDY4NjI2ODFkM2NmM2Q1',
        'RR7267WH,https://rowentaspain.es/shop-img/RR7267WH.png',
        'RR7335WH,https://rowentaspain.es/shop-img/RR7335.png',
        'RR7387WH,https://d32iut21qthkdz.cloudfront.net/images/media/5B2BC4D6-3B98-4843-BCD9425DE9C338AC/?w=2362&h=2362&crop=false',
        'RR7447WH,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNTk3MHxpbWFnZS9qcGVnfGltYWdlcy9oMmMvaGFhLzE1MDA5NTUzOTQwNTEwLmpwZ3xhNGYyMjA2YWVlMjZmNTUzZWFiM2FmNDg5NjY1Y2E4OTNhNTBkMzZkOWQyNzIxYTIwNDFkZDAxOGU5OTBmMjg5',
        'RR7455WH,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0MTU1NHxpbWFnZS9qcGVnfGltYWdlcy9oM2IvaGExLzE0Njc5NTE3NzkwMjM4LmpwZ3wxNmE0YmE2M2M2NDkzODRhMTUwMDkzYmVlYzZmZDRmMzg4ZTY5MzliM2Y2MTJmY2M0YmNhYWI1ODAwYWZmYzkw',
        'RR7647WH,https://rowentaspain.es/shop-img/RR7647.png',
        'RR7875WH,https://d32iut21qthkdz.cloudfront.net/images/media/F4EB5ED9-FD8F-450F-99DD241705C23593/?w=2362&h=2362&crop=false',
        'RR7877WH,https://d32iut21qthkdz.cloudfront.net/images/media/E17CF5D8-6B92-4F90-8FBBE36AA244E923/?w=2362&h=2362&crop=false',
        'RR7947WH,https://rowentaspain.es/shop-img/RR7947.png',
        'RR8227WH,https://d32iut21qthkdz.cloudfront.net/images/media/7E837CC0-54F5-4D07-93F3950F4B2C5C86/?w=2362&h=2362&crop=false',
        'RR8265WH,https://d32iut21qthkdz.cloudfront.net/images/media/BA43A5FC-5AFA-409F-838C16FD3B7295B9/?w=2362&h=2362&crop=false',
        'RR8275WH,https://d32iut21qthkdz.cloudfront.net/images/media/BA43A5FC-5AFA-409F-838C16FD3B7295B9/?w=2362&h=2362&crop=false',
        'RY6597WH,https://rowentaspain.es/shop-img/RY6597WH.png',
        'RY7757WH,https://rowentaspain.es/shop-img/RY7757WH.png',
        'RY8544WH,https://d32iut21qthkdz.cloudfront.net/images/media/5DC7E7B2-9CDF-4BE5-B4EC52639EFF669F/?w=2362&h=2362&crop=false',
        'SF1920F0,https://d32iut21qthkdz.cloudfront.net/images/media/C21BA755-614E-4A95-B34284F8E91B3FE6/?w=2362&h=2362&crop=false',
        'SF323LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyMTI1NnxpbWFnZS9qcGVnfGltYWdlcy9oMmEvaDg1LzE1NzUxMTkwNTExNjQ2LmpwZ3xmMWZmOGViYzA0ZGY1OWQ4N2VhMjU3ZjQ1ZjViZmY5MzBiZjZiODAxMmU3NjA2ODQ4Yjg0YjZlNzJhZWUzNTRj',
        'SF4210F0,https://rowentaspain.es/shop-img/SF4210F0.png',
        'SF4522E0,https://rowentaspain.es/shop-img/SF4522E0.png',
        'SF4630F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyMjM4M3xpbWFnZS9qcGVnfGltYWdlcy9oMmYvaDQ5LzE1NjI4NDIyMzE2MDYyLmpwZ3w0ODk5YTYxMzVkZjA5Y2NkNGVlY2NkZDk0YzU4YTNkZDI0YzQwNzM1NTlmMDdjNjhjNDY4OTM4YjY3NTFlYjNi',
        'SF4650F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wxOTA3NnxpbWFnZS9qcGVnfGltYWdlcy9oMTgvaDBiLzE1NjI4NDM0NDcyOTkwLmpwZ3w1NDg5YTYwZDNiMmY4ZmZiNjQyNGM3MjZhODAxMzY2OWJlNjY0YjdlMWQzOGY3YjhmZWU1YmU5MzY2MWVlZjhl',
        'SF467LF0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNzUzMnxpbWFnZS9qcGVnfGltYWdlcy9oMjIvaDk1LzE1NzUxMTMzNzI0NzAyLmpwZ3xhMDZlNTBmZmQ5YzhmYjEyYmVlMzAyZTQ1YjUzOTg5NDAzZDRjZmYzNDRmMTRlMWZiYjNkYTMzODE1ZDdiODg1',
        'SF5010F0,https://d32iut21qthkdz.cloudfront.net/images/media/E28B7E93-05A1-4CFB-ABC930451F1E6877/?w=2362&h=2362&crop=false',
        'SF7510F0,https://rowentaspain.es/shop-img/SF7510F0.png',
        'SF8230F0,https://d32iut21qthkdz.cloudfront.net/images/media/E434E2F2-F704-4DF7-999DB1048DD32255/?w=2362&h=2362&crop=false',
        'SO2320F2,https://rowentaspain.es/shop-img/SO2320F2.png',
        'SO9261F0,https://d32iut21qthkdz.cloudfront.net/images/media/AF9539CA-1F5A-4B17-90C22E4EEE0E4375/?w=2362&h=2362&crop=false',
        'SO9266F0,https://d32iut21qthkdz.cloudfront.net/images/media/18A25E7B-CF60-41EC-96DC4FD9B28F3009/?w=2362&h=2362&crop=false',
        'SO9281F0,https://d32iut21qthkdz.cloudfront.net/images/media/3E560DE9-E518-433F-8E06539CC209BE70/?w=2362&h=2362&crop=false',
        'SO9420F0,https://rowentaspain.es/shop-img/SO9420F0.png',
        'TN1300F0,https://rowentaspain.es/shop-img/TN1300F0.png',
        'TN2801F4,https://rowentaspain.es/shop-img/TN2801.png',
        'TN3011F0,https://d32iut21qthkdz.cloudfront.net/images/media/0E8C2CE8-512E-4A30-95B8DF4D0FEA6ADC/?w=2362&h=2362&crop=false',
        'TN3651F0,https://d32iut21qthkdz.cloudfront.net/images/media/6D98F1B0-94F8-4C70-927D283CA9F25756/?w=2362&h=2362&crop=false',
        'TN3800F4,https://rowentaspain.es/shop-img/TN3800.png',
        'TN3840F4,https://rowentaspain.es/shop-img/TN3840.png',
        'TN384MF0,https://d32iut21qthkdz.cloudfront.net/images/media/D42EB515-BC28-422D-B141955C2723082F/?w=2362&h=2362&crop=false',
        'TN5201F4,https://rowentaspain.es/shop-img/TN5201.png',
        'TN5221F4,https://rowentaspain.es/shop-img/TN5221.png',
        'TN5241F4,https://rowentaspain.es/shop-img/TN5241.png',
        'TN524MF0,https://d32iut21qthkdz.cloudfront.net/images/media/1798BF7F-5CD7-45FE-8B915F3EB4406D3A/?w=2362&h=2362&crop=false',
        'TN6010F5,https://rowentaspain.es/shop-img/TN6010F5.png',
        'TN6040F4,https://rowentaspain.es/shop-img/TN6040.png',
        'TN604MF0,https://d32iut21qthkdz.cloudfront.net/images/media/F525EAED-B2CC-46F3-85E45AF7B6784C89/?w=2362&h=2362&crop=false',
        'TN6200F4,https://rowentaspain.es/shop-img/TN6200.png',
        'TN8931F4,https://rowentaspain.es/shop-img/TN8931.png',
        'TN9110F4,https://rowentaspain.es/shop-img/TN9110.png',
        'TN9320F0,https://d32iut21qthkdz.cloudfront.net/images/media/B109E665-0525-4126-AA6596ED74EBA008/?w=2362&h=2362&crop=false',
        'TN9400F4,https://rowentaspain.es/shop-img/TN9400.png',
        'TN944MF0,https://d32iut21qthkdz.cloudfront.net/images/media/66F174A5-23FD-4427-B06EC1D7D5897F6B/?w=2362&h=2362&crop=false',
        'TN9460F4,https://rowentaspain.es/shop-img/TN9460.png',
        'UR1502D1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0OTQyN3xpbWFnZS9qcGVnfGltYWdlcy9oNjUvaDZkLzE1NzQzNjU3NDc2MTI2LmpwZ3xjZDcyNmE5MWRiNGY5ZDBmMTJmOWYxYjNlYWU1NWE1YWFhNzMwOTk2OGY3ZTM4ODgxNDk4ZTMwODU2OWJjODhi',
        'UR2020D1,https://rowentaspain.es/shop-img/UR2020.png',
        'VR5120F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzODM3MnxpbWFnZS9qcGVnfGltYWdlcy9oNDEvaGM5LzE1NjIzMTg4NjExMTAyLmpwZ3w3NmI2NGUzMDU0MWM2Mzg2YWVlY2NmYjViNmUwYzllMTIwM2Q2NzUxOTBhOTI3NDRkZTE4YjkyMzAyOTg4Mzdj',
        'VR7260F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wzOTU1MHxpbWFnZS9qcGVnfGltYWdlcy9oMTUvaGQyLzE1MzU2MTM1NzAyNTU4LmpwZ3xlZTdkMmMxOTAxOWRiZDlmZGUxYTczMTQ5YmI5YmFjZGVhNWU5YjM1OTVlZjc4NTUzNDMzOTA4ODNmZTIzMWU2',
        'VR7360F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w0NDM3NXxpbWFnZS9qcGVnfGltYWdlcy9oNGQvaDA2LzE1NjIzMjAxNTg3MjMwLmpwZ3wxYjZlNmYxMDAwZjdlNjU0ZGUzNzdjMTM2NjhjNDA3YTU4NjE1MzY2OTlmYzY2MGE4ZDMzNDE1OWE1NDliNjZi',
        'VR8225F0,https://rowentaspain.es/shop-img/VR8225F0.png',
        'VR8227F0,https://rowentaspain.es/shop-img/VR8227F0.png',
        'VR8315F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w2MjQwNnxpbWFnZS9qcGVnfGltYWdlcy9oZDcvaDMxLzE1NjI4MzU3NDY4MTkwLmpwZ3w3MjZlYWFkYWI0Mjk0OGYwZmFjODRjYTI3MDdmYThkOTc1YzIzYzBkNTBkODgxZGNjYzFhYjE4M2Y0YzBjY2Jl',
        'VR8320F0,https://rowentaspain.es/shop-img/VR8320F0.png',
        'VU2330F0,https://rowentaspain.es/shop-img/VU2330.png',
        'VU2630F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w2Mjg0NnxpbWFnZS9qcGVnfGltYWdlcy9oMjgvaGMyLzE0Njc5NDQ0NTIwOTkwLmpwZ3w0NTYzZDk4NTQwNzkxZDhmYWVhMTMzNGE4OWEyZTU1ZWY3YWE2YzVlMTgyZmY2YzlmOGI2NzYwMjk4ZmYyMmJj',
        'VU2730F0,https://rowentaspain.es/shop-img/VU2730.png',
        'VU4410F0,https://d32iut21qthkdz.cloudfront.net/images/media/6A403C19-337E-4AA4-BC0400E44FFFC210/?w=2362&h=2362&crop=false',
        'VU5640F2,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNTMxMnxpbWFnZS9qcGVnfGltYWdlcy9oNWUvaDQwLzE1NzUxMTQ1NjUyMjU0LmpwZ3xmZTAwMWU0ZGJmNTg2NWNkYzgzNGJlZjAyMmMyZjgzZDg3ODZhYzE1NjZmNjA1M2RmYjNiYzY2YjNhMTFjYzE5',
        'VU5670F0,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3wyNjA4N3xpbWFnZS9qcGVnfGltYWdlcy9oYWUvaGQwLzE1Njg5MjY5MjgwNzk4LmpwZ3wyY2Q1MmEzZmVkMDY0ZTU1Y2VmYzAzNTNhMGM5Mjk5Y2I2NzFhZmYxNzk0ZGY1ZjAyNzExZDZiMTViN2U2YzIz',
        'VU5870F0,https://rowentaspain.es/shop-img/VU5870.png',
        'VU5880F0,https://rowentaspain.es/shop-img/VU5880.png',
        'VU6210F0,https://rowentaspain.es/shop-img/VU6210F0.png',
        'VU6670F0,https://rowentaspain.es/shop-img/VU6670F0.png',
        'VU6720F0,https://rowentaspain.es/shop-img/VU6720.png',
        'VU6770F0,https://rowentaspain.es/shop-img/VU6770.png',
        'YR3040D1,https://www.rowenta.es/medias/?context=bWFzdGVyfGltYWdlc3w4NzEyN3xpbWFnZS9qcGVnfGltYWdlcy9oMWYvaDNlLzE1NDMxNDc0MzgwODMwLmpwZ3xmZDY2ZjAyZmI4OGQ1ZTk4ZjE5OTBmMmMwNWM3NmQ2YjQ2MjZiODhiZjI5MTRlOTkwMWU5Y2Y3NTJlMjQxYzk5',
         ];
    
    // $productIDs = [
    //     78396,78413,78414,78415,78416,78418,78427,78428,78429,78439,78443,78444,78445,78446,78448,78449,78450,78451,78452,78464,78467,78472,78523,78524,78531,78532,78535,78553,78569,78570,78575,78576,78611,78622,78635,78639,78650,78651,78652,78653,78661,78663,78669,78670,78672,78678,78685,78703,78704,78705,78707,78708,78709,78721,78722,78724,78725,78726,78729,78730,78737,78738,78739,78742,78767,78771,78777,78778,78780,78781,78797,78812,78813
    // ];

    // var_dump($productIDs);
    echo "<div class='row'><div class='col border'>productIDs</div><div class='col border'>url</div><div class='col border'>response</div></div>";
    // var_dump(explode(",",$productInfo[0]));
    // return;
    foreach ($productInfo as $thisInfo) {
        $productIDs = explode(",",$thisInfo)[0];
        $imgUrl = explode(",",$thisInfo)[1];
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
            echo "<div class='row' style='width:900px'><div class='col border'>".$productIDs."</div><div class='col border'>".$res."</div><div class='col border' style='overflow:hidden'><a target='_blank' href='".$imgUrl."'>".$imgUrl."</a></div></div>";

        }
        else if ($header_response == "200"){
            $res = $header_response;
        }
        else{
            $res = "<b style='color:orange'>".$header_response."</b>";
            echo "<div class='row' style='width:900px'><div class='col border'>".$productIDs."</div><div class='col border'>".$res."</div><div class='col border' style='overflow:hidden'><a target='_blank' href='".$imgUrl."'>".$imgUrl."</a></div></div>";

        }


        // echo "<div class='row'><div class='col border'>".$thisId."</div><div class='col border'>".$res."</div><div class='col border'><a target='_blank' href='".$imgUrl."'>".$imgUrl."</a></div></div>";
        curl_close($ch);
    
    }

};