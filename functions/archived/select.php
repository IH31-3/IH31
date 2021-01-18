<?php
//案件検索
function search_matter(){
   $result = [[]];

   $cn = new mysqli(MYSQL_HOST,MYSQL_USER,MYSQL_PASS,DB_NAME);
   $cn -> set_charset('utf8');

   //初回アクセス時には指定なしでの検索
   if(!empty($_GET['status'])){
      $status = $_GET['status'];
      $sql = "SELECT matter.matter_no, matter.status,client.client_name,employee.employee_name,matter.vehicle_no,matter.money FROM matter JOIN client ON matter.client_no = client.client_no JOIN employee ON employee.employee_no = matter.employee_no WHERE status = ?";

      $stmt = $cn -> prepare($sql);
      $stmt -> bind_param("s",$status);
   }
   else{
      $sql = "SELECT matter.matter_no, matter.status,client.client_name,employee.employee_name,matter.vehicle_no,matter.money FROM matter JOIN client ON matter.client_no = client.client_no JOIN employee ON employee.employee_no = matter.employee_no";
      $stmt = $cn -> prepare($sql);
   }
   $stmt -> execute();
   $stmt -> bind_result($matter_no,$status,$client_name,$employee_name,$vehicle_no,$money);
   for($i = 0;$stmt -> fetch();$i++){
      $result[$i] = array(
         $matter_no,
         $status,
         $client_name,
         $employee_name,
         $vehicle_no,
         $money
      );
   }
   $cn -> close();
   return $result;
}