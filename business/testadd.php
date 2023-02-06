<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Country</title>
</head>

<body>
 
<h1>Add Country</h1>
<form action="testadd.php" method="POST">
    <input type="text" placeholder="Enter Country code" name="CustomerID">
<br></br>
<input type="text" placeholder="Enter Country name" name="Name">
<br></br>
<input type="submit">
</form>

</body>
</html>

<?php
if(!empty($_POST['CustomerID']) && !empty($_POST['Name'])):
    require 'connect.php';
    $sql_insert="insert into customer values (:CustomerID, :Name)"; 

    $stmt = $conn->prepare($sql_insert);
    $stmt->bindParam(':CustomerID', $_POST['CustomerID']);
    $stmt->bindParam(':Name', $_POST['Name']);

    if($stmt->execute()):
        $message = 'Suscessfully add new customer';
        //header("Location:/database/business/tablePDOFetch2.php");
    else:
    $message = 'Fail to add new customer';
    endif;
    echo $message;
    $conn = null;
endif;
?>