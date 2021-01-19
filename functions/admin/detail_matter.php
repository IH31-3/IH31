<?php 
function search_matter_detail(){
    $matterId = (int)$_GET['id'];
    $imgDir = "../pro3api/car_img/";
    $sqlResult = [];
    $sql = "SELECT client.client_name,employee.employee_name,matter.money,matter.status,vehicle.vehicle_no,vehicle.model_year,vehicle.model_name,vehicle.shape,vehicle.displacement,vehicle.model,vehicle.grade,vehicle.maker,vehicle.fuel,vehicle.vehicle_model,vehicle.capacity,vehicle.drive_system,vehicle.mileage,vehicle.exterior_color,vehicle.Interior_color,vehicle.nox_deadline,vehicle.Inspection_deadline,vehicle.name_change_deadline,vehicle.airbag,vehicle.car_history,vehicle.classification_classification_number,vehicle.repair_history,vehicle.repair_history,vehicle.evaluation_points,vehicle.exterior_evaluation,vehicle.interior_evaluation,vehicle.purchase_amount,vehicle.situation_comment,vehicle.appeal_point 
    FROM matter 
    INNER JOIN client ON matter.client_no = client.client_no 
    INNER JOIN employee ON matter.employee_no = employee.employee_no 
    INNER JOIN vehicle ON matter.vehicle_no = vehicle.vehicle_no
    WHERE matter.matter_no = ?";

    //GETで取得したIDを用いてデータ取得
    $cn = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,DB_NAME);
    $cn -> set_charset('utf8');

    $stmt = $cn -> prepare($sql);
    $stmt -> bind_param("i",$matterId);
    $stmt -> execute();

    $stmt -> bind_result($sqlResult[0],$sqlResult[1],$sqlResult[2],$sqlResult[3],$sqlResult[4],$sqlResult[5],$sqlResult[6],$sqlResult[7],$sqlResult[8],$sqlResult[9],$sqlResult[10],$sqlResult[11],$sqlResult[12],$sqlResult[13],$sqlResult[14],$sqlResult[15],$sqlResult[16],$sqlResult[17],$sqlResult[18],$sqlResult[19],$sqlResult[20],$sqlResult[21],$sqlResult[22],$sqlResult[23],$sqlResult[24],$sqlResult[25],$sqlResult[26],$sqlResult[27],$sqlResult[28],$sqlResult[29],$sqlResult[30],$sqlResult[31],$sqlResult[32]);
    $stmt -> fetch();
    $result = array(
       $sqlResult[0],
       $sqlResult[1],
       $sqlResult[2],
       $sqlResult[3],
       $sqlResult[4],
       $sqlResult[5],
       $sqlResult[6],
       $sqlResult[7],
       $sqlResult[8],
       $sqlResult[9],
       $sqlResult[10],
       $sqlResult[11],
       $sqlResult[12],
       $sqlResult[13],
       $sqlResult[14],
       $sqlResult[15],
       $sqlResult[16],
       $sqlResult[17],
       $sqlResult[18],
       $sqlResult[19],
       $sqlResult[20],
       $sqlResult[21],
       $sqlResult[22],
       $sqlResult[23],
       $sqlResult[24],
       $sqlResult[25],
       $sqlResult[26],
       $sqlResult[27],
       $sqlResult[28],
       $sqlResult[29],
       $sqlResult[30],
       $sqlResult[31],
       $sqlResult[32],
    );
    //画像URL取得
    array_unshift(
        $result,
        $matterId
    );
    
    return $result;
}