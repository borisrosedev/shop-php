<?php
require_once("../core/connect.php");


if (isset($_POST["name"]) && isset($_POST["url"]) && isset($_POST["description"]) && isset($_POST["price"]) && isset($_POST["owner"])) {

    $price = htmlspecialchars($_POST["price"]);
    $name = htmlspecialchars($_POST["name"]);
    $url = htmlspecialchars($_POST["url"]);
    $description = htmlspecialchars($_POST["description"]);
    $owner = htmlspecialchars($_POST["owner"]);

    $requete = "INSERT INTO shop.products(name, description,url, price, owner) VALUES(?,?,?,?,?)";

    $statement = $pdo->prepare($requete);
    $statement->execute([$name,$description,$url,$price,$owner]);

    header("Location: ../index.php");



}