<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamestore</title>
</head>
<body>

<?php

require_once 'configuration/DbConnection.php';
require_once 'session.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!$_POST['firstname'] || !$_POST['lastname'] || !$_POST['mp'] || !$_POST['email'])  {
        echo 'un des champs est manquant';
    } else {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $mp=$_POST['mp'];
        $hash=password_hash($mp,PASSWORD_BCRYPT);
        $email=$_POST['email'];
        $nb=$_POST['nb'];
        $adress=$_POST['adress'];
        $code=$_POST['code'];

        $query = DbConnection::getPdo()->prepare('INSERT INTO user (firstname,lastname, mp, email, nb, adress, code)
        VALUES (
        :firstname,
        :lastname,
        :mp,
        :email,
        :nb,
        :adress,
        :code)
        ');

        $query->bindParam(':firstname', $_POST['firstname']);
        $query->bindParam(':lastname', $_POST['lastname']);
        $query->bindParam(':mp', $hash);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':nb', $_POST['nb']);
        $query->bindParam(':adress', $_POST['adress']);
        $query->bindParam(':code', $_POST['code']);

        if (!$query->execute()){
            echo "une erreur est survenue";
        }
        else {
            $_SESSION["success message"] = "Votre compte a bien été crée";
            header('location: form_co.php'); }
    } 
}
?>

    <form action="" method="post">
        <label for="firstname">Nom: </label>
        <input type="text" id="firstname" name="firstname">

        <label for="lastname">Prénom: </label>
        <input type="text" id="lastname" name="lastname">

        <label for="mp">mot de passe: </label>
        <input type="text" id="mp" name="mp">

        <label for="email">email: </label>
        <input type="email" id="email" name="email">

        <label for="nb">numéro: </label>
        <input type="number" id="nb" name="nb">

        <label for="adress">adresse: </label>
        <input type="text" id="adress" name="adress">

        <label for="code">code postal:</label>
        <input type="number" id="code" name="code">

        <button type="submit">inscription</button>

    </form>


</body>
</html>