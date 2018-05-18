<?
// 資料庫連線
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "talkboard";
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
?>