<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Country</title>
</head>
<body>
    <h1>Search Country</h1>
    <form action="selectCountry_sqlinjection_solution-bindparam.php" method="GET">
        <input type="text" placeholder="Enter Customer ID" name="countryCode">

        <br> <br>

        <input type="submit">
</form>
</body>
</html>

<?php

if (isset($_GET["countryCode"])):
    echo "<br>" . $_GET['countryCode'];
    require 'connect.php';
    $count = 0;
    $sql = "SELECT * FROM country where CountryCode =:countryCode";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':countryCode', $_GET['countryCode']);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    echo "<br>******************<br>";

    while ($row = $stmt->fetch()) {
        echo $row['CountryCode']. '&nbsp' . $row['CountryName'] ."<br>";
        $count++;
    }

    //echo "count ... ".$count;
    if($count==0)
    echo "<br> No data ... <br>";
    $conn = null;
endif;
?>

