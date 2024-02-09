<?php
/* PHP PART*/
require('./core/connect.php');
/* J'importe le fichier qui établit la connexion avec son serveur de bdd */

/* Je déclara une variable qui est un tableau qui contiendra à termes toutes 
les enregistrements de la table qui m'intéressent 

*/
/* initialisation d'un tableau vide */
$products = array();

/* Je tente d'envoyer une requête vers mon serveur */
try {
    // $valeur_condition = 1;
    $requete = "SELECT * FROM shop.products";

    /* La requête est sécurisée car je prépare la requête puis je l'exécute requête*/
    $statement = $pdo->prepare($requete);
    $statement->execute([]);

    /* Avec la bouble je dis la chose suivante 
        tant qu'il y a des lignes dans la table et bien je stocke cette ligne dans mon tableau
    
    */
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        /* chaque ligne ddans notre tableau products est stocké comme un élément
            du tableau $products
        */
        array_push($products, $row);

    }


} catch (PDOException $e) {
    echo "Erreur de requête : " . $e->getMessage();
}

?>

<!-- HTML PART -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Boris Rose">
    <meta name="description" content="All Shop, What you want to find, you can">
    <meta name="keywords" content="All Shop, sold, gifts">
    <title>All Shop | Products </title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/3b3c8e71e5.js" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
</head>

<body>

    <main>
        <form class="form" action="./controllers/create.php" method="POST">

            <section>
                <input type="text" placeholder="Nom du produit" name="name">
                <input type="number" placeholder="Prix du produit" name="price">
                <input type="text" placeholder="Url du produt" name="url">
                <input type="text" placeholder="Propriétaire du produt" name="owner">
                <textarea type="text" placeholder="Description du produit" name="description"></textarea>
            </section>
            <section class="form__actions">
                <button type="submit">Valider</button>
                <button type="reset">Réinitialiser</button>
            </section>
        </form>


        <section class="articles">

            <?php
            if ($products && count($products) > 0) {
                foreach ($products as $product) {
                    ?>
                    <article id=<?= 'article-' . $product["id"] ?>>
                        <i class="fas fa-times-circle" id=<?= 'article__icon-' . $product["id"] ?> data-id=<?= $product["id"] ?>></i>
                        <figure>
                            <img src=<?= $product["url"] ?> alt=<?= $product["name"] ?> />
                        </figure>
                    </article>
                    <?php
                }
            }
            ?>




        </section>
        </main>

</body>

</html>