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

            <li><input type="text" name="text" placeholder="検索文字列を入力"></input></li>
            <li><input type="text" name="text" placeholder="従業員名を入力"></input></li>
            <li><button type="submit" name="page" value="matter_top">検索</button></li>
        </ul>
    </form>
    
    <br>

    <h2>検索結果</h2>

    <?php foreach($result as $column): ?>
        <ul>
            <li><?= "担当者名:".$column["employee_name"] ?></li>
            <li><?= "顧客名:".$column["client_name"] ?></li>
            <li><?= "車両番号:".$column["vehicle_no"] ?></li>
            <li><?= "状態:".$column["status"] ?></li>
            <li><?= "金額:".$column["money"] ?></li>
            <li><a href="http://127.0.0.1/IH31/admin/index.php?page=matter_detail&id=<?= $column["matter_no"] ?>">詳細へ</a></li>
        </ul>

        <br>

    <?php endforeach ?>

    <a href="http://127.0.0.1/IH31/admin/index.php">トップへ戻る</a>
</main>
<!-- main ここまで -->
