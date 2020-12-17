
<?php 

?>
<main>
    <hr>
    <h1>案件検索画面</h1>
    <hr>
    <form action="" method="post">
        <input type="text">検索文字列を入力</input>
    </form>

    <form action="" method="post">
        <?php for($i=0; $i<10; $i++): ?>
            <p><?= "ID:".$i ?><?= "顧客名:"."" ?><?= "金額:"."10000000" ?>
                <button type="submit" value="cancel" name="regist">キャンセル</button>
                <button type="submit" value="nofity" name="regist">督促通知</button>
                <button type="submit" value="detail" name="regist">案件詳細</button>
            </p>
        <?php endfor ?>
    </form>
    <?php var_dump($fuga) ?>
    <hr>

<pre>
↑こんな感じのフォームを配置して
送信するのが主になるかな

サンプルとして入力値を処理して表示に反映させておきます。
</pre>
</main>
<!-- main ここまで -->
