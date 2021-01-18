<?php
//案件検索
function search_matter(){
   $result = [[]];

   $cn = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,DB_NAME);
   $cn -> set_charset('utf8');

   //初回アクセス時には指定なしでの検索
   if(!empty($_GET['status'])){
      //ステータス検索
      $status = $_GET['status'];
      $sql = "SELECT matter.matter_no, matter.status,client.client_name,employee.employee_name,matter.vehicle_no,matter.money FROM matter JOIN client ON matter.client_no = client.client_no JOIN employee ON employee.employee_no = matter.employee_no WHERE status = ?";
      //ワード検索
      if(!empty($_GET['text'])){
         $text = "%".$_GET['text']."%";
         $sql .= "AND employee.employee_name LIKE ?";
         $stmt = $cn -> prepare($sql);
         $stmt -> bind_param("ss",$status,$text);
      }
      else{
         $stmt = $cn -> prepare($sql);
         $stmt -> bind_param("s",$status);
      }
   }
   else{
      //ステータス検索指定なし
      $sql = "SELECT matter.matter_no, matter.status,client.client_name,employee.employee_name,matter.vehicle_no,matter.money FROM matter JOIN client ON matter.client_no = client.client_no JOIN employee ON employee.employee_no = matter.employee_no";
      //ワード検索
      if(!empty($_GET['text'])){
         $text = "%".$_GET['text']."%";
         $sql .= " WHERE employee.employee_name LIKE ?";
         $stmt = $cn -> prepare($sql);
         $stmt -> bind_param("s",$text);
      }
      else{
         $stmt = $cn -> prepare($sql);
      }
   }
   $stmt -> execute();
   $stmt -> bind_result($matter_no,$status,$client_name,$employee_name,$vehicle_no,$money);
   for($i = 0;$stmt -> fetch();$i++){
      $result[$i] = array(
         'matter_no' => $matter_no,
         'status' => $status,
         'client_name' => $client_name,
         'employee_name' => $employee_name,
         'vehicle_no' => $vehicle_no,
         'money' => $money
      );
   }
   $cn -> close();
   return $result;
}