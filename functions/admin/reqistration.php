<php

//従業員登録
$cn = mysqli_connect(HOSTNAME, MYSQL_USER, MYSQL_PASS, DB_NAME);
mysqli_set_charset($cn, 'utf8');
$sql = "INSERT INTO employee(employee_no,employee_name,password)VALUES(" . $id . ",'" . $name . "','" . $passwd . "');";
mysqli_query($cn, $sql);
mysqli_close($cn);

//車両登録
$cn = mysqli_connect(HOSTNAME, MYSQL_USER, MYSQL_PASS, DB_NAME);
mysqli_set_charset($cn, 'utf8');
$sql = "INSERT INTO vehicle(employee_no,model_year,model_name,shape,displacement,model,grade,maker,fuel,vehicle_model,capacity,drive_system,mileage,exterior_color,Interior_color,nox_deadline,Inspection_deadline,name_change_deadline,airbag,car_history,classification_classification_number,repair_history,evaluation_points,exterior_evaluation,interior_evaluation,purchase_amount,situation_comment,appeal_point)
VALUES(" . $car_no . ",'" . $model_year . "','" . $car_type . "','" . $car_form . "','" . $car_displacement . "','" . $car_model . "','" . $car_grade . "','" . $car_maker . "','" . $car_fuel . "','" . $car_format . "','" . $car_capacity . "','" . $car_system . "','" . $car_mileage . "','" . $car_outer_color . "','" . $car_inner_color . "','" . $car_nox_limit . "','" . $car_check_limit . "','" . $car_namechange_limit . "',
'" . $car_airbag . "','" . $car_history . "','" . $car_type_no . "','" . $car_repair_history . "','" . $car_evaluation_point . "','" . $car_outer_point . "','" . $car_inner_point . "','" . $car_wholesale . "','" . $car_status_comment . "','" . $car_appeal_comment . "');";
mysqli_query($cn, $sql);
mysqli_close($cn);

//出品登録
$cn = mysqli_connect(HOSTNAME, MYSQL_USER, MYSQL_PASS, DB_NAME);
mysqli_set_charset($cn, 'utf8');
$sql = "INSERT INTO listing(vehicle_no,auction_no)VALUES(" . $car_id . ",'" . $auction_id . "');";
mysqli_query($cn, $sql);
mysqli_close($cn);

//案件登録
$cn = mysqli_connect(HOSTNAME, MYSQL_USER, MYSQL_PASS, DB_NAME);
mysqli_set_charset($cn, 'utf8');
$sql = "INSERT INTO matter(status,client_no,employee_no,vehicle_no,money)VALUES('" . $customer_id . "','" . $employee_id . "','" . $car_id . "','" . $car_price . "','" . $car_status . "');";
mysqli_query($cn, $sql);
mysqli_close($cn);

//オークション登録
$cn = mysqli_connect(HOSTNAME, MYSQL_USER, MYSQL_PASS, DB_NAME);
mysqli_set_charset($cn, 'utf8');
$sql = "INSERT INTO auction(auction_no,date,explanation,auction_name)VALUES(" . $auction_id . ",'" . $auction_date . "','" . $auction_description . "','" . $auction_name . "');";
mysqli_query($cn, $sql);
mysqli_close($cn);