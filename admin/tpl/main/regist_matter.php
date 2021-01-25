<main class="regist_matter">
    <h1>案件登録</h1>
    <form action="" method="post">
    <input type="hidden" name="type" value="regist_matter">
    <div class="search_columns">
        <ul>
            <li class="box_li">顧客id</li>
            <li class="input_li"><input type="text" name="customer_id" value="<?= $_GET["client_no"] ?>"></li>
        </ul>
        <ul>
            <li class="box_li">車両番号</li>
            <li class="input_li"><input type="text" name="car_id"  value="<?= $_GET["vehicle_no"] ?>"></li>
        </ul>
        <ul>
            <li class="box_li">担当従業員</li>
            <li class="input_li">
                <select name="employee_id">
                    <?php foreach( $result as $column): ?>
                    <option value="<?= $column["employee_no"] ?>"><?= $column["employee_no"] . "：" . $column["employee_name"] ?></option>
                    <?php endforeach ?>
                </select>
            </li>
        </ul>
        <ul>
            <li class="box_li">金額</li>
            <li class="input_li"><input type="text" name="car_price"  value="<?= $_GET["money"] ?>">万円</li>
        </ul>
        <!-- <ul>
            <li class="box_li">ステータス</li>
            <li class="input_li"><input type="text" name="car_status"></li>
        </ul> -->
        <ul>
            <li class="long_li"><button type="submit" name="page" value="done">登録する</button></li>
        </ul>
    </div>        
    </form>
    <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a>
</main>
<!-- main ここまで -->