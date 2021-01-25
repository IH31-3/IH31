<main id="history_top">
    <div id="main_image">
        <img src="./img/mainVisual.png">
    </div>

    <article>
        <p class="center bold bottom30"><img src="./img/HALMOTOR.png" width="280px">　とは</p>
        <p class="center lheight">大阪で展開している中古車販売企業です。<br>
            土曜日に当サイトでオークションを行っています！<br>
            契約に必要な書類もお車も、すべてご自宅にお届けします！<br>
            とっても便利な中古車オークションサイトです。</p>
        <div id="contentsA">
            <section class="contA">
                <dl>
                    <dt class="back_pink">STEP 01</dt>
                    <dd><img src="./img/ex1.png"></dd>
                    <dd class="font_blue">ネットで入札</dd>
                    <dd>簡単・スピーディ！<br>
                        どこにいても入札可能！</dd>
                </dl>
            </section>

            <section class="contA">
                <dl>
                    <dt class="back_pink">STEP 02</dt>
                    <dd><img src="./img/ex2.png"></dd>
                    <dd class="font_blue">ネットで取引情報チェック</dd>
                    <dd>ネットで注文状況チェック！<br>
                        いつでも安心！</dd>
                </dl>
            </section>

            <section class="contA">
                <dl>
                    <dt class="back_pink">STEP 03</dt>
                    <dd><img src="./img/ex3.png"></dd>
                    <dd class="font_blue">自宅に届く</dd>
                    <dd>必要な書類からお車まで、<br>
                        すべてご自宅にお届けします！</dd>
                </dl>
            </section>

        </div>

        <p class="out_line"><a class="btn1 view_center" href=""><span class="padding_img"><img src="./img/auction.png" width="20px"></span> オークションに参加する</a></p>
    </article>

    <article>
        <h2 class="left border_bottom"><span class="back_pink">THIS WEEK</span>　　　<span class="font_gray font_size_middle">AUCTION LINEUP</span> <span class="pink_font"></span></h2>

        <!-- 繰り返し要素 -->
        <a href="http://127.0.0.1/IH31/customer/index.php?page=auction_top">
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
        </a>

        <!-- ここまで繰り返し要素 -->

    </article>

    <!-- <a href="http://127.0.0.1/IH31/customer/index.php?page=index_top">トップへ戻る</a> -->
</main>
<!-- main ここまで -->