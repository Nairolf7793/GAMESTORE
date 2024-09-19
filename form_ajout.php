<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamestore</title>
</head>
<body>

<?php

require_once 'configuration/DbConnection.php';
require_once 'session.php';

$pdo = DbConnection::getPdo();
$query = $pdo->query('SELECT * FROM liste_game');
$liste_game = $query->fetchAll(PDO::FETCH_ASSOC);

?>
    <main>
        <form action="form_valid.php" method="POST">
            <div>
                <label for="nom" class="">Nom</label>
                <input type="text" class="" id="nom" name="nom">
            </div>
            <div>
                <label for="prix" class="">Prix</label>
                <input type="number" class="" id="prix" name="prix">
            </div>
            <div>
                <label for="pegi" class="">pegi</label>
                <input type="number" class="" id="pegi" name="pegi">
            </div>
            <div>
                <label for="" class="">genre</label>
                <input type="text" class="" id="genre" name="genre">
            </div>
            <button type='submit'>envoyer</button>
        </form>
    </main>
    
</body>
</html>