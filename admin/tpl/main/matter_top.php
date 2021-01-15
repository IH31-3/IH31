<main>
    <h2>案件検索画面</h2>
    <form action="" method="get">
        <!-- <input type="hidden" name="page" value="matter_top"> buttonかhiddenかで保持するかも-->
        <ul>
            <li>
                指定なし<input type="radio" name="status" value="指定なし" checked="">
                督促中<input type="radio" name="status" value="督促中">
                案件詳細<input type="radio" name="status" value="キャンセル">
            </li>

            <li><input type="text" name="text" placeholder="検索文字列を入力"></input><button type="submit" name="page" value="matter_top">検索</button></li>
        </ul>
    </form>
    
    <br>

    <h2>検索結果</h2>
    <ul>
        <?php for($i=8; 0<$i; $i--): ?>
            <li><?= "ID:".$i ?></li>
            <li><?= "顧客名:"."木原天" ?></li>
            <li><?= "金額:"."10000000" ?></li>
            <li><?= "状態:"."入金待ち" ?></li>
            <li><?= "更新日時:"."2021/01/".$i." 12:30:00"?></li>
            <li><a href="http://127.0.0.1/IH31/admin/index.php?page=matter_detail&id=<?= $i ?>">詳細へ</a></li>

            <br>

        <?php endfor ?>
    </ul>

    <a href="http://127.0.0.1/IH31/admin/index.php">トップへ戻る</a>
</main>
<!-- main ここまで -->
