<main>
    <h2>車両登録</h2>
    <form action="" method="post" enctype = "multipart/form-data">
    <input type="hidden" name="type" value="regist_car">
        <br>
        <h3> 写真を選択 </h3>
        <ul>
            <li>正面：<input type="file" value = "写真1" name="image1"></li>
            <li>左側：<input type="file" value = "写真2" name="image2"></li>
            <li>右側：<input type="file" value = "写真3" name="image3"></li>
            <li>背面：<input type="file" value = "写真4" name="image4"></li>
        </ul>

        <br>
        <h3> 情報を入力 </h3>
        <ul>
            <li>車両番号：<input type="text" name="car_no"></li>
            <li>車両年式：<input type="text" name="model_year">年</li>
            <li>車種名：<input type="text" name="car_type"></li>
            <!-- <li>車両形状：<input type="text" name="car_form"></li> -->
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
            <!-- <li>排気量：<input type="text" name="car_displacement"></li> -->
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
            <li>モデル：<input type="text" name="car_model"></li>
            <li>グレード：<input type="text" name="car_grade"></li>
            <li>メーカー：<input type="text" name="car_maker"></li>
            <li>燃料：<input type="text" name="car_fuel"></li>
            <li>形式：<input type="text" name="car_format"></li>
            <li>定員：<input type="text" name="car_capacity"></li>
            <li>駆動方式：<input type="text" name="car_system"></li>
            <li>走行距離：<input type="text" name="car_mileage"></li>
            <li>外装色：<input type="text" name="car_outer_color"></li>
            <li>内装色：<input type="text" name="car_inner_color"></li>
            <li>NOX期限：<input type="text" name="car_nox_limit"></li>
            <li>検査期限：<input type="text" name="car_check_limit"></li>
            <li>名変期限：<input type="text" name="car_namechange_limit"></li>
            <li>エアバッグ：<input type="text" name="car_airbag"></li>
            <li>車歴：<input type="text" name="car_history"></li>
            <li>類別区分番号：<input type="text" name="car_type_no"></li>
            <li>修理歴：<input type="textbox" name="car_repair_history"></li>
            <li>評価点：<input type="text" name="car_evaluation_point"></li>
            <li>外装評価：<input type="text" name="car_outer_point"></li>
            <li>内装評価：<input type="text" name="car_inner_point"></li>
            <li>仕入金額：<input type="text" name="car_wholesale"></li>
            <li>状態コメント：<input type="textbox" name="car_status_comment"></li>
            <li>アピールポイント：<input type="textbox" name="car_appeal_comment"></li>
        </ul>
    <input type="submit" name="登録" value="登録する">
        
    </form>
    <a href="http://127.0.0.1/IH31/admin/index.php?page=regist_top">登録トップへ戻る</a>
</main>
<!-- main ここまで -->