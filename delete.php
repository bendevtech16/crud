<?php 

include_once("connexion.php");

var_dump($_GET["matricule"]);
if(isset($_GET['matricule'])){
    $matricule = $_GET['matricule'];
    $sql = "DELETE FROM etudiant WHERE matricule = $matricule"; 
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam( 1,$matricule);
    $stmt->execute();
    echo"element supprimer!!!";
    
    header('location: index.php)');
   
}

?>