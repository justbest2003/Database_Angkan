<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if (isset($_GET["P_id"]))
{
    $strP_id = $_GET["P_id"];
}
require "connect.php";
$sql = "SELECT * FROM patient WHERE P_id = ?";
$params = array($strP_id);
$stmt = $conn->prepare($sql);
$stmt->execute($params);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<br></br>
<table width="300" border="3">
  <tr>
    <th width="325">รหัสลูกค้าสมาชิก</th>
    <td width="240"><?php echo $result["P_id"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อ</th>
    <td><?php echo $result["P_name"]; ?></td>
  </tr>

  <tr>
    <th width="130">วันเดือนปีเกิด</th>
    <td><?php echo $result["P_DOB"]; ?></td>
  </tr>

  <tr>
    <th width="130">อีเมล</th>
    <td><?php echo $result["P_debt"]; ?></td>
  </tr>

  </table>
<?php
$conn = null;
?>
</body>
</html>
</body>
</html>