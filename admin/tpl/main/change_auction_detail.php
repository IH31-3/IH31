<main class="change_auction_detail">
<h1>オークション詳細</h1>
<h2>オークション情報一覧</h2>
    <div class="loop_columns">
        <ul>
            <li><?= "出品番号" ?></li>
            <li><?= "車両番号" ?></li>
            <li><?= "顧客名" ?></li>
            <li><?= "金額" ?></li>
            <li><?= "" ?></li>
        </ul>
        <?php foreach($result as $column): ?>
            <ul>
                <?php if($column["client_name"] == NULL){ ?>
                    <li><?= $column["listing_no"] ?></li>
                    <li><?= $column["vehicle_no"] ?></li>
                    <li><?= "落札者なし" ?></li>
                    <li><?= "落札者なし" ?></li>
                    <li></li>
                <?php }else{ ?>
                    <li><?= $column["listing_no"] ?></li>
                    <li><?= $column["vehicle_no"] ?></li>
                    <li><?= $column["client_name"] ?>様</li>
                    <li><?= $column["money"] ?>万円</li>
                    <li><a href="http://127.0.0.1/IH31/admin/index.php?page=regist_matter&vehicle_no=<?= $column["vehicle_no"] ?>&client_no=<?= $column["client_no"] ?>&money=<?= $column["money"] ?>">案件作成</a></li>
                <?php } ?>
            </ul>
        <?php endforeach ?>
        </ul>
    </div>
</main>
<!-- main ここまで -->