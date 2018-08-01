<?php
/*
 * 管理画面・お知らせ記事削除
 */
include("../lib/common.php");

$id = $_GET['id'];

$pdo = get_conn();
$stmt = $pdo->prepare("delete from news where id = :id");
$stmt->bindParam(':id',$id);
$stmt->execute();

redirect("./");

?>
