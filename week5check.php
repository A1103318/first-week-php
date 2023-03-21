<?php
session_start();

$trID="aaaa";
$trPWD="1111";

$preID="bbbb";
$prePWD="2222";

$stuID="cccc";
$stuPWD="3333";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if($trID==$id&&$trPWD==$pwd){
    $_SESSION["login"]="teacher";
    header("Location:week5teacher.php");
}elseif($preID==$id&&$prePWD==$pwd){
    $_SESSION["login"]="president";
    header("Location:week5president.php");
}elseif($stuID==$id&&$stuPWD==$pwd){
    $_SESSION["login"]="student";
    header("Location:week5student.php");
}else{
    $_SESSION["login"]="no";
    header("Location:week5fail.php");
}

?>