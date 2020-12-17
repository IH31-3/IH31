<main>
<main>
    <h2>車両情報</h2>
    <form name="" method="post">
        <table>
            <tr>
                <label>
                    <td>車両番号</td>
                    <td><input type="text" name="vNum" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>メーカー</td>
                    <td><input type="text" name="maker" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>車種名</td>
                    <td><input type="text" name="vCate" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>形状</td>
                    <td>
                        <select name="vShape">
                            <option value="T">トラック</option>
                            <option value="V">バン</option>
                            <option value="HB">ハッチバック</option>
                            <option value="CP">クーペ</option>
                            <option value="HT">ハードトップ</option>
                            <option value="SD">セダン</option>
                            <option value="W">ワゴン</option>
                            <option value="SW">ステーションワゴン</option>

                        </select>
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td> 年 式</td>
                    <td><input type="text" name="mYear" value="" required>  年 <input type="text" name="mMonth" value=""
                            required> 月 
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>排気量</td>
                    <td><input type="text" name="disp" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>モデル</td>
                    <td><input type="text" name="model" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>グレード</td>
                    <td><input type="text" name="grade" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>燃料</td>
                    <td>
                        G <input type="radio" name="fuel" value="g">
                        D <input type="radio" name="fuel" value="d">
                    </td>
                </label>

            </tr>
            <tr>
                <label>
                    <td>型式</td>
                    <td><input type="text" name="model1" value="" required> - <input type="text" name="model2" value=""
                            required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>定員</td>
                    <td><input type="text" name="capa" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>駆動方式</td>
                    <td>
                        2WD<input type="radio" name="dType" value="2wd" required>
                        4WD<input type="radio" name="dType" value="4wd" required>
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>走行距離</td>
                    <td><input type="text" name="mile" value="" required> km</td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>外装色</td>
                    <td><textarea name="exColor"></textarea></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>内装色</td>
                    <td><textarea name="inColor"></textarea></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>Nox期限</td>
                    <td><input type="text" name="nExp1" value="" required> 年 <input type="text" name="nExp2" value=""
                            required>  月 <input type="text" name="nExp3" value="" required> 日 </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>検査期限</td>
                    <td><input type="text" name="inDead1" value="" required> 年 <input type="text" name="inDead2" value=""
                            required> 月 <input type="text" name="inDead3" value="" required>  日  </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>名変期限</td>
                    <td><input type="text" name="ncDead1" value="" required> 年 <input type="text" name="ncDead2" value=""
                            required> 月 <input type="text" name="ncDead3" value="" required> 日 </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>エアバッグ</td>
                    <td>シングル <input type="radio" name="aBag" value="s" required> ダブル <input type="radio" name="aBag"
                            value="d" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>車歴</td>
                    <td>自家用<input type="radio" name="vHis" value="a" required> 事業用 <input type="radio" name="vHis"
                            value="b" required> レンタカー <input type="radio" name="vHis" value="c" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>種別区分番号</td>
                    <td><input type="text" name="cateNum" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>修理歴</td>
                    <td>
                        <textarea name="fix"></textarea>
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>評価点</td>
                    <td>
                        <select name="evPoint">
                            <option value="s">S</option>
                            <option value="6">6</option>
                            <option value="5">5</option>
                            <option value="4.5">4.5</option>
                            <option value="4">4</option>
                            <option value="3.5">3.5</option>
                            <option value="3">3</option>
                            <option value="2">2</option>
                            <option value="1">1</option>
                            <option value="R">R</option>
                        </select>
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>外装評価</td>
                    <td>
                        <select name="exPoint">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>

                        </select>
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>内装評価</td>
                    <td>
                        <select name="exPoint">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>

                        </select>
                    </td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>仕入金額</td>
                    <td><input type="text" name="defMoney" value="" required></td>
                </label>
            </tr>
            <tr>
                <label>
                    <td>状態コメント</td>
                    <td>
                        <textarea name="stComment"></textarea>
                    </td>

                </label>
            </tr>
            <tr>
                <label>
                    <td>アピールポイント</td>
                    <td>
                        <textarea name="apPoint"></textarea>
                    </td>
                </label>
            </tr>

        </table>

        <input type="submit" name="button" value="次へ">

    </form>

</main>
</main>
<!-- main ここまで -->
