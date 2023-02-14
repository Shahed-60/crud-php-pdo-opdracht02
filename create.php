<?php

require('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);

    if ($pdo) {
        // echo "Jeeejjj!!";
    } else {
        echo "Neeeeee!!";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
// 
$sql = "INSERT INTO pizza (Id 
                            ,Bodemformaat
                            ,Saus
                            ,Pizzatoppings
                            ,Kruiden)
        VALUES              (NULL
                            ,:bodemformaat 
                            ,:saus
                            ,:pizzatoppings
                            ,:kruiden);";

$statement = $pdo->prepare($sql);
$statement->bindValue(':bodemformaat', $_POST['pizzaformaat'], PDO::PARAM_STR);
$statement->bindValue(':saus', $_POST['sauce'], PDO::PARAM_STR);
$statement->bindValue(':pizzatoppings', $_POST['topping'], PDO::PARAM_STR);
$statement->bindValue(':kruiden', $_POST['spices'], PDO::PARAM_STR);

$result = $statement->execute();

if ($result) {
    echo "Er is een nieuw record gemaakt in de database.";
    header('Refresh:2; url=read.php');
} else {
    echo "Er is geen nieuw record gemaakt.";
    header('Refresh:2; url=read.php');
}
