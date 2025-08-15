<?php
try {
 $pdo = new PDO('mysql:host=mysql-xampp.alwaysdata.net;dbname=xampp_user', 'xampp', 'pourmoicestbon');
  // echo "Connexion PDO réussie à la base de données xmpp.";
} catch (PDOException $e) {
  die("Erreur de connexion PDO : " . $e->getMessage());
}

echo "<!DOCTYPE html>
<html lang='fr'>
  <head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>Règlement</title>
    <link
      href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'
      rel='stylesheet'
    />
    <link
      href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'
      rel='stylesheet'
      integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH'
      crossorigin='anonymous'
    />
    <link rel='stylesheet' href='style.css' />
    <link
      rel='shortcut icon'
      href='./img/icon/debase.png'
      type='image/x-icon'
    />
  </head>
  <body>
    <div class='imgdehau'>
      <h2>Heart of Leviathan</h2>
      <p>Serveur avec des mise à jour souvent</p>
    </div>
    <div class='sidebar' id='sidebar'>
      <span class='icon'>☰</span>
      <ul>
        <li><a href='index.html'>Accueil</a></li>
        <li><a href='rejoidre.html'>Rejoidre</a></li>
        <li><a href='cotacts.html'>Contact</a></li>
      </ul>
    </div>
    <div class='overlay' id='overlay'></div>
    <div style='border: 1px solid black; padding: 20px; margin: 20px;'>
      <h1>Idées pour le server :</h1>
     
    ";

    $query = "SELECT * FROM avis";
$stmt = $pdo->query($query);
$avis = $stmt->fetchAll();

 foreach ($avis as $avi) {
    echo "<div class='idee' style='border: 1px solid black; padding: 10px; margin-bottom: 10px;'>
            <h4>" . htmlspecialchars($avi['avis']) . "</h4>";
        echo "|" . '<a href="pdo-supprimer.php?id=' . $avi['id'] . '">Supprimer</a><br></div>';
  }


  echo  "</div><footer class='footer'>
      <div class='links'>
        <a href='index.html'>Accueil</a>
        <a href='rejoidre.html'>Rejoidre</a>
        <a href='cotacts.html'>Contact</a>
      </div>
      <div class='social-icons'>
        <a href='#'>&#x1F426;</a>
        <a href='#'>&#x1F310;</a>
        <a href='#'>&#x1F4F1;</a>
      </div>
    
      <p>&copy; Heart of Leviathan. Tous droits réservés.</p>
    </footer>
    <script
      src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'
      integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz'
      crossorigin='anonymous'
    ></script>
    <script src='main.js'></script>
  </body>
</html>"





?>