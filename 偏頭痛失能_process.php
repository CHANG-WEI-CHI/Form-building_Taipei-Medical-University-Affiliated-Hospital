<?php

$notwork = $_POST['notwork'];
$halfwork = $_POST['halfwork'];
$nothomework = $_POST['nothomework'];
$halfhomework = $_POST['halfhomework'];
$notactivity = $_POST['notactivity'];
$acheday = $_POST['acheday'];
$achelevel = $_POST['achelevel'];

echo $notwork."<br>";
echo $halfwork."<br>";
echo $nothomework."<br>";
echo $halfhomework."<br>";
echo $notactivity."<br>";
echo $acheday."<br>";
echo $achelevel."<br>";

$link = @mysqli_connect(
    'localhost',  // MySQL主機名稱
    'uptp',       // 使用者名稱
    '$NtustCsie503',  // 密碼
    'sleep_disorder');  // 預設使用的資料庫名稱
if ( !$link ) {
echo "MySQL資料庫連接錯誤!<br/>";
exit();
}
else {
echo "MySQL資料庫test連接成功!<br/>";
}

$sql = "INSERT INTO `personal_info`(`notwork`, `halfwork`, `nothomework`, `halfhomework`, `notactivity`, `acheday`, `achelevel`)VALUES(\"".$notwork."\", \"".$halfwork."\", \"".$nothomework."\", \"".$halfhomework."\", \"".$notactivity."\", \"".$acheday."\", \"".$achelevel."\")";

echo $sql."<br>";

mysqli_query($link, $sql);

mysqli_close($link);  // 關閉資料庫連接

?>

