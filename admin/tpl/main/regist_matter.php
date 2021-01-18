<main class="regist_matter">
    <h2>案件登録</h2>
    <form action="" method="post">
    <input type="hidden" name="type" value="regist_matter">
    <div class="search_columns">
        <ul>
            <li>顧客id</li>
            <li><input type="text" name="customer_id"></li>
        </ul>
        <ul>
            <li>担当従業員id</li>
            <li><input type="text" name="employee_id"></li>
        </ul>
        <ul>
            <li>車両番号</li>
            <li><input type="text" name="car_id"></li>
        </ul>
        <ul>
            <li>金額</li>
            <li><input type="text" name="car_price"></li>
        </ul>
        <ul>
            <li>ステータス</li>
            <li><input type="text" name="car_status"></li>
        </ul>
        <ul>
            <li class="long_li"><button type="submit" name="page" value="done">登録する</button></li>
        </ul>
    </div>        
    </form>
    <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a>
</main>
<!-- main ここまで -->