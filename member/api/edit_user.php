<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=member";
$pdo=new PDO($dsn,'root','');

$id=$_POST['id'];
$addr=$_POST['address'];
$mobile=$_POST['mobile'];
$mail=$_POST['mail'];

// 如何讓兩張資料表合一
//更新的sql語法
$sql_account="UPDATE `account` SET `mali` WHERE `id`='$id'";
$sql_member="UPDATE `account` SET `address`=`$addr`,`mobile`='$mobile',`birthday`='$birthday' WHERE `id`='$id'";



// 執行更新
$pdo->exec($sql_account);
$pdo->exec($sql_account);

header("location:../dashboard.php?user={$_GET['user']}");

?>