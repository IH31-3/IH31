<main>
<ul>
    <li><img src="../pro3api/public/car_img/<?= $result[0]['vehicle_no'] ?>_0.jpg", height="200", width="200"></li>
    <li><img src="../pro3api/public/car_img/<?= $result[0]['vehicle_no'] ?>_1.jpg", height="200", width="200"></li>
    <li><img src="../pro3api/public/car_img/<?= $result[0]['vehicle_no'] ?>_2.jpg", height="200", width="200"></li>
    <li><img src="../pro3api/public/car_img/<?= $result[0]['vehicle_no'] ?>_3.jpg", height="200", width="200"></li>
</ul>
<ul>
    <!-- <li><?= "ID:".$id ?></li> -->
    <li><?= "顧客名:".$result[0]['client_name'] ?></li>
    <li><?= "従業員名:".$result[0]['employee_name'] ?></li>
    <li><?= "金額:".$result[0]['money'] ?></li>
    <li><?= "状態:".$result[0]['status'] ?></li>
</ul>

<ul>
    <li><?= "車両番号:".$result[0]['vehicle_no'] ?></li>
    <li><?= "車両年式:".$result[0]['model_year'] ?></li>
    <li><?= "車種名:".$result[0]['model_name'] ?></li>
    <li><?= "車両形状:".$result[0]['shape'] ?></li>
    <li><?= "排気量:".$result[0]['displacement'] ?></li>
    <li><?= "モデル:".$result[0]['model'] ?></li>
    <li><?= "グレード:".$result[0]['grade'] ?></li>
    <li><?= "メーカー:".$result[0]['maker'] ?></li>
    <li><?= "燃料:".$result[0]['fuel'] ?></li>
    <li><?= "形式:".$result[0]['vehicle_model'] ?></li>
    <li><?= "定員:".$result[0]['capacity'] ?></li>
    <li><?= "駆動方式:".$result[0]['drive_system'] ?></li>
    <li><?= "走行距離:".$result[0]['mileage'] ?></li>
    <li><?= "外装色:".$result[0]['exterior_color'] ?></li>
    <li><?= "内装色:".$result[0]['Interior_color'] ?></li>
    <li><?= "NOX期限:".$result[0]['nox_deadline'] ?></li>
    <li><?= "検査期限:".$result[0]['Inspection_deadline'] ?></li>
    <li><?= "名変期限:".$result[0]['name_change_deadline'] ?></li>
    <li><?= "エアバッグ:".$result[0]['airbag'] ?></li>
    <li><?= "車歴:".$result[0]['car_history'] ?></li>
    <li><?= "類別区分番号:".$result[0]['classification_classification_number'] ?></li>
    <li><?= "修理歴:".$result[0]['repair_history'] ?></li>
    <li><?= "評価点:".$result[0]['evaluation_points'] ?></li>
    <li><?= "外装評価:".$result[0]['exterior_evaluation'] ?></li>
    <li><?= "内装評価:".$result[0]['interior_evaluation'] ?></li>
    <li><?= "仕入金額:".$result[0]['purchase_amount'] ?></li>
    <li><?= "状態コメント:".$result[0]['situation_comment'] ?></li>
    <li><?= "アピールポイント:".$result[0]['appeal_point'] ?></li>
</ul>

<ul>
    <li><a href="">督促状態を更新</a></li>
    <li><a href="">この案件をキャンセル</a></li>
    <li><a href="http://127.0.0.1/IH31/admin/index.php?page=matter_top">案件検索へ戻る</a></li>
</ul>
</main>