<?php
/* Ce fichier représente une instance de connexion 
    avec notre serveur de base de données
*/

/* on essaie d'établir la connexion avec notre serveur de bdd */
try {

    /* Je déclare la variable $pdo 
        c'est une instance de la classe PDO
        dont j'appelle le constructeur 
        je passe au constructeur de la classe trois informations
        première : les informations relatives 
        au service de bdd avec en bonus l'encodage 
        deuxième mon nom d'utilisateur 
        troisième si besoin : le mot de passe
        mysql -u root
    */
    /* vous passez des arguments à la fonction 
        en l'occurrence trois sont attendus 
        il s'agit de trois chaînes de caractères donc entre '' ou ""
    */
    $pdo = new PDO('mysql:host=localhost:3306;charset=utf8','root','');
   

} catch(PDOException $e) {
    /* si c'est un echec je veux savoir la raison de cet échec 
        d'où le getMessage()
    */
    echo "". $e->getMessage();
}

