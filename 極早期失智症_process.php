<?php

$judgment = $_POST['judgment'];
$interestdown = $_POST['interestdown'];
$repeat = $_POST['repeat'];
$learnproblem = $_POST['learnproblem'];
$forgetdate = $_POST['forgetdate'];
$complex = $_POST['complex'];
$time = $_POST['time'];
$think = $_POST['think'];

echo $judgment."<br>";
echo $interestdown."<br>";
echo $repeat."<br>";
echo $learnproblem."<br>";
echo $forgetdate."<br>";
echo $complex."<br>";
echo $time."<br>";
echo $think."<br>";

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

$sql = "INSERT INTO `personal_info`(`judgment`, `interestdown`, `repeat`, `learnproblem`, `forgetdate`, `complex`, `time`, `think`)VALUES(\"".$judgment."\",\"".$interestdown."\",\"".$repeat."\",\"".$learnproblem."\",\"".$forgetdate."\",\"".$complex."\",\"".$time."\",\"".$think."\")";

echo $sql."<br>";

mysqli_query($link, $sql);

mysqli_close($link);  // 關閉資料庫連接

?>