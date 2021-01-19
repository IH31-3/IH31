<main id="auction_top">
    <h2 class="mgn_top40 auto_center left border_bottom font_gray font_size_middle bold">AUCTION</h2>

    <!-- article繰り返す -->
    <article>
        <div class="status">
            <!-- <p class="before">あと（時間）でオークション開始</p> -->
            <!--開始前-->
            <p class="now">あと（時間）でオークション終了</p>
            <!--開始中-->
            <!-- <p class="after">オークション終了</p> -->
            <!--開始後-->
        </div>

        <section class="car_sumnail">
            <div class="left_content">
                <img src="./img/sample_car.png">
            </div>
            <div class="right_content">
                <h3 class="bold">HONDA MSX</h3>
                <div class="car_info">
                    <dl>
                        <dt class="back_gray center">年式</dt>
                        <dd>2013製</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">走行量</dt>
                        <dd>1万km未満</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">排気量</dt>
                        <dd>1500cc</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">車検</dt>
                        <dd>済み</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">修復歴</dt>
                        <dd>なし</dd>
                    </dl>
                </div>

                <div class="auction_info">
                    <dl class="font_pink">
                        <dt class="postit_pink">開始価格</dt>
                        <dd class="bold"><span class="big center">1800</span>万円</dd>
                    </dl>
                    <dl>
                        <dt class="postit_gray">オークション予定日時</dt>
                        <dd>01/19 14:00 〜 01/19 14:50</dd>
                    </dl>
                </div>

        </section>
        <div class="buttons">
            <p class="btn1"><a class=" view_center" href="<?= $auction_bid_url ?>"><span class="padding_img"><img src="./img/auction.png" width="20px"></span>このオークションに参加する</a></p>
            <!--開催中-->

            <p class="btn2"><span class="padding_img"><img src="./img/auction.png" width="20px"></span> このオークションに参加する</p>
            <!--開催中以外-->
        </div>


    </article>


    <!-- <h2><a href="http://127.0.0.1/IH31/customer/index.php"><?= $auction_name ?></a></h2>
    <ul>
        <?php foreach ($cars as $column) : ?>
            <li><?= $column ?></li>
        <?php endforeach ?>
    </ul> -->

    <a href="http://127.0.0.1/IH31/customer/index.php">トップへ戻る</a>
</main>
<!-- main ここまで -->