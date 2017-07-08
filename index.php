<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฺLine Bot 1</title>
</head>

<body>
<?php 
function connect_database(){
mysql_connect('banshareonline.thaieasydns.com','yut','passw0rd..') or die ('ไม่สามารถติดต่อฐานข้อมูลได้');
	mysql_select_db('line_bot') or die ('ไม่สามารถเลือกฐานข้อมูลได้');
	mysql_query("SET NAMES UTF8");
}
connect_database();
	?>
Yut Test Line Bot
</body>
</html>