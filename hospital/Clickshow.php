<html> <head>
<title> Select to See Detail </title>
</head>
<body>
<?php
require "connect.php";
$sql = "SELECT * FROM patient,permissions WHERE patient.P_id = permissions.P_CID";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสผู้ใช้ </th>
    <th width="140"> <div align="center">ชื่อ </th>
    <th width="120"> <div align="center">อีเมล </th>
  </tr>

<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>


  <tr>
    <td>
        <a href="detailClickshow.php?P_id=<?php echo $result["P_id"];?>">
            <?php echo $result["P_id"]; ?></a></td>
    
    <td><?php echo $result["P_name"]; ?></td>
    <td><?php echo $result["P_Username"]; ?></td>
  </tr>

<?php
  }
?>

</table>

<?php
$conn = null;
?>
</body>  
</html>
