<?php 
session_start();

if($_SESSION["login"]=="student"||($_SESSION["login"]=="teacher")){
    
}else{
    header("Location:week5error.php");
}

$_SESSION["login"]="student";

?>
<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
        您好 學生
        <br>
        <a href="week5teacher.php">前往老師網頁</a>
        <br>
        <a href="week5president.php">前往校長網頁</a>
        <br>
        <a href="week5logout.php">登出<a> 
    </body>
</html>