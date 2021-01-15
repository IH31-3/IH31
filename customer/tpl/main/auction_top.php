<main>
    <h2>現在開催中のオークション</h2>
    <h2><a href="http://127.0.0.1/IH31/customer/index.php"><?= $auction_name ?></a></h2>
    <ul>
        <?php foreach($cars as $column): ?>
            <li><?= $column ?></li>
        <?php endforeach ?>
    </ul>

    <a href="http://127.0.0.1/IH31/customer/index.php">トップへ戻る</a>
</main>
<!-- main ここまで -->
