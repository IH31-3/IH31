<main class="regist_exhibit">
    <h1>出品登録</h1>
    <form action="" method="post">
    <input type="hidden" name="type" value="regist_exhibit">
    <div class="search_columns">
        <ul>
            <li class="box_li">車両番号</li>
            <li class="input_li"><input type="text" name="car_id"></li>
        </ul>
        <ul>
            <li class="box_li">オークション</li>
            <li class="input_li">
            <select name="auction_id">
                <?php foreach($result as $column): ?>
                    <option value="<?= $column["auction_no"] ?>"><?= $column["auction_name"] ?></option>
                <?php endforeach ?>
            </select>
            </li>
        </ul>
        <ul>
            <li class="long_li"><button type="submit" name="page" value="done">登録する</button></li>
        </ul>
    </div>
    </form>
    <!-- <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a> -->
</main>
<!-- main ここまで -->