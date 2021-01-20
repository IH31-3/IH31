<main class="regist_car">
    <h1>車両登録</h1>
    <form action="" method="post" enctype = "multipart/form-data">
    <input type="hidden" name="type" value="regist_car">
    <h2> 写真を選択 </h2>
    <div class="search_columns">
        <ul>
            <li class="box_li">正面</li>
            <li class="image_li"><input type="file" value = "写真1" name="image1"></li>
        </ul>
        <ul>
            <li class="box_li">左側</li>
            <li class="image_li"><input type="file" value = "写真2" name="image2"></li>
        </ul>
        <ul>
            <li class="box_li">右側</li>
            <li class="image_li"><input type="file" value = "写真3" name="image3"></li>
        </ul>
        <ul>
            <li class="box_li">背面</li>
            <li class="image_li"><input type="file" value = "写真4" name="image4"></li>
        </ul>
    </div>
    <h2> 情報を入力 </h2>
    <div class="search_columns">
        <ul>
            <li class="box_li">車両番号</li>
            <li class="input_li"><input type="text" name="car_no"></li>
        </ul>
        <ul>
            <li class="box_li">車両年式</li>
            <li class="input_li"><input type="text" name="model_year">年</li>
        </ul>
        <ul>
            <li class="box_li">車種名</li>
            <li class="input_li"><input type="text" name="car_type"></li>
            <!-- <li>車両形状</li>
    <li><input type="text" name="car_form"></li> -->
        </ul>
        <ul>
            <li class="box_li">車両形状</li>
            <li class="input_li">
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
        </ul>
        <ul>
            <li class="box_li">排気量</li>
            <li class="input_li">
            <select name="car_displacement">
                <option value="1000">1000万km未満</option>
                <option value="1500">1000万km以上1500万km未満</option>
                <option value="2000">1500万km以上2000万km未満</option>
                <option value="3000">2000万km以上3000万km未満</option>
                <option value="4000">4000万km以上</option>
            </select>
            </li>
        </ul>
        <ul>
            <li class="box_li">モデル</li>
            <li class="input_li"><input type="text" name="car_model"></li>
        </ul>
        <ul>
            <li class="box_li">グレード</li>
            <li class="input_li"><input type="text" name="car_grade"></li>
            <!-- <li>メーカー</li>
            <li><input type="text" name="car_maker"></li> -->
        </ul>
        <ul>
            <li class="box_li">メーカー</li>
            <li class="input_li">
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
        </ul>
        <ul>
            <li class="box_li">燃料</li>
            <li class="input_li">
            <select name="car_fuel">
                <option value="1">レギュラー</option>
                <option value="2">ハイオク</option>
                <option value="3">ディーゼル</option>
            </select>
            </li>
        </ul>
        <ul>
            <li class="box_li">形式</li>
            <li class="input_li"><input type="text" name="car_format"></li>
            <!-- <li>定員</li>
            <li><input type="text" name="car_capacity"></li> -->
        </ul>
        <ul>
            <li class="box_li">定員</li>
            <li class="input_li">
            <select name="car_capacity">
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>人
            </li>
            <!-- <li>駆動方式</li>
            <li><input type="text" name="car_system"></li> -->
        </ul>
        <ul>
            <li class="box_li">駆動方式</li>
            <li class="input_li">
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
        </ul>
        <ul>
            <li class="box_li">走行距離</li>
            <li class="input_li">
            <select name="car_mileage">
                <option value="10000">1万km未満</option>
                <option value="15000">1万km以上1.5万km未満</option>
                <option value="20000">1.5万km以上2万km未満</option>
                <option value="30000">2万km以上3万km未満</option>
                <option value="40000">4万km以上</option>
            </select>
            </li>
        </ul>
        <ul>
            <li class="box_li">外装色</li>
            <li class="input_li"><input type="text" name="car_outer_color"></li>
        </ul>
        <ul>
            <li class="box_li">内装色</li>
            <li class="input_li"><input type="text" name="car_inner_color"></li>
        </ul>
        <ul>
            <li class="box_li">NOX期限</li>
            <li class="input_li"><input type="text" name="car_nox_limit"></li>
        </ul>
        <ul>
            <li class="box_li">検査期限</li>
            <li class="input_li"><input type="text" name="car_check_limit"></li>
        </ul>
        <ul>
            <li class="box_li">名変期限</li>
            <li class="input_li"><input type="text" name="car_namechange_limit"></li>
        </ul>
        <ul>
            <!-- <li>エアバッグ</li>
            <li><input type="text" name="car_airbag"></li> -->
            <li class="box_li">エアバッグ</li>
            <li class="input_li">
            <select name="car_airbag">
                <option value="シングル">シングル</option>
                <option value="ダブル">ダブル</option>
                <option value="なし">なし</option>
            </select>
            </li>
            <!-- <li>車歴</li>
            <li><input type="text" name="car_history"></li> -->
        </ul>
        <ul>
            <li class="box_li">車歴</li>
            <li class="input_li">
            <select name="car_history">
                <option value="事業用">事業用</option>
                <option value="自家用">自家用</option>
                <option value="レンタ">レンタ</option>
            </select>
            </li>
        </ul>
        <ul>
            <li class="box_li">類別区分番号</li>
            <li class="input_li"><input type="text" name="car_type_no"></li>
        </ul>
        <ul>
            <li class="box_li">修理歴</li>
            <li class="input_li"><input type="text" name="car_repair_history"></li>
        </ul>
        <ul>
            <li class="box_li">評価点</li>
            <!-- <li><input type="text" name="car_evaluation_point"></li> -->
            <li class="input_li">
            <select name="car_evaluation_point">
                <option value="S">S</option>
                <option value="6">6</option>
                <option value="5">5</option>
                <option value="4.5">4.5</option>
                <option value="4">4</option>
                <option value="3.5">3.5</option>
                <option value="3">3</option>
                <option value="2">2</option>
                <option value="1">1</option>
                <option value="R">R</option>
                <option value="現">現</option>
            </select>点
            </li>
        </ul>
        <ul>
            <li class="box_li">外装評価</li>
            <!-- <li><input type="text" name="car_outer_point"></li> -->
            <li class="input_li">
            <select name="car_outer_point">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>ランク
            </li>
        </ul>
        <ul>
            <li class="box_li">内装評価</li>
            <!-- <li><input type="text" name="car_inner_point"></li> -->
            <li class="input_li">
            <select name="car_inner_point">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>ランク
            </li>
        </ul>
        <ul>
            <li class="box_li">仕入金額</li>
            <li class="input_li">￥<input type="text" name="car_wholesale">万円</li>
        </ul>
        <ul>
            <li class="box_li">状態コメント</li>
            <li class="input_li"><input type="text" name="car_status_comment"></li>
        </ul>
        <ul>
            <li class="box_li">アピールポイント</li>
            <li class="input_li"><input type="text" name="car_appeal_comment"></li>
        </ul>
        <ul>
            <li class="long_li"><button type="submit" name="page" value="done">登録する</button></li>
        </ul>
    </div>
    </form>
    <!-- <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a> -->
</main>
<!-- main ここまで -->