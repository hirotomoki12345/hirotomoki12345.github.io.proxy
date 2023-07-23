<?php
// PHProxyスクリプトの設定ファイルを読み込む
require_once 'config.php';

// URLの入力チェック
if (empty($_GET['url'])) {
  die('URLを入力してください');
}

// 指定されたURLにアクセスするためのcURLセッションを初期化
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_GET['url']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// cURLを使用してURLにアクセスし、結果を取得
$result = curl_exec($ch);

// cURLセッションを終了
curl_close($ch);

// 取得した結果を表示
echo $result;
?>
