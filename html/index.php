<?php
/*
 * トップページ・お知らせ記事一覧
 */
include("./lib/common.php");
$pdo = get_conn();
$stmt = $pdo->query("select id,view_date,title,body from news order by view_date desc");
$list = array();
while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	$list[] = $result;
}
include("./lib/view/index.php");
?>
