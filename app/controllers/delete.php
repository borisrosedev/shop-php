<?php
require_once("../core/connect.php");

if(isset($_GET["id"])){  
    $id = htmlspecialchars($_GET["id"]);
    $requete = "DELETE FROM shop.products WHERE id = ?";
    $statement = $pdo->prepare($requete);
    $statement->execute([$id]);    
    header("Location: ../index.php");
}


