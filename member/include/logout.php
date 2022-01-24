<?php
session_start();
unset($_SESSION['user']);
header("location:index.php");
?>

<!-- 做會員登出功能 -->