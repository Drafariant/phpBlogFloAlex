<?php


//définition de constantes pour la connexion à la base de données
DEFINE("SERVEUR", "localhost");
DEFINE("PORT", "3306");
DEFINE("DATABASE", "blogun");
DEFINE("DB_USERNAME", "blogMaster");
DEFINE("DB_PASSWORD", "ceciestleMDP");
DEFINE("DB_CONNEXION", "mysql:host=" . SERVEUR . ":" . PORT . ";dbname=" . DATABASE . ";charset=UTF8");
// ou require_once ('../chemin/vers/config')


//récup tout les articles
function getAllArticle(): array
{
//replit un tableau avec les résultats positifs et retourne ce tableau

    $lArticle = [];//creation du tableau à remplir

    //connexion à la base de données
    $lBdd = new PDO(DB_CONNEXION, DB_USERNAME, DB_PASSWORD);
    $lSQLQuery = "SELECT * FROM article";
    //requête à la BDD
    foreach($lBdd->query($lSQLQuery) as $lRow)
    {
        //on remplit le tableau
        $lArticle[] = $lRow;
    }
    //déconnexion
    $lBdd = null;

    return $lArticle;
    //print_r ($lArticle);
}
?>