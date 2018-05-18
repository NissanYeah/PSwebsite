<?php
require('./conSQL');

$nickname=$_POST["nickname"];
$comment=$_POST["comment"];
$commenttime=date("Y-m-d H-i-s");
$sql = "Insert Into 留言版 (名字,留言,留言時間) VALUES('".$nickname."','".$comment."','".$commenttime."')";
if(isset($_POST['nickname'])&&isset($_POST['comment'])){
    if($conn->query($sql)===true){
      header("Location: ./index.html"); 
    }
}



?>