<?php
/*
 * 管理画面・お知らせ記事一覧
 */
include("../lib/common.php");
$pdo = get_conn();
$stmt = $pdo->query("select * from news");
$list = array();
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	$list[] = $result;
}
include("../lib/view/admin/index.php");
?>