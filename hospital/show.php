<?php
require "connect.php";

$sql = 
"SELECT * FROM patient,permissions WHERE patient.P_id = permissions.P_CID AND P_debt BETWEEN 1000 AND 3000"; 

$stmt = $conn->prepare($sql);
$stmt->execute();

echo '<br>';

$result = $stmt->fetchAll();
//print_r($result);

foreach ($result as $r) {
print $r['P_id'] .'  '. $r['P_name'].' '.$r['P_debt'].'  '.$r['P_Username'] .'<br>';
}
?>