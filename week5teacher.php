<?php 
session_start();

if($_SESSION["login"]=="teacher"||($_SESSION["login"]=="president")){
    
}else{
    header("Location:week5error.php");
}

$_SESSION["login"]="teacher";

?>
<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
        您好 老師
        <br>
        <a href="week5student.php">前往學生網頁</a>
        <br>
        <a href="week5president.php">前往校長網頁</a>
        <br>
        <a href="week5logout.php">登出<a> 
    </body>
</html>