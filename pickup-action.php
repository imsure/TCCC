<?php

define('DB_NAME', 'tcccstudent');
define('DB_USER', 'tcccstudent');
define('DB_PASSWORD', 'FirstTim@412');
define('DB_HOST', 'tcccstudent.db.4586661.hostedresource.com');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
  die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
  die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$airline = $_POST['airline'];
$flightnum = $_POST['flightnum'];
$wechat = $_POST['wechat'];
$arrivetime = $_POST['arrivetime'];
$address = $_POST['address'];
$numbags = $_POST['numbags'];
$notes = $_POST['notes'];

$table = 'Fall2015pickup';
$sql = <<<EOT
INSERT INTO $table (Name, Gender, WeChat, Email, Phone, Airline, FlightNum, 
ArriveAddress, ArriveTime, NumBags, Notes) VALUES ('$name', '$gender', 'wechat',
'$email', '$phone', '$airline', '$flightnum', '$address', '$arrivetime', '$numbags', '$notes')
EOT;

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error());
}

mysql_close();
?>
