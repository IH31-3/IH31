<main class="matter_top">
    <h1>案件検索</h1>
    <h2>案件一覧検索</h2>
    <form action="" method="get">
        <!-- <input type="hidden" name="page" value="matter_top"> buttonかhiddenかで保持するかも-->
        <ul class="select_button">
            <li>指定なし<input type="radio" name="status" value="指定なし" checked=""></li>
            <li>督促中<input type="radio" name="status" value="督促中"></li>
            <li>案件詳細<input type="radio" name="status" value="キャンセル"></li>
        </ul>
    <div class="search_columns">
        <ul>
            <li class="box_li">案件状況</li>
            <li class="input_li"><input type="text" name="text" placeholder="検索文字列を入力"></li>
        </ul>
        <ul>
            <li class="box_li">担当者名</li>
            <li class="input_li"><input type="text" name="text" placeholder="検索文字列を入力"></li>
        </ul>
        <ul>
            <li class="long_li"><button type="submit" name="page" value="matter_top">検索する</button></li>
        </ul>
    </div>
    </form>

    <h2>案件情報一覧</h2>
    <div class="loop_columns">
        <ul>
            <li><?= "担当者名" ?></li>
            <li><?= "顧客名" ?></li>
            <li><?= "車両番号" ?></li>
            <li><?= "状態" ?></li>
            <li><?= "金額" ?></li>
            <li><?= "" ?></li>
        </ul>
        <?php foreach($result as $column): ?>
            <ul>
                <li><?= $column["employee_name"] ?></li>
                <li><?= $column["client_name"] ?> 様</li>
                <li><?= $column["vehicle_no"] ?></li>
                <li><?= $column["status"] ?></li>
                <li><?= $column["money"] ?>万円</li>
                <li><a href="http://127.0.0.1/IH31/admin/index.php?page=matter_detail&id=<?= $column["matter_no"] ?>">詳細へ</a></li>
            </ul>
        <?php endforeach ?>
        </ul>
    </div>

    <!-- <a href="http://127.0.0.1/IH31/admin/index.php">トップへ戻る</a> -->

</main>
<!-- main ここまで -->
