<?php require_once('header.php') ?>
<body>
    <header>
        <h1>二次元バーコード生成</h1>
    </header>
    <main>
        <section>
            <form method="GET" action="result.php">
                <textarea name="data" placeholder="バーコードにしたい文字列を入力"></textarea>
                <input type="submit" value="二次元バーコードを生成する">
            </form>
        </section>
    </main>
</body>

</html>