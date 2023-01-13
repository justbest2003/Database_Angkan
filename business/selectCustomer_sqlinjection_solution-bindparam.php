<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Customer</title>
</head>
<body>
    <h1>Search Customer</h1>
    <form action="select_sqlinjection_solution-bindparam.php" method="GET">
        <input type="text" placeholder="Enter Customer ID" name="customerID">

        <br> <br>

        <input type="submit">
</form>
</body>
</html>

<?php

if (isset($_GET["customerID"])):
    echo "<br>" . $_GET['customerID'];
    require 'connect.php';
    $count = 0;
    $sql = "SELECT * FROM customer where CustomerID =:customerID";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':customerID', $_GET['customerID']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<br>******************<br>";

    while ($row = $stmt->fetch()) {
        echo $row['CustomerID']. '&nbsp' . $row['Name'] ."<br>";
        $count++;
    }

    //echo "count ... ".$count;
    if($count==0)
    echo "<br> No data ... <br>";
    $conn = null;
endif;
?>

