<main class="change_auction">
    <h1>オークション管理</h1>
    <h2>オークション検索</h2>
    <form action="" method="get">
        <!-- <input type="hidden" name="page" value="matter_top"> buttonかhiddenかで保持するかも-->
        <ul class="select_button">
            <li>指定なし<input type="radio" name="status" value="指定なし" checked=""></li>
            <li>督促中<input type="radio" name="status" value="督促中"></li>
            <li>オークション詳細<input type="radio" name="status" value="キャンセル"></li>
        </ul>
    <div class="search_columns">
        <ul>
            <li class="box_li">オークション状況</li>
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

    <h2>オークション一覧</h2>
    <div class="loop_columns">
        <ul>
            <li><?= "オークション名" ?></li>
            <li><?= "出品台数" ?></li>
            <li><?= "開催日" ?></li>
            <li><?= "" ?></li>
        </ul>
        <?php foreach($result as $column): ?>
            <ul>
                <li><?= $column["auction_name"] ?></li>
                <li><?= $column["auction_car_count"] ?> 台</li>
                <li><?= $column["auction_date"] ?></li>
                <li><a href="http://127.0.0.1/IH31/admin/index.php?page=change_auction_detail&id=<?= $column["auction_no"] ?>">詳細へ</a></li>
            </ul>
        <?php endforeach ?>
        </ul>
    </div>

    <!-- <a href="http://127.0.0.1/IH31/admin/index.php">トップへ戻る</a> -->
</main>
<!-- main ここまで -->
