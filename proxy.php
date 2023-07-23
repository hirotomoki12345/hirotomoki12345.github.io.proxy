<?php
if (isset($_GET['url'])) {
  $url = $_GET['url'];

  // プロキシサーバーでCORSを許可する
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

  // 指定されたURLにリクエストを送信
  $response = @file_get_contents($url);

  if ($response === false) {
    echo "エラーが発生しました";
  } else {
    // レスポンスを出力
    echo $response;
  }
} else {
  echo "URLが指定されていません";
}
?>
