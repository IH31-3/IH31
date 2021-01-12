<main>
    <h2>出品登録</h2>
    <form action="" method="post">
    <input type="hidden" name="type" value="regist_exhibit">
        <ul>
            <li>車両番号：<input type="text" name="car_id"></li>
            <li>オークション：<select name="auction_id">
                <?php foreach($result as $key => $column): ?>
                    <option value= <?= $key ?>><?= $column ?></option>
                <?php endforeach ?>
            </select></li>
        </ul>
        <input type="submit" name="登録" value="登録する">
        
    </form>
    <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a>
</main>
<!-- main ここまで -->