 
<?php 

require_once 'pdo.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     if(
          !$_POST['nom'] ||
          !$_POST['prix'] ||
          !$_POST['pegi'] ||
          !$_POST['genre'] 
     )
          {
               echo 'un des champs est vide';
          }
     else {
          $query=$pdo->prepare('INSERT INTO liste_game (nom,prix,pegi,genre)   
          
          VALUES (
               :nom,
               :prix,
               :pegi,
               :genre
               )       
               ');
               $query->bindParam(':nom', $_POST['nom']);
               $query->bindParam(':prix', $_POST['prix']);
               $query->bindParam('pegi', $_POST['pegi']);
               $query->bindParam('genre', $_POST['genre']);
              
               $query->execute();
          header('location:index.php');
  
          }
     }
else {
     }
                                                       
?>