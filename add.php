<?php
 include_once("connexion.php")  ;

 if(isset($_POST["nom"], $_POST["prenom"], $_POST["email"])){
    $nom = $_POST["nom"];
    $prenom =$_POST["prenom"];
    $email = $_POST["email"] ;

    $sql ="INSERT INTO etudiant(nom, prenom, email) VALUES(:nom,:prenom,:email)";
    if(isset($pdo)){
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam( ':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        header('location:index.php');
    }

    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
 die('added successfully!!!') ;
 }
 
//  $age = $_POST["age"];
//  $telephone = $_POST["telephone"];


//  $stmt->bindParam( ':age',$age, PDO::PARAM_INT);
//  $stmt->bindParam(':telephone', $telephone, PDO::PARAM_INT);
 
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
    <div>
        <h1>AJOTER UN AUTRE ETUDIANT DANS LA BD!</h1>
    </div>
    <br><br><br>
    <div>
        <a href="index.php" class="btnBack btnAdd">Back</a>
   </div>
    <form action="add.php" method="post">
        <input type="text" name="nom" id="nom" width="70px" height="35px" placeholder="entrer votre nom"> <br> <br>
        <input type="text" name="prenom" id="prenom"  placeholder="entrer votre prenom"> <br><br>
        <input type="email" name="email" id="email" placeholder="entez votre email"><br><br>
        <!-- <input type="number" name="age" id="age"   placeholder="ex:34"> <br><br>
        <input type="tel" name="telephone" id="telephone"   placeholder="ex:655654378"><br><br> -->
        <input type="submit" value="Save">
        </form>
</body>
</html>