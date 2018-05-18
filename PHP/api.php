<?
require('./conSQL.php');
// 連線

$search="SELECT * FROM 留言版 ORDER BY 留言時間 DESC";
$result=$conn->query($search);

$myarray=[];

while ($row=mysqli_fetch_assoc($result)) {
 array_push($myarray,["name"=>$row["名字"],"comment"=>$row["留言"],"time"=>$row["留言時間"]]);
};

echo json_encode($myarray,JSON_UNESCAPED_UNICODE);

// 沒有JSON_UNESCAPED_UNICODE ，會產生亂碼

// 取得子留言
$search="SELECT * FROM 留言回覆 ORDER BY 次留言時間 DESC";
$result=$conn->query($search);




?>