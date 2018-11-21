<?php

$dsn = 'mysql:dbname=shop;host=10.115.145.5';
$user = 'root';
$password = 'root';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

    $req = $bdd->prepare('INSERT INTO panier(products_idproducts) VALUES (:idProducts)');
    $req->bindParam(':idProducts', $_GET['customers_idcustomers'], PDO::PARAM_INT);
    $result = $req->execute();


    echo '__________-'.$result.'-_______________'
?>


