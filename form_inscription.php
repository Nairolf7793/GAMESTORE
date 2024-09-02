<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamestore</title>
</head>
<body>

<?php
require_once 'pdo.php';
require_once 'DbConnection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!$_POST['username'] || !$_POST['mp']) {
        echo 'identifiant invalide';
    } else {
        $username=$_POST['username'];
        $mp=$_POST['mp'];
        $hash=password_hash($mp,PASSWORD_BCRYPT);

        
        $query = DbConnection::getPdo()->prepare('INSERT INTO USER (username, mp)
        VALUES (
        :username,
        :mp)
        ');

        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':mp', $hash);

        $query->execute();
      
    }
    header('location: index.php');
}
?>

    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" id="username" name="username">

        <label for="mp">password</label>
        <input type="text" id="mp" name="mp">

        <button type="submit">inscription</button>

    </form>


</body>
</html>