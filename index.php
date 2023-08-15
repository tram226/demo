<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
    <title>Quản lý thành viên</title>
</head>
<body>
    
</body>
</html>
<?php
include "Model/DBcon.php";
$db = new Database;
$db->connect();

if(isset($_GET['controller'])){
    $controller = $_GET['controller'];
}else{
    $controller = '';
}

switch($controller){
    case 'thanhvien':{
        require_once('Controller/page/index.php');
    }
}

// trâm xinh gái yêu hương 
?>

