<?php
require 'config.php';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        // echo "Het werkt";
    } else {
        echo "No connection;(";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // var_dump($_POST);

    try {
        $sql = "UPDATE pizza
        SET     Bodemformaat = :bodemformaat
                ,saus = :saus
                ,Pizzatoppings = :pizzatoppings
                ,Kruiden = :kruiden
            Where Id = :id";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(':bodemformaat', $_POST['pizzaformaat'], PDO::PARAM_STR);
        $statement->bindValue(':saus', $_POST['sauce'], PDO::PARAM_STR);
        $statement->bindValue(':pizzatoppings', $_POST['topping'], PDO::PARAM_STR);
        $statement->bindValue(':kruiden', $_POST['spices'], PDO::PARAM_STR);
        $statement->bindValue(':id', $_POST['id'], PDO::PARAM_STR);

        $statement->execute();

        //stuur gebruiker door naar read.php met een header(Refresh) functie;
        echo 'Het updaten is gelukt';
        header('Refresh:3; url=read.php');
    } catch (PDOException $e) {
        echo 'Update niet voltooid';
        header('Refresh:3; url=read.php');
        echo $e->getMessage();
    }
    // 
    exit();
}
// 
$sql = "SELECT Id 
        ,Bodemformaat
        ,Saus
        ,Pizzatoppings
        ,Kruiden
            FROM pizza
            WHERE Id = :Id";

$statement = $pdo->prepare($sql);
$statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);
$statement->execute();

$result = $statement->fetch(PDO::FETCH_OBJ);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="shortcut icon" href="/IMG/favicon.ico" type="image/x-icon">
    <title>PHP PDO CRUD</title>
</head>

<body>
    <h1>PIZZAAAA</h1>

    <form action="update.php" method="post">

        <label for="pizzaformaat">Bodemformaat:</label><br>
        <input type="text" name="pizzaformaat" id="pizzaformaat" value="<?= $result->Bodemformaat; ?>"><br>

        <label for="sauce">saus:</label><br>
        <input type="text" name="sauce" id="sauce" value="<?= $result->Saus; ?>"><br>

        <label for="topping">Pizzatoppings:</label><br>
        <input type="text" name="topping" id="topping" value="<?= $result->Pizzatoppings; ?>"><br>

        <label for="spices">Kruiden:</label><br>
        <input type="text" name="spices" id="spices" value="<?= $result->Kruiden; ?>"><br>



        <input type="hidden" name="id" value="<?= $result->Id; ?>">

        <input type="submit" value="Send!">
    </form>


</body>