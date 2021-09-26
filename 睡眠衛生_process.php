<?php

$getup = $_POST['getup'];
$nap = $_POST['nap'];
$alcohol = $_POST['alcohol'];
$coffee = $_POST['coffee'];
$snack = $_POST['snack'];
$sport = $_POST['sport'];
$bedding = $_POST['bedding'];
$temperature = $_POST['temperature'];
$quiet = $_POST['quiet'];
$workinbed = $_POST['workinbed'];

echo $getup."<br>";
echo $nap."<br>";
echo $alcohol."<br>";
echo $coffee."<br>";
echo $snack."<br>";
echo $sport."<br>";
echo $bedding."<br>";
echo $temperature."<br>";
echo $quiet."<br>";
echo $workinbed."<br>";

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

$sql = "INSERT INTO `personal_info`(`getup`, `nap`, `alcohol`, `coffee`, `snack`, `sport`, `bedding`, `temperature`, `quiet`, `workinbed`)VALUES(\"".$getup."\",\"".$nap."\",\"".$alcohol."\",\"".$coffee."\",\"".$snack."\",\"".$sport."\",\"".$bedding."\",\"".$temperature."\",\"".$quiet."\",\"".$workinbed."\")";

echo $sql."<br>";

mysqli_query($link, $sql);

mysqli_close($link);  // 關閉資料庫連接

?>

