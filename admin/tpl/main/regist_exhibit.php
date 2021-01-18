<main class="regist_exhibit">
    <h2>出品登録</h2>
    <form action="" method="post">
    <input type="hidden" name="type" value="regist_exhibit">
    <div class="search_columns">
        <ul>
            <li>車両番号</li>
            <li><input type="text" name="car_id"></li>
        </ul>
        <ul>
            <li>オークション</li>
            <li>
            <select name="auction_id">
                <?php foreach($result as $key => $column): ?>
                    <option value= <?= $key ?>><?= $column ?></option>
                <?php endforeach ?>
            </select>
            </li>
        </ul>
        <ul>
            <li class="long_li"><button type="submit" name="page" value="done">登録する</button></li>
        </ul>
    </div>
    </form>
    <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a>
</main>
<!-- main ここまで -->