<?php
try {
    require 'connect.php';

    $sql = "SELECT CustomerID,Name,CountryCode,OutstandingDebt
                FROM customer";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //แบบที่ 2
     while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
        echo '<br>' .
            ' รหัสลูกค้า : ' .
            $result[0] .
            ' ชื่อลูกค้า : ' .
            $result[1] .
            ' รหัสประเทศ : ' .
            $result[2] .
            ' ยอดหนี้ : ' .
            $result[3] ;
    }
} catch (PDOException $e) {
    echo 'ไม่สามารถประมวลผลข้อมูลได้ : ' . $e->getMessage();
}
$conn = null;
?>
