<?php
require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        // echo "Het werkt";
    } else {
        echo "Geen connectie:(";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT * FROM pizza";

$statement = $pdo->prepare($sql);
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_OBJ);
// 
$rows = "";
foreach ($result as $info) {
    $rows .= "<tr>
                    <td>$info->Id</td>
                    <td>$info->Bodemformaat</td>
                    <td>$info->Saus</td>
                    <td>$info->Pizzatoppings</td>
                    <td>$info->Kruiden</td>
                    <td>
                    <a href='delete.php?Id=$info->Id'>
                        <img src='img/b_drop.png' alt='kruis'>
                    </a>
                </td>
                <td>
                <a href='update.php?Id=$info->Id'>
                    <img src='img/b_edit.png' alt='potlood'>
                </a>
                    </td>
                    <tr>      
         ";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZA</title>
</head>

<body>

    <h3>Persoonsgegevens</h3>

    <a href="index.php">
        <input type="button" value="Nieuw record">
    </a>
    <br>
    <br>
    <table border='1'>
        <thead>
            <th>Id</th>
            <th>Bodemformaat</th>
            <th>Saus</th>
            <th>Pizzatoppings</th>
            <th>Kruiden</th>
            <th></th>
            <th></th>
            <t /head>
        <tbody>
            <?= $rows ?>
        </tbody>
    </table>
</body>

</html>
<!--  -->