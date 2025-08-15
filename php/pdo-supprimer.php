<?php
// Connexion à la base de données
try {
 $pdo = new PDO('mysql:host=mysql-xampp.alwaysdata.net;dbname=xampp_user', 'xampp', 'pourmoicestbon');
  // echo "Connexion PDO réussie à la base de données xmpp.";
} catch (PDOException $e) {
  die("Erreur de connexion PDO : " . $e->getMessage());
}


$id = $_GET['id'];

// Vérifiez que la table existe ou corrigez le nom si besoin
$query = "DELETE from avis WHERE id = :id"; // requête de suppression (remplacez 'hero' par le nom correct si besoin)
$stmt = $pdo->prepare($query); // prépare la requête
$stmt->execute(['id' => $id]); // exécute la requête

header('Location: idee.php');


?>