<?php require_once 'header.php' ?>

<body>
    <h1 class="ui center aligned header">
        <i class="qrcode icon"></i>
        二次元バーコード生成
    </h1>
    <div class="ui container">
        <div class="ui column centered grid">
            <form class="column ui form" method="GET" action="result.php">
                <div class="field">
                    <textarea rows="2" name="data" placeholder="バーコードにしたい文字列を入力"></textarea>
                </div>
                <input type="submit" class="ui positive basic button" value="二次元バーコードを生成する">
            </form>
        </div>
    </div>
</body>

</html>