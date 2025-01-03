<?php

session_start(); // セッションを開始

// 1. 必要なファイルを読み込む
require_once('functions/security.php');
require_once 'functions/sql_util.php';
require_once('functions/db_connect.php');
$pdo = db_connect(); // データベース接続

// 2. POSTデータを取得
$id = $_POST['id'];
$name = $_POST['name'];
$job = $_POST['job'];
$hp = $_POST['hp'];
$mp = $_POST['mp'];

// 3. データベース更新SQLを準備
$sql = 'UPDATE players SET name = :name, job = :job, hp = :hp, mp = :mp WHERE id = :id';
$params = [':name' => $name, ':job' => $job, ':hp' => $hp, ':mp' => $mp, ':id' => $id];
// 材料の名前(key)と実際の材料(values)を連想配列形式で設定
executeQuery($pdo, $sql, $params);
// executeQuery()関数を使って、SQL文を実行します。

// 4. データベース接続を閉じる
$_SESSION['message'] = 'キャラクターが正常に更新されました。';
header('Location: register_confirm.php');
exit;