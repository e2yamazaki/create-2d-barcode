<?php
session_start();
require_once('header.php');
$_SESSION['dataToBarcode'] = $_GET['data'] ?? 'sample';
$copyUrl = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<body>
    <header>
        <h1>二次元バーコード生成</h1>
    </header>
    <main>
        <section>
            <img src="create.php">
            <pre id="copy-txt"><?= htmlspecialchars($copyUrl, ENT_QUOTES, 'utf-8') ?></pre>
            <button id="copy-btn">URLをコピーする</button>
            <p><a href="index">戻る</a></p>
        </section>
    </main>

    <script>
        const txt = document.getElementById('copy-txt');
        const btn = document.getElementById('copy-btn');

        btn.addEventListener('click', () => {
            if (!navigator.clipboard) {
                alert("このブラウザは対応していません");
                return;
            }

            navigator.clipboard.writeText(txt.textContent).then(
                () => {
                    alert('コピーしました');
                },
                () => {
                    alert('コピー失敗しました');
                });
        });
    </script>
</body>

</html>