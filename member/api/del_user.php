<?php

$user=$pdo->query("select `id` from `account` where `account`={$_SESSION['user']}'")->fetchColumn();
$sql_account="DELETE FROM;
// 還沒刪除之前 用來確認此是否為本人
-- // 就是用$_SESSION[`user`]確認
$sql_member="DELETE FROM ;"
// 要刪除member時 又沒有像account這樣的選項可找


header("location:../");
//刪除完資料後 要去的地方 建議去首頁index
// 而刪要記得去清他的session跟cookie
//因為刪除的時候 他還是登入狀態
?>