<?php 
session_start();

if($_SESSION["login"]=="president"){
    
}else{
    header("Location:week5error.php");
}

$_SESSION["login"]="president";

?>
<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
        您好 校長
        <br>
        <a href="week5student.php">前往學生網頁</a>
        <br>
        <a href="week5teacher.php">前往老師網頁</a>
        <br>
        <a href="week5logout.php">登出<a> 
    </body>
</html>