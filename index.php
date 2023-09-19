<?php
include_once("connexion.php");
include_once("delete.php");

$sql ="SELECT * FROM etudiant";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <h1>affichage des infos de la bd</h1>
  <a href="add.php" class="btnAdd">Add</a>
   <table>
        <thead>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL  </th>
            <th>EDITER</th>
            <th> SUPPRIMER </th>
        </thead>
        <tbody>
               <?php foreach($data as $row) {?>
                <tr>
                    <td><?=$row['nom']?></td>
                    <td><?=$row['prenom']?></td>
                    <td><?=$row['email']?></td>
                    <td><a href="/update.php" class="edit" >Edit</a></td>
                    <td><a href="/delete.php?matricule=<?=$row['matricule']?>">delete</a></td>
                </tr>
              <?php }?>
        </tbody>
        </table>
</body>
</html>
