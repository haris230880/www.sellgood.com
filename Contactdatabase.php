<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sales';

$Connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$Connect) {
	die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)" . mysqli_connect_error());
} else {
	echo "Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)";
}

    $sql = "SELECT * FROM product";


mysqli_close($Connect); // ปิดฐานข้อมูล
?>