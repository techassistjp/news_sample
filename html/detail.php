<?php
/*
 * お知らせ記事詳細
 */
include("./lib/common.php");
$pdo = get_conn();

$id = $_GET['id'];
$view_date = "";
$title = "";
$body = "";

$stmt = $pdo->prepare("select id,view_date,title,body from news where id = :id");
$stmt->bindParam(':id',$id);
$stmt->execute();
if($result = $stmt->fetch(PDO::FETCH_ASSOC)){
	$view_date = date('Y/m/d',strtotime($result['view_date']));
	$title = $result['title'];
	$body = $result['body'];
}

include("./lib/view/detail.php");

?>
