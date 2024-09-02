<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gamestore</title>
</head>


<?php
require_once 'pdo.php';
require_once 'DbConnection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!$_POST['username'] || !$_POST['mp']) {
        echo 'identifiant incorrect';
    } else {

        $username = $_POST['username'];
        $mp = $_POST['mp'];
        $db = DbConnection::getPdo();
        $sql = ('SELECT * FROM USER WHERE username = :username'); //requete stockée dans variable
        $query = $db->prepare($sql);
        
        $query->bindParam(':username', $username);

        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            echo 'identifiant incorrect';

        } else {
           $mpOk = password_verify($mp, $user['mp']);

           if (!$mpOk) {
            echo 'mp incorrect';

           } else {
            header('location: index.php');
           }
        }

    }
}
?>
<body>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" id="username" name="username">

        <label for="mp">password</label>
        <input type="password" id="mp" name="mp">

        <button type="submit">connection</button>

    </form>

</body>
</html>