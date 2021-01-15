<main id="auction_top">
    <h2>AUCTION</h2>
    <h2>現在開催中のオークション</h2>

    <!-- article繰り返す -->
    <article>
        <div class="status">
            <p class="before">あと（時間）でオークション開始</p>
            <!--開始前-->
            <p class="now">あと（時間）でオークション終了</p>
            <!--開始中-->
            <p class="after">オークション終了</p>
            <!--開始後-->
        </div>
        <section class="car_sumnail">
            <p><img src=""></p>
            <h3>(メーカー)(車種名)</h3>
            <dl>
                <dt>年式</dt>
                <dd>(年式)</dd>
                <dt>走行量</dt>
                <dd>(走行量)</dd>
                <dt>排気量</dt>
                <dd>(排気量)</dd>
                <dt>車検</dt>
                <dd>(車検)</dd>
                <dt>修復歴</dt>
                <dd>(修復歴)</dd>
            </dl>
            <dl>
                <dt>開始価格</dt>
                <dd>(開始価格価格)万円</dd>
                <dt>オークション予定日時</dt>
                <dd>(開始日時)〜(開始日時+10分)</dd>
            </dl>
        </section>

        <p class="enter_button pink"><a href="">この車両に入札する</a></p><!--開催中-->
        <p class="enter_button">この車両に入札する</p><!--開催中以外-->


    </article>


    <h2><a href="http://127.0.0.1/IH31/customer/index.php"><?= $auction_name ?></a></h2>
    <ul>
        <?php foreach ($cars as $column) : ?>
            <li><?= $column ?></li>
        <?php endforeach ?>
    </ul>

    <a href="http://127.0.0.1/IH31/customer/index.php">トップへ戻る</a>
</main>
<!-- main ここまで -->
