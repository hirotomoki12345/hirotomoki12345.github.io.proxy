<!DOCTYPE html>
<html>
<head>
  <title>プロキシサイト</title>
</head>
<body>
  <h1>プロキシサイト</h1>
  <div class="container">
    <input type="text" id="urlInput" class="input-field" placeholder="ページを埋め込むリンクを入力してください (https://を含む)">
    <button id="submitBtn" class="submit-btn">埋め込む</button>
  </div>
  <script>
    (function () {
      // スタイルを追加するためのCSSを生成
      var style = document.createElement("style");
      style.textContent = `
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            background-color: #ffffff;
        }
        .input-field {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .submit-btn {
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
      `;
      document.head.appendChild(style);

      // ボタンをクリックした時の処理を設定
      var submitBtn = document.getElementById("submitBtn");
      submitBtn.addEventListener("click", function () {
        var url = document.getElementById("urlInput").value;

        // Make an AJAX request to the PHP script to fetch the content
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              // Create a new window and display the fetched content in an iframe
              var win = window.open();
              win.document.body.style.margin = "0";
              win.document.body.style.height = "100vh";
              var iframe = win.document.createElement("iframe");
              iframe.style.border = "none";
              iframe.style.width = "100%";
              iframe.style.height = "100%";
              iframe.style.margin = "0";
              iframe.referrerpolicy = "no-referrer";
              iframe.allow = "fullscreen";
              iframe.srcdoc = xhr.responseText; // Set the fetched content as srcdoc
              win.document.body.appendChild(iframe);
            } else {
              alert('Error fetching content: ' + xhr.statusText);
            }
          }
        };
        xhr.open('GET', 'proxy.php?url=' + encodeURIComponent(url), true);
        xhr.send();
      });
    })();
  </script>
</body>
</html>
