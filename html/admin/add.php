<?php
/*
 * 管理画面・お知らせ記事追加
 */
include("../lib/common.php");

$mode = get_mode();

//追加ボタン押下時
if($mode == "add"){
	$title = isset($_POST['title']) ? $_POST['title'] : "";
	$body = isset($_POST['body']) ? $_POST['body'] : "";

	//入力チェック
	$error = array();
	if(!$title){
		$error["title"] = "タイトルを入力してください";
	}

	if($error){
		//エラーがある場合
		//入力画面に戻ってエラーメッセージを表示
		include("../lib/view/admin/add.php");
	}else{
		//エラーが無い場合
		//DB登録して一覧へ遷移する
		$pdo = get_conn();
		$stmt = $pdo->prepare("insert into news (view_date,title,body) values (:view_date, :title, :body)");
		$now = date('Y/m/d H:i:s');
		$stmt->bindParam(':view_date',$now);
		$stmt->bindParam(':title',$title);
		$stmt->bindParam(':body',$body);
		$stmt->execute();

		redirect("./");
	}

//初期表示時
}else{
	$title = "";
	$body = "";
	include("../lib/view/admin/add.php");
}

?>
