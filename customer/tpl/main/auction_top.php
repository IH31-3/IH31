<main id="auction_top">
    <h2 class="mgn_top40 auto_center left border_bottom font_gray font_size_middle bold">AUCTION</h2>

    <!-- article繰り返す -->
    <article>
        <div class="status">
            <!-- <p class="before">あと（時間）でオークション開始</p> -->
            <!--開始前-->
            <p class="now"><?= $arr["end_hour"] ?>時<?= $arr["end_min"]?>分にオークション終了</p>
            <!--開始中-->
            <!-- <p class="after">オークション終了</p> -->
            <!--開始後-->
        </div>
       
        <!-- 繰り返し要素 -->
        <section class="car_sumnail">
            <div class="left_content">
                <img src="./img/sample_car.png">
            </div>
            <div class="right_content">
                <h3 class="bold"><?= $arr["maker"] ?><!-- (メーカー) --> <?= $arr["model_name"] ?><!-- (車種名) --></h3>
                <div class="car_info">
                    <dl>
                        <dt class="back_gray center">年式</dt>
                        <dd><?= $arr["model_year"] ?><!-- (年式) -->年</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">走行量</dt>
                        <dd><?= $arr["mileage"] ?><!-- (走行量) -->km</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">排気量</dt>
                        <dd><?= $arr["displacement"] ?><!-- (排気量) -->cc</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">車歴</dt>
                        <dd><?= $arr["car_history"] ?><!-- (車検) -->車</dd>
                    </dl>
                    <dl>
                        <dt class="back_gray center">修復歴</dt>
                        <dd><?= $arr["repair_history"] ?><!-- (修復歴) --></dd>
                    </dl>
                </div>

                <div class="auction_info">
                    <dl class="font_pink">
                        <dt class="postit_pink">開始価格</dt>
                        <dd class="bold"><span class="big center"><?= $arr["money"] ?><!-- (価格) --></span>万円</dd>
                    </dl>
                    <dl>
                        <dt class="postit_gray">オークション予定日時</dt>
                        <dd>開始：<?= $arr["start_date"] ?> <?= $arr["start_hour"] ?>時<?= $arr["start_min"] ?>分<!-- (開始日時) --><br>
                        終了：<?= $arr["start_date"] ?> <?= $arr["end_hour"] ?>時<?= $arr["end_min"]?>分<!-- (開始日時+10分) --></dd>
                    </dl>
                </div>
        </section>
        <!-- ここまで繰り返し要素 -->
        
        <div class="buttons">
            <a class=" view_center" href="<?= $auction_bid_url ?>">
                <p class="btn1"><span class="padding_img"><img src="./img/auction.png" width="20px"></span>このオークションに参加する</p>
            </a>
            <!--開催中-->

            <!-- <p class="btn2"><span class="padding_img"><img src="./img/auction.png" width="20px"></span> このオークションに参加する</p> -->
            <!--開催中以外-->
        </div>
        


    </article>


    <!-- <h2><a href="http://127.0.0.1/IH31/customer/index.php"><?= $auction_name ?></a></h2>
    <ul>
        <?php foreach ($cars as $column) : ?>
            <li><?= $column ?></li>
        <?php endforeach ?>
    </ul> -->

    <!-- <a href="http://127.0.0.1/IH31/customer/index.php">トップへ戻る</a> -->
</main>
<!-- main ここまで -->