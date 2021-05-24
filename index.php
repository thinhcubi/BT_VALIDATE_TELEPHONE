<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .h1{
            color: black;
        }
    </style>
</head>
<h1>Validat Telephone</h1>
<body>
<form method="get">
<table>
    <tr>
        <td>Telephone</td>
        <td><input type="text" name="telephone"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Check"></td>
    </tr>
</table>
</form>
<?php
if($_SERVER["REQUEST_METHOD"]="POST"){
    $telephone = $_GET["telephone"];
    function check($telephone){
        $pattern = '/^[\d]{2}-0[\d]{9}$/';
        if(preg_match($pattern,$telephone)){
            echo "So dien thoai hop le";
        } else {
            echo "So dien thoai khong hop le";
        }
    }
    check($telephone);
}

?>

</body>
</html>
