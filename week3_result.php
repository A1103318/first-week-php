<?php
$fname=$_POST["fname"];
$studentid=$_POST["studentid"];
$decide=$_POST["decide"];


echo "你的名字是:".$fname."<br/>";
echo "你的學號是:".$studentid."<br/>";

if($decide=="yes"){
    echo "你決定參加系烤 歡迎你";
}else{
    echo "真的不打算參加嗎 可惜了";
}
?>