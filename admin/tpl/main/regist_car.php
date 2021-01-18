<main class="regist_car">
    <h2>車両登録</h2>
    <form action="" method="post" enctype = "multipart/form-data">
    <div class="search_columns">
    <input type="hidden" name="type" value="regist_car">
        <br>
        <h3> 写真を選択 </h3>
        <ul>
            <li>正面</li>
            <li><input type="file" value = "写真1" name="image1"></li>
            <li>左側</li>
            <li><input type="file" value = "写真2" name="image2"></li>
            <li>右側</li>
            <li><input type="file" value = "写真3" name="image3"></li>
            <li>背面</li>
            <li><input type="file" value = "写真4" name="image4"></li>
        </ul>

        <br>
        <h3> 情報を入力 </h3>
        <ul>
            <li>車両番号</li>
            <li><input type="text" name="car_no"></li>
            <li>車両年式</li>
            <li><input type="text" name="model_year">年</li>
            <li>車種名</li>
            <li><input type="text" name="car_type"></li>
            <!-- <li>車両形状</li>
    <li><input type="text" name="car_form"></li> -->
            <li>
            車両形状：
            <select name="car_form">
                <option value="トラック">T：トラック</option>
                <option value="バン">V：バン</option>
                <option value="ハッチバック">HB：ハッチバック</option>
                <option value="クーペ">CP：クーペ</option>
                <option value="ハードトップ">HT：ハードトップ</option>
                <option value="セダン">SD：セダン</option>
                <option value="ワゴン">W：ワゴン</option>
                <option value="ステーションワゴン">SW：ステーションワゴン</option>
            </select>
            </li>
            <!-- <li>排気量</li>
    <li><input type="text" name="car_displacement"></li> -->
            <li>
            排気量：
            <select name="car_displacement">
                <option value="1000">1000cc未満</option>
                <option value="1500">1000cc以上1500cc未満</option>
                <option value="2000">1500cc以上2000cc未満</option>
                <option value="3000">2000cc以上3000cc未満</option>
                <option value="4000">4000cc以上</option>
            </select>
            </li>
            <li>モデル</li>
            <li><input type="text" name="car_model"></li>
            <li>グレード</li>
            <li><input type="text" name="car_grade"></li>
            <!-- <li>メーカー</li>
            <li><input type="text" name="car_maker"></li> -->
            <li>メーカー</li>
            <li>
            <select name="car_maker">
                <option value="レクサス">レクサス</option>
                <option value="トヨタ">トヨタ</option>
                <option value="日産">日産</option>
                <option value="ホンダ">ホンダ</option>
                <option value="マツダ">マツダ</option>
                <option value="スバル">スバル</option>
                <option value="スズキ">スズキ</option>
                <option value="三菱">三菱</option>
                <option value="ダイハツ">ダイハツ</option>
                <option value="いすゞ">いすゞ</option>
                <option value="光岡自動車">光岡自動車</option>
                <option value="トミーカイラ">トミーカイラ</option>
                <option value="ゼロスポーツ">ゼロスポーツ</option>
                <option value="日野自動車">日野自動車</option>
                <option value="ＵＤトラックス">ＵＤトラックス</option>
                <option value="三菱ふそう">三菱ふそう</option>
                <option value="GLM">GLM</option>
                <option value="国外車">国外車</option>
            </select>
            </li>
            <!-- <li>燃料</li>
            <li><input type="text" name="car_fuel"></li> -->
            <li>燃料</li>
            <li>
            <select name="car_fuel">
                <option value="レギュラー">レギュラー</option>
                <option value="ハイオク">ハイオク</option>
                <option value="ディーゼル">ディーゼル</option>
            </select>
            </li>
            <li>形式</li>
            <li><input type="text" name="car_format"></li>
            <!-- <li>定員</li>
            <li><input type="text" name="car_capacity"></li> -->
            <li>定員</li>
            <li>
            <select name="car_capacity">
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>人
            </li>
            <!-- <li>駆動方式</li>
            <li><input type="text" name="car_system"></li> -->
            <li>駆動方式</li>
            <li>
            <select name="car_system">
                <option value="FF">FF/フロントエンジン・フロントドライブ</option>
                <option value="FR">FR/フロントエンジン・リアドライブ</option>
                <option value="4WD">4WD/四輪駆動</option>
                <option value="MR">MR/ミッションエンジン・リアドライブ</option>
                <option value="RR">RR/リアエンジン・リアドライブ</option>
            </select>式
            </li>
            <!-- <li>走行距離</li>
            <li><input type="text" name="car_mileage"></li> -->
            <!-- 走行距離は1年＝1万kmを目安に -->
            <li>走行距離</li>
            <li>
            <select name="car_mileage">
                <option></option>
            </select>
            </li>
            <li>外装色</li>
            <li><input type="text" name="car_outer_color"></li>
            <li>内装色</li>
            <li><input type="text" name="car_inner_color"></li>
            <li>NOX期限</li>
            <li><input type="text" name="car_nox_limit"></li>
            <li>検査期限</li>
            <li><input type="text" name="car_check_limit"></li>
            <li>名変期限</li>
            <li><input type="text" name="car_namechange_limit"></li>
            <!-- <li>エアバッグ</li>
            <li><input type="text" name="car_airbag"></li> -->
            <li>エアバッグ</li>
            <li>
            <select name="car_airbag">
                <option value="シングル">シングル</option>
                <option value="ダブル">ダブル</option>
                <option value="なし">なし</option>
            </select>
            </li>
            <!-- <li>車歴</li>
            <li><input type="text" name="car_history"></li> -->
            <li>車歴</li>
            <li>
            <select name="car_history">
                <option value="事業用">事業用</option>
                <option value="自家用">自家用</option>
                <option value="レンタ">レンタ</option>
            </select>
            </li>
            <li>類別区分番号</li>
            <li><input type="text" name="car_type_no"></li>
            <li>修理歴</li>
            <li><input type="textbox" name="car_repair_history"></li>
            <li>評価点</li>
            <li><input type="text" name="car_evaluation_point"></li>
            <li>外装評価</li>
            <li><input type="text" name="car_outer_point"></li>
            <li>内装評価</li>
            <li><input type="text" name="car_inner_point"></li>
            <li>仕入金額</li>
            <li><input type="text" name="car_wholesale"></li>
            <li>状態コメント</li>
            <li><input type="textbox" name="car_status_comment"></li>
            <li>アピールポイント</li>
            <li><input type="textbox" name="car_appeal_comment"></li>
        </ul>
        <ul>
            <li class="long_li"><button type="submit" name="page" value="done">登録する</button></li>
        </ul>
    </div>
    </form>
    <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a>
</main>
<!-- main ここまで -->